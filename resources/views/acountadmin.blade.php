@extends('layouts.myapp')

@section('dynamicPageTitle', 'Mon Compte Administrateur')
@section('description', "Page administration du site légumes de Bel Air, vente de légumes directement à la ferme, à Réalville, dans le Tarn et Garonne, panier à emporter")
@section('keywords', "Légumes de Bel Air, administration, commandes, archives, données, utilisateurs,adresses")

@section('content')

    @include('components.header.titlepage')

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
								<a class="nav-link" data-toggle="tab" href="#clients" role="tab">Clients</a>
							</li>
							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#produits" role="tab">Produits</a>
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
										<p>Ici vous trouverez vos commandes réalisée ou à réaliser. Cliquez sur "VOIR" pour connaitre le contenu de la commande et valider celle-ci une fois réalisée.</p>
									</div>
								</div>
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
									@if($countcommande == 0)
									<div class="flex-t p-tb-8 m-r-30">
									
										<img class="m-t-6 m-r-10" src="assets/images/icons/icon-list.png" alt="IMG">
										<span class="size-w-53 txt-s-101 cl6">
											Vous n'avez pas de commandes en cours.
										</span>
									</div>
									@elseif($countcommande == 1)
									<div class="flex-t p-tb-8 m-r-30">
									
										<img class="m-t-6 m-r-10" src="assets/images/icons/icon-list.png" alt="IMG">
										<span class="size-w-53 txt-s-101 cl6">
											Vous avez 1 commande en cours.
										</span>
									</div>
									<a href="{{route('listcommandes')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										voir
									</a>
									@else
									<div class="flex-t p-tb-8 m-r-30">
										<img class="m-t-6 m-r-10" src="assets/images/icons/icon-list.png" alt="IMG">
										<span class="size-w-53 txt-s-101 cl6">
											Vous avez {{$countcommande}} commandes en cours.
										</span>
									</div>
									<a href="{{route('listcommandes')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										voir
									</a>
									@endif
								</div>
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm m-t-20">
									<span class="size-w-53 txt-s-101 cl6">
										Si vous souhaitez voir les commandes que vous avez archivé.
									</span>
									<a href="{{route('listarchives', Auth()->user()->id)}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										voir
									</a>
								</div>
							</div>
							<!-- - -->
							<div class="tab-pane fade" id="clients" role="tabpanel">
								<div class="single_alert">
									<div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
										<span class="icon-info3 spn_alert_icon"></span>
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p>Vous avez ici la liste de tout vos clients inscrits sur le site. Vous pouvez consulter les informations concernant l'un d'entre eux en cliquant sur le bouton "VOIR".</p>
									</div>
								</div>
                                @include('components.admin.listusers')
                            </div>
							<!-- - -->
							<div class="tab-pane fade" id="produits" role="tabpanel">
								<div class="single_alert">
									<div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
										<span class="icon-info3 spn_alert_icon"></span>
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p>Voici la liste des produits que vous proposez dans votre ferme. Vous pouvez ici accéder à la fiche produit qui vous permettra de modifier l'un d'entre eux. Vous pouvez aussi ajouter un nouveau produit à votre magasin en cliquant sur "AJOUTER UN PRODUIT".</p>
									</div>
								</div>
								<div class="m-tb-20">
									<a href="{{route('addproduit')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										Ajouter un produit
									</a>
								</div>
                                @include('components.admin.listproduits')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection