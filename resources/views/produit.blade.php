@extends('layouts.myapp')

@section('dynamicPageTitle', 'Produit')
@section('description', "Retrouvez la description des produits proposés par légumes de Bel Air, producteur local de légumes en agriculture raisonnée, et faite votre panier selon vos envis et la saison.")
@section('keywords', "Description produit, description légume, légumes de Bel Air, Réalville, Tarn et Garonne, producteur local, vente à la ferme, panier de légumes, agriculture raisonnée")

@section('content')

    @include('components.header.titlepage2')

    @include('components.produits.produit')

    @include('components.produits.minigrid')

@endsection