@extends('layouts.myapp')

@section('dynamicPageTitle', 'Administration - liste des commandes en cours')
@section('description', "Retrouvez ici toute les commandes en cours sur le site Légumes de Bel Air, vente de légumes directement à la ferme. Possibilité de trié les commandes par jour de réception de celles ci.")
@section('keywords', "administration, liste de commandes, légumes de Bel Air, panier à réaliser")

@section('content')

    @include('components.header.titlepage')

    <section class="bg0 p-b-45">
        <div class="container">
            <div class="single_alert">
                <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                    <span class="icon-info3 spn_alert_icon"></span>
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    <p>Suivez vos commandes. Cliquez sur "VOIR" pour consulter votre commande, le prix de celle-ci, et le jour de reception ou de livraison de votre panier.</p>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-1 col-lg-1 m-rl-auto p-b-50">
					<div class="leftbar p-t-15">
                        <div class="p-t-40">
							<h4 class="txt-m-101 cl3 p-b-37">
								Jour
							</h4>
							<ul>
								<li class="p-b-5">
									<a href="{{route('listdaylivrcommandes', "Mardi")}}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Mardi
										</span>
									</a>
								</li>
								<li class="p-b-5">
									<a href="{{route('listdaycommandes', "Mercredi")}}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Mercredi
										</span>
									</a>
								</li>
								<li class="p-b-5">
									<a href="{{route('listdaylivrcommandes', "Jeudi")}}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Jeudi
										</span>
									</a>
								</li>
								<li class="p-b-5">
									<a href="{{route('listdaycommandes', "Samedi")}}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Samedi
										</span>
									</a>
								</li>
								<li class="p-b-5">
									<a href="{{route('listcommandes')}}" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Tous
										</span>
									</a>
								</li>
							</ul>
						</div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-11 col-lg-11 m-rl-auto p-b-50 p-t-20">
                    <div class="wrap-table-shopping-cart rs1-table">
                        <table class="table-shopping-cart">
                            <tr class="table_head bg12">
                                <th class="column-1 p-l-30">Nom</th>
                                <th class="column-2">N°</th>
                                <th class="column-3">Pour</th>
                                <th class="column-4"></th>
                            </tr>
                            @foreach($listcommandes as $commande)
                            <?php
                                $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                                                IntlDateFormatter::NONE,
                                                'Europe/Paris',
                                                IntlDateFormatter::GREGORIAN );
                                $date =new DateTime($commande->created_at);
                                $creationdate = $formatter->format($date);
                                $pr_id = sprintf("%06d", $commande->id);
                            ?>
                            <tr class="table_row">
                                <td class="column-4 p-l-30">
                                    @if($commande->name != "")
                                    {{$commande->name}}
                                    @else
                                    {{$commande->user->name}} {{$commande->user->firstname}}
                                    @endif
                                </td>
                                <td class="column-4 p-l-20">
                                    {{$pr_id}}
                                </td>
                                <td class="column-4 p-l-20">
                                    @if($commande->livraison == "no")
                                        {{$commande->day}}
                                    @else
                                        {{$commande->daylivr}}
                                    @endif
                                </td>
                                <td class="column-5 flex-c">
                                    <a href="{{route('commande', $commande->id)}}">
                                        <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                            Voir
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="m-tb-20">
                    {{ $listcommandes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection