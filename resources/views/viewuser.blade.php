@extends('layouts.myapp')

@section('dynamicPageTitle', 'Administration - Client')
@section('description', "Page administration client, retrouvez ici les informations de votre client, son nom, numéro de téléphone adresse ainsi que ses commandes et archives de commandes")
@section('keywords', "administration, légumes de Bel Air, client, utilisateur, données du client, panier en cours, panier archivés")

@section('content')

    @include('components.header.titlepage')

    <div class="container">
        <div class="m-tb-20 flex-w">
            <div class="col-md-6 col-sm-12">
                <p class="m-t-10">Nom:</p>
                <h2 class="m-l-25">{{$user->name}}</h2>
                <p class="m-t-10">Prénom:</p>
                <h2 class="m-l-25">{{$user->firstname}}</h2>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="m-t-10">Téléphone:</p>
                <h2 class="m-l-25">{{$user->phone}}</h2>
                <p class="m-t-10">Mail:</p>
                <h2 class="m-l-25">{{$user->email}}</h2>
            </div>
        </div>
        <div class="m-tb-10 flex-w">
            <div class="col-md-6 col-sm-12">
                @if($addressfacture != "")
                    <p class="m-t-10">Adresse de facturation:</p>
                    <h3 class="m-l-25">{{$addressfacture->name}}</h3>
                    <h3 class="m-l-25">{{$addressfacture->numrue}} {{$addressfacture->rue}}</h3>
                    <h3 class="m-l-25">{{$addressfacture->postal}} {{$addressfacture->ville}}</h3>
                @else
                    <p>{{$user->name}} {{$user->firstname}} n'a pas encore enregistré d'adresse de facturation.</p>
                @endif
            </div>
            <div class="col-md-6 col-sm-12">
                @if($addresslivraison != "")
                    <p class="m-t-10">Adresse de livraison:</p>
                    <h3 class="m-l-25">{{$addresslivraison->numrue}} {{$addresslivraison->rue}}</h3>
                    <h3 class="m-l-25">{{$addresslivraison->postal}} {{$addresslivraison->ville}}</h3>
                @else
                    <p>{{$user->name}} {{$user->firstname}} n'a pas encore enregistré d'adresse de livraison.</p>
                @endif
            </div>
        </div>
        <div class="m-tb-10 flex-w">
            <div class="col-md-6 col-sm-12">
                <h2 class="m-t-20">Commandes en cours</h2>
                @if(count($shoppingcarts) == 0)
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} n'a pas de commandes en cours.</p>
                @elseif(count($shoppingcarts) == 1)
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} a une commande en cours.</p>
                    <div class="flex-c">
                        <a href="{{route('shoppingcart.show', $user->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">Voir</button>
                        </a>
                    </div>
                @else
                    <?php $count = count($shoppingcarts); ?>
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} a {{$count}} commandes en cours.</p>
                    <div class="flex-c">
                        <a href="{{route('shoppingcart.show', $user->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">Voir</button>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-6 col-sm-12">
                <h2 class="m-t-20">Commandes archivées</h2>
                @if(count($archiveshoppingcarts) == 0)
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} n'a pas de commandes archivées.</p>
                @elseif(count($archiveshoppingcarts) == 1)
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} a une commande en archive.</p>
                    <div class="flex-c">
                        <a href="{{route('listarchives', $user->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">Voir</button>
                        </a>
                    </div>
                @else
                    <?php $archivecount = count($archiveshoppingcarts); ?>
                    <p class="m-l-25 m-t-10">{{$user->name}} {{$user->firstname}} a {{$archivecount}} commandes en archive.</p>
                    <div class="flex-c">
                        <a href="{{route('listarchives', $user->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">Voir</button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection