<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Addressfacture;
use App\Models\Addresslivraison;
use App\Models\Produit;
use App\Models\Imgproduit;
use App\Models\Shoppingcart;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dispo = "yes";
        $produitdispos = Produit::where('dispo', $dispo)->paginate(8);
        $simple_articles = [];
        $i = 0;
        foreach($produitdispos as $produitdispo){
            $produitid = $produitdispo->id;
            $imgproduit = Imgproduit::where('produit_id', $produitid)->first();
            $article = [
                'id' => $imgproduit->produit->id,
                'name' => $imgproduit->produit->name,
                'price' => $imgproduit->produit->price,
                'qty' => 1,
                'image' => '/assets/images/produits/'.$imgproduit->image,
                'alt' => $imgproduit->alt,
                'route' => '/produit/'.$imgproduit->produit->id,
                'conditionnement' =>$imgproduit->produit->conditionnement,
            ];

            $simple_articles[$i] = $article;
            $i++;
        }
        $articles = json_encode($simple_articles);
        return view('index', compact('articles'));
    }

    public function about()
    {
        $produits = Produit::all();
        $simple_articles = [];
        $i = 0;
        foreach($produits as $produit){
            if($produit->dispo == "yes"){
                $produitid = $produit->id;
                $imgproduit = Imgproduit::where('produit_id', $produitid)->first();
                $article = [
                    'id' => $produit->id,
                    'name' => $produit->name,
                    'price' => $produit->price,
                    'qty' => 1,
                    'image' => '/assets/images/produits/'.$imgproduit->image,
                    'alt' => $imgproduit->alt,
                    'route' => '/produit/'.$produit->id,
                    'conditionnement' =>$imgproduit->produit->conditionnement,
                ];
    
                $simple_articles[$i] = $article;
                $i++;
            }
        }
        $articles = json_encode($simple_articles);
        return view('about', compact('articles'))->withTitle('À Propos de Nous')->withImage('bg-about.jpg');
    }

    public function contact()
    {
        return view('contact')->withTitle('Contact')->withImage('bg-contact.jpg');
    }

    public function magasin()
    {
        $produits = Produit::all();
        $simple_articles = [];
        $i = 0;
        foreach($produits as $produit){
            $produitid = $produit->id;
            $imgproduit = Imgproduit::where('produit_id', $produitid)->first();

            $article = [
                'id' => $produit->id,
                'name' => $produit->name,
                'price' => $produit->price,
                'qty' => 1,
                'desc' => $produit->desc,
                'dispo' => $produit->dispo,
                'image' => '/assets/images/produits/'.$imgproduit->image,
                'alt' => $imgproduit->alt,
                'route' => '/produit/'.$produit->id,
                'conditionnement' =>$imgproduit->produit->conditionnement,
            ];

            $simple_articles[$i] = $article;
            $i++;
        }
           $articles = json_encode($simple_articles);

        return view('shop', compact('articles'))->withTitle('Magasin')->withImage('bg-shop.jpg');
    }

    public function acount()
    {
        $user_id = Auth()->user()->id;
        $shoppingcarts = Shoppingcart::where('user_id', $user_id)->get();
        $addressfactures = Addressfacture::where('user_id', $user_id)->get();
        $addresslivraisons = Addresslivraison::where('user_id', $user_id)->get();
        return view('acount', compact('addressfactures', 'addresslivraisons', 'shoppingcarts'))->withTitle('Mon Compte')->withImage('bg-acount.jpg');
    }

    public function acountadmin()
    {
        $users = User::all();
        $produits = Produit::all();
        $selectimgprods = [];
        $i = 0;
        foreach($produits as $produit){
            $produitid = $produit->id;
            $imgproduit = Imgproduit::where('produit_id', $produitid)->first();
            $selectimgprods[$i] = $imgproduit;
            $i++;
        }
        $no = "no";
        $commande = Shoppingcart::where('checkreception', $no)->get();
        $countcommande = count($commande);
        return view('acountadmin', compact('produits', 'users', 'selectimgprods', 'countcommande'))->withTitle('Administration')->withImage('bg-admin.jpg');
    }
}
