@extends('layouts.myapp')

@section('dynamicPageTitle', 'Accueil')
@section('description', "Bienvenue sur le site les légumes de Bel Air. Issus d'une agriculture raisonnée, découvrez tous nos légumes de saisons en vente directement à la ferme. Situé à Réalville dans le Tarn et Garonne, découvrez nos produits, préparez votre panier et venez les chercher chez le producteur.")
@section('keywords', "légumes de bel air, vente en circuit court, vente chez le producteur, Réalville, Tarn et Garonne, agriculture raisonnée, légumes de saison, en plein air, vente de légumes, tomates, aubergines, melons, oignons, butternut, citrouille, fève, courgette, ail, piment, pastèque, potimarron, échalote")

@section('content')
	
	@include('components.header.slider2')

	@include('components.about.welcome3')

	@include('components.banniere.counter')

	@include('components.produits.grid8')

	@include('components.about.welcome')

	@include('components.promo.oneproduit')

	<div class="container">
		<div class="flex-w flex-sb how-bor5 m-tb-40">
			<div class="wrap-pic-w size-a-44 bg-img3 w-full-ssm" style="background-image: url(assets/images/etal2.jpg);">
			</div>

			<div class="size-w-68 flex-col-m p-all-30 w-full-ssm">
				<h6 class="txt-s-121 cl3 p-b-14">
					Retrouvez nous aussi
				</h6>

				<p class="txt-s-101 cl6">
					Retrouvez notre étalage de légumes tous les Vendredis et Samedis sur le parking la boucherie Pinto à Réalville. <br/>5 Lotissement Gandillou, 82440 Réalville
				</p>

				<div class="flex-w flex-m p-t-20">
					<a href="https://www.facebook.com/legumesdebelair/" class="wrap-pic-max-s pos-relative lh-00 hov6 size-h-6 m-r-11 m-tb-5">
						<img class="hov6-child1" src="assets/images/icons/icon-facebook.png" alt="facebook">
						<img class="ab-t-l hov6-child2" src="assets/images/icons/icon-facebook2.png" alt="facebook">
					</a>
				</div>
			</div>
		</div>
	</div>

	{{-- @include('components.promo.promo1') --}}

	@include('components.newsletter.model1')

@endsection