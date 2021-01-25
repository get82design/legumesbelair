<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Imgproduit;
use App\Models\User;
use App\Models\Shoppingcart;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newproduit = [
            "name" => $request->name,
            "price" => $request->price,
            "conditionnement" => $request->conditionnement,
            "desc" => $request->desc,
            "dispo" => $request->dispo
        ];
        Produit::create($newproduit);
        $produit = Produit::all()->last();
        $id = $produit->id;
        // Save image
        $path = Storage::disk('image_produit')->put('', $request->file('image'));
        // Save in base
        $imgproduit = new Imgproduit;
        $imgproduit->image = $path;
        $imgproduit->alt = $request->image_alt;
        $imgproduit->produit_id = $id;
        $imgproduit->save();
        $imgproduit = new Imgproduit;
        $imgproduit->image = 'pro-detail-01.jpg';
        $imgproduit->alt = 'text alt';
        $imgproduit->produit_id = $id;
        $imgproduit->save();
        $imgproduit = new Imgproduit;
        $imgproduit->image = 'pro-detail-01.jpg';
        $imgproduit->alt = 'text alt';
        $imgproduit->produit_id = $id;
        $imgproduit->save();
        $imgproduits = Imgproduit::where('produit_id', $id)->get();
        $imgproduitfirst = Imgproduit::where('produit_id', $id)->first();
        return view('components.admin.produit.edit', compact('produit', 'imgproduits', 'imgproduitfirst'))->withTitle('Éditer un produit')->withImage('bg-shop.jpg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::findorfail($id);
        $name = $produit->name;
        $dispo = "yes";
        $imgproduits = Imgproduit::where('produit_id', $id)->get();
        $produits = Produit::where('dispo', $dispo)->get();
        $articles = [];
        $i = 0;
        foreach($produits as $produit){
            $produitid = $produit->id;
            $imgproduit = Imgproduit::where('produit_id', $produitid)->first();
            $article = [
                'id' => $produit->id,
                'name' => $produit->name,
                'price' => $produit->price,
                'qty' => 1,
                'image' => '/assets/images/produits/'.$imgproduit->image,
                'conditionnement' =>$imgproduit->produit->conditionnement,
                'alt' => $imgproduit->alt,
                'route' => '/produit/'.$produit->id,
            ];

            $simple_articles[$i] = $article;
            $i++;
        }
           $articles = json_encode($simple_articles);
        return view('produit', compact('produit', 'imgproduits', 'articles'))->withImage('bg-shop.jpg')->withTitle($name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::findorfail($id);
        $imgproduits = Imgproduit::where('produit_id', $id)->get();
        $imgproduitfirst = Imgproduit::where('produit_id', $id)->first();
        return view('components.admin.produit.edit', compact('produit', 'imgproduits', 'imgproduitfirst'))->withTitle('Éditer un produit')->withImage('bg-shop.jpg');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit=Produit::findOrFail($id);
        $produit->name=$request->name;
        $produit->price=$request->price;
        $produit->desc=$request->desc;
        $produit->dispo=$request->dispo;
        $produit->conditionnement=$request->conditionnement;
        $produit->save();
        $produit=Produit::findOrFail($id);
        $imgproduits = Imgproduit::where('produit_id', $id)->get();
        $imgproduitfirst = Imgproduit::where('produit_id', $id)->first();
        return view('components.admin.produit.edit', compact('produit', 'imgproduits', 'imgproduitfirst'))->withTitle('Éditer un produit')->withImage('bg-shop.jpg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyproduit($id)
    {
        $produit=Produit::findOrFail($id);
        $produit->delete();
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
        return back();
    }
}
