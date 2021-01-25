@extends('layouts.myapp')

@section('dynamicPageTitle', 'Contact')
@section('description', "Contact légumes de Bel Air à Réalville dans le Tarn et Garonne. Pour laisser un message ou trouvez l'adresse et le numéro de téléphone de notre entreprise. Préparation de panier légumes en vente directement à la ferme.")
@section('keywords', "légumes de bel air, contact, vente à la ferme, production locale, agriculture raisonnée, panier de légumes, Réalville, Tarn et Garonne")

@section('content')

    @include('components.header.titlepage')

    @include('components.contact.map')

    @include('components.contact.form')

@endsection