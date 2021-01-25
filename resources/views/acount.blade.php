@extends('layouts.myapp')

@section('dynamicPageTitle', 'Mon Compte')
@section('description', "Votre compte sur légumes de Bel Air, retrouvez ici vos informations personnelles, vos commandes actuelles ou archivés. Légumes de Bel Air, vente de panier de légumes directement à la ferme, à Réalville dans le Tarn et Garonne.")
@section('keywords', "Légumes de Bel Air, mon compte, vente de légumes à la ferme, panier à emporter, possibilité de livraison, commandes, adresses, informations personnelles")

@section('content')

    @include('components.header.titlepage')

    <?php 
        class Addressfacture {
            public $id=1;
            public $name = "";
            public $numrue = "";
            public $rue = "";
            public $postal = "";
            public $ville = "";
            public $user_id = "";
        }
        class Addresslivraison {
            public $id=1;
            public $numrue = "";
            public $rue = "";
            public $postal = "";
            public $ville = "";
            public $user_id = "";
        }
        $addresslivraison = new Addresslivraison;
        $addressfacture = new Addressfacture;
		$countcommande = 0;
    ?>
    <!-- content page -->
	<div class="bg0 p-t-95 p-b-70">
		<div class="container">
			<!-- Tab03 -->
			<div class="tab03">
				<div class="row">
					<div class="col-md-3 col-lg-2 p-b-30">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item p-b-16">
								<a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Tableau de Bord</a>
							</li>
							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#orders" role="tab">Commandes</a>
							</li>
							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#addresses" role="tab">Adresses</a>
							</li>
							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#account-details" role="tab">Details du compte</a>
							</li>
							<li class="nav-item p-b-16">
								<a class="nav-link" href="{{route('logout')}}" id="logout">Déconnexion</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" class="hide">
                                    {{csrf_field()}}
                                </form>
							</li>
						</ul>
					</div>
					<div class="col-md-9 col-lg-10 p-b-30">
						<!-- Tab panes -->
						<div class="tab-content p-l-70 p-l-0-lg">
							<!-- - -->
							<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
								<p class="txt-s-101 cl6 p-b-18">
									Bonjour <span class="txt-s-108"><?php echo Auth()->user()->firstname; ?></span>,
								</p>
								<p>
									À partir du tableau de bord de votre compte, vous pouvez afficher vos commandes récentes, gérer vos adresses de livraison et de facturation et modifier votre mot de passe et les détails de votre compte.
								</p>
							</div>
							<!-- - -->
							<div class="tab-pane fade" id="orders" role="tabpanel">
								<div class="single_alert">
									<div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
										<span class="icon-info3 spn_alert_icon"></span>
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p>Suivez vos commandes. Cliquez sur "VOIR" pour consulter votre commande, le prix de celle-ci, et le jour de reception ou de livraison de votre panier.</p>
									</div>
								</div>
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
									<div class="flex-t p-tb-8 m-r-30">
										<img class="m-t-6 m-r-10" src="assets/images/icons/icon-list.png" alt="IMG">
										@if($shoppingcarts == [])
										<span class="size-w-53 txt-s-101 cl6">
											Vous n'avez pas de commandes en cours.
										</span>
										@else
											@php
											foreach($shoppingcarts as $shoppingcart){
												if($shoppingcart->checkreception == "no"){
													$countcommande++;
												}
											}
											@endphp
											@if($countcommande == 0)
											<span class="size-w-53 txt-s-101 cl6">
												Vous n'avez pas de commandes en cours.
											</span>
											@elseif($countcommande == 1)
											<span class="size-w-53 txt-s-101 cl6">
												Vous avez 1 commande en cours.
											</span>
											@else
											<span class="size-w-53 txt-s-101 cl6">
												Vous avez {{$countcommande}} commandes en cours.
											</span>
											@endif
										@endif
									</div>
									@if($shoppingcarts == [] || $countcommande == 0)
									<a href="{{route('shop')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										magasin
									</a>
									@else
									<a href="{{route('shoppingcart.show', Auth()->user()->id)}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										Voir
									</a>
									@endif
								</div>
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm m-t-20">
									<div class="flex-t p-tb-8 m-r-30">
										<img class="m-t-6 m-r-10" src="assets/images/icons/icon-list.png" alt="IMG">
										<?php $countcommande = 0; ?>
										@if($shoppingcarts == [])
										<span class="size-w-53 txt-s-101 cl6">
											Vous n'avez pas de commandes archivées.
										</span>
										@else
											@php
											foreach($shoppingcarts as $shoppingcart){
												if($shoppingcart->checkreception == "yes"){
													$countcommande++;
												}
											}
											@endphp
											@if($countcommande == 0)
											<span class="size-w-53 txt-s-101 cl6">
												Vous n'avez pas de commandes archivées.
											</span>
											@elseif($countcommande == 1)
											<span class="size-w-53 txt-s-101 cl6">
												Vous avez 1 commande archivée.
											</span>
											@else
											<span class="size-w-53 txt-s-101 cl6">
												Vous avez {{$countcommande}} commandes archivées.
											</span>
											@endif
										@endif
									</div>
									@if($shoppingcarts == [] || $countcommande == 0)
									<a href="{{route('shop')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										magasin
									</a>
									@else
									<a href="{{route('listarchives', Auth()->user()->id)}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										Voir
									</a>
									@endif
								</div>
							</div>
							<!-- - -->
							<div class="tab-pane fade" id="addresses" role="tabpanel">
								<div class="single_alert">
									<div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
										<span class="icon-info3 spn_alert_icon"></span>
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p>Pour l'édition des factures veuillez enregistrer votre adresse de facturation, ainsi que votre adresse de livraison si vous souhaitez être livré.</p>
									</div>
								</div>
								<p class="txt-s-101 cl6">
									Les adresses suivantes seront utilisées par défaut sur la page de paiement.
								</p>
								<div class="flex-w flex-sb p-t-37">
									<div class="size-w-63 flex-t w-full-sm p-b-35">
										<div class="size-w-53 p-r-30">
											<h5 class="txt-m-109 cl3 p-b-7">
												Adresse de facturation
											</h5>
                                            @if(count($addressfactures) === 1)
                                                @foreach($addressfactures as $addressfacture)
                                                <p>{{$addressfacture->name}}</p>
                                                <p>n°{{$addressfacture->numrue}} {{$addressfacture->rue}},<br/>
                                                {{$addressfacture->postal}} {{$addressfacture->ville}}</p>
                                                @endforeach
                                            @else
											<p class="txt-s-101 cl6">
												Vous n'avez pas encore configuré ce type d'adresse.
											</p>
                                            @endif
										</div>
                                        @if(count($addressfactures) === 1)
                                            <a class="txt-s-115 cl10 hov12 hov-cl10 p-t-6" id="vieweditfact">
                                                Editer
                                            </a>
                                        @else
                                            <a class="txt-s-115 cl10 hov12 hov-cl10 p-t-6" id="viewcreatefact">
                                                Editer
                                            </a>
                                        @endif
									</div>
									<div class="size-w-63 flex-t w-full-sm p-b-35">
										<div class="size-w-53 p-r-30">
											<h5 class="txt-m-109 cl3 p-b-7">
												Adresse de livraison
											</h5>
                                            @if(count($addresslivraisons) === 1)
                                                @foreach($addresslivraisons as $addresslivraison)
                                                <p>{{Auth()->user()->name}} {{Auth()->user()->firstname}}</p>
                                                <p>n°{{$addresslivraison->numrue}} {{$addresslivraison->rue}},<br/>
                                                {{$addresslivraison->postal}} {{$addresslivraison->ville}}</p>
                                                @endforeach
                                            @else
											<p class="txt-s-101 cl6">
												Vous n'avez pas encore configuré ce type d'adresse.
											</p>
                                            @endif
										</div>
                                        @if(count($addresslivraisons) === 1)
                                            @foreach($addresslivraisons as $addresslivraison)
                                            <a class="txt-s-115 cl10 hov12 hov-cl10 p-t-6" id="vieweditlivr">
                                                Editer
                                            </a>
                                            @endforeach
                                        @else
                                            <a class="txt-s-115 cl10 hov12 hov-cl10 p-t-6" id="viewcreatelivr">
                                                Editer
                                            </a>
                                        @endif
									</div>
								</div>
                                <div id="formcreatefact">
                                    @include('components.addressfacture.create')
                                </div>
                                @if(isset($addressfactures))
                                <div id="formeditfact">
                                    @include('components.addressfacture.edit')
                                </div>
                                @endif
                                <div id="formcreatelivr">
                                    @include('components.addresslivraison.create')
                                </div>
                                <div id="formeditlivr">
                                    @include('components.addresslivraison.edit')
                                </div>
							</div>
							<!-- - -->
							<div class="tab-pane fade" id="account-details" role="tabpanel">
								<div class="single_alert">
									<div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
										<span class="icon-info3 spn_alert_icon"></span>
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p>Retrouvez ici toutes vos informations personnelles et enregistrez les ici.</p>
									</div>
								</div>
                                <?php $user_id = Auth()->user()->id; ?>
								<form method="POST" action="{{ route('user.update', $user_id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
									<div class="row">
										<div class="col-sm-4 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Prénom <span class="cl12">*</span>
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="firstname" value={{Auth()->user()->firstname}} required>
											</div>
										</div>
										<div class="col-sm-4 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Nom <span class="cl12">*</span>
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="name" value={{Auth()->user()->name}} required>
											</div>
										</div>
                                        <div class="col-sm-4 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Téléphone <span class="cl12">*</span>
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="number" name="phone" value="0{{Auth()->user()->phone}}">
											</div>
										</div>
										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Email <span class="cl12">*</span>
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="email" value={{Auth()->user()->email}} required>
											</div>
										</div>
										{{-- <h5 class="txt-m-109 cl3 p-rl-15 p-t-10 p-b-17">
											Changer le Mot de Passe :
										</h5>
										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Mot de passe actuel (laissez vide pour laisser inchangé)
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="current-pw">
											</div>
										</div>
										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Nouveau mot de passe (laisser en blanc pour laisser inchangé)
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="new-pw">
											</div>
										</div>
										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Confirmer le nouveau mot de passe
												</div>
												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="cf-new-pw">
											</div>
										</div> --}}
										<div class="flex-w p-rl-15 p-t-17">
											<button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10" type="submit">
												Enregistrer
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection