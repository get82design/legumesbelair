@extends('layouts.myapp')

@section('dynamicPageTitle', 'Produit')
@section('description', "")
@section('keywords', "")

@section('content')

    @include('components.header.titlepage2')

    <!-- Product detail -->
	<section class="sec-product-detail bg0 p-t-105 p-b-70">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="single_alert">
                        <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                            <span class="icon-info3 spn_alert_icon"></span>
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                            <p>C'est à partir de cet écran que vous allez pouvoir modifier les informations du produits, comme son prix, son nom, la description de ce produit, sa disponibilité ainsi que ses photos qui le présentent.</p>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-md-7 col-lg-6">
					<div class="m-r--30 m-r-0-lg">
						<!-- Slide 100 -->
						<div id="slide100-01">
							<div class="wrap-main-pic-100 bo-all-1 bocl12 pos-relative">
								<div class="main-frame">
									<div class="wrap-main-pic">
										<div class="main-pic">
											<img src="../../assets/images/produits/{{$imgproduitfirst->image}}" alt="{{$imgproduitfirst->alt}}">
										</div>
									</div>
								</div>
                                @if(count($imgproduits) > 1)
								<div class="wrap-arrow-slide-100 s-full ab-t-l trans-04">
									<span class="my-arrow back prev-slide-100"><i class="fa fa-angle-left m-r-1" aria-hidden="true"></i></span>
									<span class="my-arrow next next-slide-100"><i class="fa fa-angle-right m-l-1" aria-hidden="true"></i></span>
								</div>
                                @endif
							</div>

                            @if(count($imgproduits) > 1)
							<div class="wrap-thumb-100 flex-w flex-sb p-t-30">
                                @foreach($imgproduits as $imgproduit)
								<div class="thumb-100">
									<div class="sub-frame sub-1">
										<div class="wrap-main-pic">
											<div class="main-pic">
												<img src="../../assets/images/produits/{{$imgproduit->image}}" alt="{{$imgproduit->alt}}">
											</div>
										</div>

										<div class="btn-sub-frame btn-1 bo-all-1 bocl12 hov8 trans-04"></div>
									</div>
								</div>
                                @endforeach
							</div>
                            @endif	
						</div>
					</div>
				</div>

				<div class="col-md-5 col-lg-6">
                    <form method="POST" action="{{ route('produit.update', $produit->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="p-l-70 p-t-35 p-l-0-lg">
                            <div>
                                <div class="txt-s-101 cl6 p-b-10">
                                    Nom <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="name" value="{{$produit->name}}" required>
                            </div>

                            <div class="p-t-20">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Prix <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="price" value="{{$produit->price}}" required>
                            </div>
                            <div class="p-t-20">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Conditionnement <span class="cl12">*</span>
                                </div>
                                <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-r-15">
                                    <select class="js-select2 focus1" name="conditionnement">
                                        <option value="{{$produit->conditionnement}}">{{$produit->conditionnement}}</option>
                                        <option value="Kg">Kg</option>
                                        <option value="250g">250g</option>
                                        <option value="botte">botte</option>
                                        <option value="Pièce">Pièce</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            
                            <div class="p-t-20">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Descrition <span class="cl12">*</span>
                                </div>
                                <textarea class="txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10" name="desc" placeholder="Descrition">{{$produit->desc}}</textarea>
                            </div>

                            <div class="p-t-20">
                                <div class="form-check p-rl-20">
                                    @if($produit->dispo === "yes")
                                    <div class="flex-sa">
                                        <a id="buttondispo" class="flex-sa">
                                            <div class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                                Disponible
                                            </div>
                                            <span class="m-t-10 m-l-20">Les {{$produit->name}}s sont disponibles</span>
                                        </a>
                                        <a id="buttonindispo" class="inactivdispo flex-sa">
                                            <div class="flex-c-m txt-s-103 cl0 bg16 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                                Indisponible
                                            </div>
                                            <span class="m-t-10 m-l-20">Les {{$produit->name}}s sont indisponibles</span>
                                        </a>
                                    </div>
                                    @else
                                    <div class="flex-sa">
                                        <a id="buttondispo" class="flex-sa inactivdispo">
                                            <div class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                                Disponible
                                            </div>
                                            <span class="m-t-10 m-l-20">Les {{$produit->name}}s sont disponibles</span>
                                        </a>
                                        <a id="buttonindispo" class="flex-sa">
                                            <div class="flex-c-m txt-s-103 cl0 bg16 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
                                                Indisponible
                                            </div>
                                            <span class="m-t-10 m-l-20">Les {{$produit->name}}s sont indisponibles</span>
                                        </a>
                                    </div>
                                    @endif
                                    <input type="hidden" value="{{$produit->dispo}}" id="dispo" name="dispo">
                                </div>
                            </div>
                        </div>
                        <div class="flex-c-m p-rl-15 p-t-17">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                                Enregistrer
                            </button>
                        </div>
                    </form>
				</div>
			</div>
			<div class="row p-t-30">
                <div class="col-md-5 col-lg-6">
                    <div class="shop-list">
                        <div class="p-t-30 flex-sb">
							<h4 class="txt-m-125 cl3 p-b-30">
								Changer la photo
							</h4>
                            <a href="{{route('crop')}}" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                                Mettre au format
                            </a>
                        </div>
                        @foreach($imgproduits as $imgproduit)
                        <div class="row p-b-30">
                            <div class="col-sm-5 col-md-4 col-lg-3">
                                <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                    <img src="../../assets/images/produits/{{$imgproduit->image}}" alt="PRODUCT">
                                </a>
                            </div>

                            <div class="col-sm-7 col-md-8 col-lg-9">    
                                <div class="p-t-5 p-b-20">
                                    <form method="POST" action="{{ route('imgproduit.update', $imgproduit->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <div class="flex-w flex-sb-m">
                                            <input type="file" name="image" id="image">
                                        </div>

                                        <div>
                                            <div class="txt-s-101 cl6 p-b-10 p-t-10">
                                                texte alternatif
                                            </div>

                                            <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="alt" value="{{$imgproduit->alt}}">
                                        </div>

                                        <div class="flex-w p-t-29 flex-c-m">
                                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                                                Changer l'image
                                            </button>
                                        </div>
                                    </form>	
                                </div>    
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="single_alert m-l-20 m-t-30">
                        <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                            <span class="icon-info3 spn_alert_icon"></span>
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                            <p>Si vous souhaitez changer une photo, c'est ici que ça se passe.</p>
                            <p class="p-t-10">Je vous conseille de faire ce genre d'opération depuis un ordinateur pour être plus à l'aise avec les outils proposés.</p>
                            <p class="p-t-20">Pour garder les proportions des photos sur tout le site, il est préférable d'utiliser l'outil de mise au format proposé.</p>
                            <ul class="p-t-10">
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
		</div>
	</section>

@endsection

@section('script')
<script>
(function ($) {
"use strict";
    $(document).ready(function() {
        var imgproduits = <?php echo json_encode($imgproduits); ?>;
        $('#slide100-01').slide100({
            autoPlay: "false",
            timeAuto: 3000,
            deLay: 400,

            linkIMG: [
            '../../assets/images/produits/' + imgproduits[0].image,
            '../../assets/images/produits/' + imgproduits[1].image,
            '../../assets/images/produits/' + imgproduits[2].image,
            ],

            linkThumb: [
            '../../assets/images/produits/' + imgproduits[0].image,
            '../../assets/images/produits/' + imgproduits[1].image,
            '../../assets/images/produits/' + imgproduits[2].image,
            ]
        });
    });
})(jQuery);
</script>
@endsection