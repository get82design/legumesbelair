<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Models\Produit;
use App\Models\Imgproduit;
use App\Models\Addresslivraison;
use App\Models\Shoppingcart;
use Auth;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart() {
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product_image = Request::get('product_image');
            $product_qty = Request::get('num-product');
            $product = Produit::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => $product_qty, 'price' => $product->price, 'options' => ['image' => $product_image]));
        }

        $cart = Cart::content();

        return back();
    }

    public function panier(){
        $addresslivraison = [];
        if (Auth::check())
        {
            $user_id = Auth()->user()->id;
            $addresslivraison = Addresslivraison::where('user_id', $user_id)->first();
        }
        $cart = Cart::content();
        return view('panier', compact('cart', 'addresslivraison'))->withTitle('Panier')->withImage('bg-panier.jpg');
    }

    public function deleterow($rowId){
        Cart::remove($rowId);
        return redirect('panier');
    }

    public function createproduit(){
        return view('components.admin.produit.create')->withTitle('Rajouter un produit')->withImage('bg-panier.jpg');
    }

    public function crop(){
        return view('cropper')->withTitle('Créer une image')->withImage('bg-panier.jpg');
    }
}