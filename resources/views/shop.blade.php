@extends('layouts.myapp')

@section('dynamicPageTitle', 'Magasin')
@section('description', "Magasin des légumes de Bel Air. Découvrez ici tous nos produits et leur disponibilité. Préparez votre panier sur le site et venez le récupérer directement à la ferme à Réalville, dans le Tarn et Garonne. Tous nos produits sont de saison et issus d'une agriculture raisonnée.")
@section('keywords', "magasin, légumes de Bel Air, Réalville, Tarn et Garonne, 82, production locale, agriculture raisonnée, en plein air, vente de légumes, tomates, aubergines, melons, oignons, butternut, citrouille, fève, courgette, ail, piment, pastèque, potimarron, échalote, vente à la ferme, préparation panier")

@section('content')

    @include('components.header.titlepage')

    @include('components.produits.shop')

@endsection
