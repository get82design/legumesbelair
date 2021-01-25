@extends('layouts.myapp')

@section('dynamicPageTitle', 'À propos')
@section('description', "Découvrez qui nous sommes, une famille d'agriculteurs maraichers, qui produisent des légumes en pleine terre et en plein air, pour une vente locale, directement à la ferme.")
@section('keywords', "légumes de Bel air, à propos, vente directe, producteur, agriculture raisonnée, vente de légumes, circuit court, production locale, Réalville, Tarn et Garonne, vente à la ferme")

@section('content')

    @include('components.header.titlepage')

    @include('components.about.story')

    {{-- @include('components.about.process') --}}

    @include('components.produits.minigrid')

    @include('components.banniere.dessin')

    @include('components.newsletter.model1')

@endsection