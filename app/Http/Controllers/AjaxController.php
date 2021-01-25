<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Imgproduit;
use App\Models\Produit;

class AjaxController extends Controller
{
    public function ajaxPanierPost($id){
        $imgproduit = Imgproduit::where('produit_id', $id)->first();
        $n = 0;
        $cart=Cart::content();
        foreach($cart as $item){
            if ($item->id == $id){
                $n = 1;
                $qty = $item->qty + 1;
                $rowId = $item->rowId;
                Cart::update($rowId, $qty);
            }
        }
        if($n == 0){
            $article = $imgproduit->produit->name;
            $price = $imgproduit->produit->price;
            $qty = 1;
            $image = $imgproduit->image;

            Cart::add(array('id' => $id, 'name' => $article, 'qty' => $qty, 'price' => $price, 'options' => ['image' => $image]));
        }
        $cart = Cart::content();
        $i = 0;
        foreach($cart as $article){
            $article = [
                'id' => $article->id,
                'name' => $article->name,
                'price' => $article->price,
                'qty' => $article->qty,
                'image' => '/assets/images/produits/'.$article->options->image,
            ];

            $cartpan[$i] = $article;
            $i++;
        }
        return ['success' => true, 'data' => $cartpan];
    }



    public function ajaxPanierPostQty($id, $qty){
        $imgproduit = Imgproduit::where('produit_id', $id)->first();
        $n = 0;
        $cart=Cart::content();
        foreach($cart as $item){
            if ($item->id == $id){
                $n = 1;
                $qty = $qty;
                $rowId = $item->rowId;
                Cart::update($rowId, $qty);
            }
        }
        if($n == 0){
            $article = $imgproduit->produit->name;
            $price = $imgproduit->produit->price;
            $qty = $qty;
            $image = $imgproduit->image;

            Cart::add(array('id' => $id, 'name' => $article, 'qty' => $qty, 'price' => $price, 'options' => ['image' => $image]));
        }
        $cart = Cart::content();
        $i = 0;
        foreach($cart as $article){
            $article = [
                'id' => $article->id,
                'name' => $article->name,
                'price' => $article->price,
                'qty' => $article->qty,
                'image' => '/assets/images/produits/'.$article->options->image,
            ];

            $cartpan[$i] = $article;
            $i++;
        }
        return ['success' => true, 'data' => $cartpan];
    }



    public function ajaxRequestGetId($id){
        $produitoriginal = Imgproduit::where('produit_id', $id)->first();
        $produit = [
            'id' => $produitoriginal->produit->id,
            'name' => $produitoriginal->produit->name,
            'price' => $produitoriginal->produit->price,
            'qty' => 1,
            'image' => $produitoriginal->image,
        ];
        return ['success' => true, 'data' => $produit];
    }
}
