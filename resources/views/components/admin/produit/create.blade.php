@extends('layouts.myapp')

@section('dynamicPageTitle', 'Produit')
@section('description', "")
@section('keywords', "")

@section('content')

    @include('components.header.titlepage2')

    @php
        $dispo = "no";
    @endphp

    <section class="sec-product-detail bg0 p-t-105 p-b-70">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="single_alert">
                        <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                            <span class="icon-info3 spn_alert_icon"></span>
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                            <p>C'est à partir de cet écran que vous allez pouvoir créer un nouveau produit, indiquer son prix (mettre un point à la place de la virgule), son nom, son image, la description de ce produit ainsi que son conditionnement.</p>
                            <p>Il est conseillé d'utiliser l'outil pour dimensionner les photos, pour qu'elles soient adaptées au site internet.</p>
                            <ul class="p-t-10 p-l-40">
                                <li>1- Tout d'abord, cliquez sur "mettre au format".</li>
                                <li>2- Vous serez alors redirigé vers une page ou vous pourrez télécharger la photo que vous souhaitez envoyer sur le site, la mettre au format adapté pour celui-ci et la sauvegarder sur votre ordinateur.</li>
                                <li>3- Vous serez alors redirigé vers cette page.</li>
                                <li>4- Appuyez sur le bouton "choisir l'image" en face de la photo que vous souhaitez changer.</li>
                                <li>5- Puis appuyez sur "changer l'image" pour envoyer votre nouvelle image vers le serveur.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{route('produit.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="dis-flex">
                    <div class="col-md-6">
                        <div class="txt-s-101 cl6 p-b-10">
                            Nom <span class="cl12">*</span>
                        </div>
                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="name" required>
                    </div>
                    <div class="col-md-3">
                        <div class="txt-s-101 cl6 p-b-10">
                            Prix <span class="cl12">*</span>
                        </div>
                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="price" placeholder="6.40" required>
                    </div>
                    <div class="col-md-3">
                        <div class="txt-s-101 cl6 p-b-10">
                            Conditionnement <span class="cl12">*</span>
                        </div>
                        <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-r-15">
                            <select class="js-select2 focus1" name="conditionnement">
                                <option>Kg</option>
                                <option>250g</option>
                                <option>botte</option>
                                <option>Pièce</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 m-t-20">
                    <div class="txt-s-101 cl6 p-b-10">
                        Descrition <span class="cl12">*</span>
                    </div>
                    <textarea class="txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10" name="desc" placeholder="Descrition"></textarea>
                </div>
                <div class="dis-flex m-t-20">
                    <div class="col-md-6">
                        <div class="dis-flex">
                            <div class="txt-s-101 cl6 p-b-10 m-r-20">
                                Créer une image aux dimensions du site <span class="cl12">(préférable)</span>
                            </div>
                            <a href="{{route('crop')}}" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                                Mettre au format
                            </a>
                        </div>
                        <div class="txt-s-101 cl6 p-b-10 m-t-20">
                            Image <span class="cl12">*</span>
                        </div> 
                        <input type="file" name="image" id="image">
                        <div class="txt-s-101 cl6 p-b-10 m-t-20">
                            Description de l'image <span class="cl12">*</span>
                        </div> 
                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="image_alt" required>
                    </div>
                    <div class="col-md-6">
                        <div class="txt-s-101 cl6 p-b-10">
                            Ce produit est-il disponible actuellement ? <span class="cl12">*</span>
                        </div>
                        <a id="buttondispo" class="inactivdispo flex-sa">
                            <div class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                Disponible
                            </div>
                        </a>
                        <a id="buttonindispo" class="flex-sa">
                            <div class="flex-c-m txt-s-103 cl0 bg16 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                Indisponible
                            </div>
                        </a>
                        <input type="hidden" value="{{$dispo}}" id="dispo" name="dispo">
                    </div>
                </div>
                <div class="col-md-12 flex-r">
                    <button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 m-t-30">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection