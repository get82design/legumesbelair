@extends('layouts.myapp')

@section('dynamicPageTitle', 'Panier')
@section('description', "Retrouvez votre panier Légumes de Bel Air sur cette page. Ajustez vos besoins en légumes et réservez. Des légumes issus d'une production locale, à Réalville dans le Tarn et Garonne. Venez chercher vos légumes directement chez le producteur.")
@section('keywords', "panier, légumes de Bel Air, vente de légumes, chez le producteur, production locale, vente de légumes, préparation panier, agriculture raisonnée, Réalville, Tarn et Garonne")

@section('content')

    @include('components.header.titlepage')

    @include('components.panier.index')

@endsection