@extends('layouts.myapp')

@section('dynamicPageTitle', 'Validation de votre commande')
@section('description', "Valider votre panier sur légumes de Bel Air, vente de légumes directement chez le producteur, à Réalville dans le Tarn et Garonne. Vente de légumes à la ferme")
@section('keywords', "validation commande, légumes de Bel Air, mon compte, Réalville, Tarn et Garonne, vente directe chez le producteur, producteur local, agriculture raisonnée, panier de légumes, légumes de saison, en pleine terre")

@section('content')

    @include('components.header.titlepage3')

    @php
        class AddressFacture {
            public $id;
            public $name;
            public $numrue;
            public $rue;
            public $postal;
            public $ville;
        }
        class AddressLivraison {
            public $id;
            public $numrue;
            public $rue;
            public $postal;
            public $ville;
        }
        $cart = Cart::content();
        $total = Cart::total();
        if(empty($addressfacture)){
            $addressfacture = new AddressFacture;
        }
        if(empty($addresslivraison)){
            $addresslivraison = new AddressLivraison;
        }
    @endphp
    <!-- content page -->
	<div class="bg0 p-t-95 p-b-50">
		<div class="container">
            <form method="POST" action="{{route('shoppingcart.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <!-- Login -->
                <div class="row">
                    <div class="col-md-7 col-lg-8 p-b-50">
                        <div>
                            <div class="single_alert">
                                <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                                    <span class="icon-info3 spn_alert_icon"></span>
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                    <p>Veuillez remplir les données de l'adresse de facturation si elles ne sont pas pré-remplies. Ces informations seront utilisées pour éditer la facture de votre commande ainsi que les prochaines.</p>
                                </div>
                            </div>
                            <h4 class="txt-m-124 cl3 p-b-28">
                                Adresse de facturation
                            </h4>
                            <div class="row p-b-50">
                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Prénom <span class="cl12">*</span>
                                        </div>
                                        <div class="txt-m-104 cl3 size-a-21 bocl15 p-rl-20">{{Auth()->user()->firstname}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Nom <span class="cl12">*</span>
                                        </div>
                                        <div class="txt-m-104 cl3 size-a-21 bocl15 p-rl-20">{{Auth()->user()->name}}</div>
                                    </div>
                                </div>
                                <div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Nom de l'entreprise
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="name" value="{{$addressfacture->name}}">
                                    </div>
                                </div>
                                <div class="col-12 p-b-23 dis-flex">
                                    <div class="col-4 p-rl-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            N°
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="numrue" value="{{$addressfacture->numrue}}">
                                    </div>
                                    <div class="col-8 p-r-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Adresse <span class="cl12">*</span>
                                        </div>
                                        <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="rue" value="{{$addressfacture->rue}}" required>
                                    </div>
                                </div>
                                <div class="col-12 p-b-23 dis-flex">
                                    <div class="col-4 p-rl-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Code Postal <span class="cl12">*</span>
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="postal" value="{{$addressfacture->postal}}" required>
                                    </div>
                                    <div class="col-8 p-r-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Ville <span class="cl12">*</span>
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="ville" value="{{$addressfacture->ville}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Téléphone <span class="cl12">*</span>
                                        </div>
                                        <div class="txt-m-104 cl3 size-a-21 bocl15 p-rl-20">0{{Auth()->user()->phone}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Email <span class="cl12">*</span>
                                        </div>
                                        <div class="txt-m-104 cl3 size-a-21 bocl15 p-rl-20">{{Auth()->user()->email}}</div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$addressfacture->id}}" name="idfacture">
                            </div>
                        </div>
                        <div id="addresslivr" class="dis-none">
                            <h4 class="txt-m-124 cl3 p-b-28">
                                Adresse de livraison
                            </h4>
                            <div class="row p-b-50">
                                <div class="col-12 p-b-23 dis-flex">
                                    <div class="col-4 p-rl-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            N°
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="numruelivr" value="{{$addresslivraison->numrue}}">
                                    </div>
                                    <div class="col-8 p-r-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Adresse <span class="cl12">*</span>
                                        </div>
                                        <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="ruelivr" value="{{$addresslivraison->rue}}">
                                    </div>
                                </div>
                                <div class="col-12 p-b-23 dis-flex">
                                    <div class="col-4 p-rl-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Code Postal <span class="cl12">*</span>
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="postallivr" value="{{$addresslivraison->postal}}">
                                    </div>
                                    <div class="col-8 p-r-0">
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Ville <span class="cl12">*</span>
                                        </div>
                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="villelivr" value="{{$addresslivraison->ville}}">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{$addresslivraison->id}}" name="idlivr">
                            <h4 class="txt-m-124 cl3 p-b-19">
                                Informations supplémentaires
                            </h4>
                            <div>
                                <textarea class="plh2 txt-s-120 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1" name="note" placeholder="Si vous souhaitez laisser quelques indications, faites le ici."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 p-b-50">
                        <div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
                            <h4 class="txt-m-124 cl3 p-b-11">
                                Votre commande
                            </h4>
                            <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                <span>
                                    Produits
                                </span>
                                <span>
                                    Total
                                </span>
                            </div>
                            <!--  -->
                            @foreach($cart as $article)
                            <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                <span>
                                    {{$article->name}} 
                                    <img class="m-rl-3" src="../../assets/images/icons/icon-multiply.png" alt="icon">
                                    {{$article->qty}}
                                </span>
                                <span>
                                    {{$article->subtotal()}} €
                                </span>
                            </div>
                            @endforeach
                            <!--  -->
                            {{-- <div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23">
                                <span class="size-w-61 cl6">
                                    Hors Taxes
                                </span>
                                <span class="size-w-62 cl9">
                                    {{Cart::subtotal()}} €
                                </span>
                            </div> --}}
                            <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-tb-23">
                                <span class="size-w-61 cl6">
                                    Total
                                </span>
                                <span class="size-w-62 cl10" style="text-align:right;">
                                    {{Cart::total()}} €
                                </span>
                            </div>
                            <div class="flex-w flex-m txt-m-103 p-tb-23" style="text-align:center;">
                                Les paiements se font à la reception, en espèces ou par carte bleu.
                            </div>
                            <div class="bo-all-1 bocl15 p-b-25 m-b-30">
                                <div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
                                    <input class="m-r-15" id="radio1" type="radio" checked>
                                    <label class="txt-m-103 cl6" for="radio1">
                                        Retrait à la ferme
                                    </label>
                                </div>
                                <div class="content-payment bo-b-1 bocl15 p-rl-20 p-tb-15">
                                    <p class="txt-s-120 cl9">
                                        Choisissez un jour et une heure pour venir récupérer votre panier à la ferme.
                                    </p>
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-5 m-t-10">
                                            Jour <span class="cl12">*</span>
                                        </div>
                                        <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                            <select class="js-select2" name="day">
                                                <option value="Mercredi">Mercredi</option>
                                                <option value="Samedi">Samedi</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="txt-s-101 cl6 p-b-5 m-t-10">
                                            Heure <span class="cl12">*</span>
                                        </div>
                                        <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                            <select class="js-select2" name="hour">
                                                <option value="18h00">18h00</option>
                                                <option value="18h30">18h30</option>
                                                <option value="19h00">19h00</option>
                                                <option value="19h30">19h30</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                @if($total >= 15)
                                <div class="flex-w flex-m p-rl-20 p-t-17 p-b-10">
                                    <input class="m-r-15" id="radio2" type="radio">
                                    <label class="txt-m-103 cl6" for="radio2">
                                        Livraison
                                    </label>
                                </div>
                                <div class="content-paypal bo-tb-1 bocl15 p-rl-20 p-tb-15 m-tb-10 dis-none">
                                    <p class="txt-s-120 cl9">
                                        Dans un rayon d'une vingtaine de kilomètres autour de Réalville et pour un achat supérieur à 15 €, Olivier peut vous livrer vos légumes chez vous.
                                    </p>
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-5 m-t-10">
                                            Jour <span class="cl12">*</span>
                                        </div>
                                        <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                            <select class="js-select2" name="daylivr">
                                                <option value="Mardi">Mardi</option>
                                                <option value="Jeudi">Jeudi</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-l-49">
                                    <a href="#" class="txt-s-120 cl6 hov-cl10 trans-04 p-t-10">
                                        Vous souhaitez être livrés?
                                    </a>
                                </div>
                                @endif	
                                <input type="hidden" name="livraison" id="livraison" value="no">
                            </div>
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
                                Commander
                            </button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
	</div>
@endsection