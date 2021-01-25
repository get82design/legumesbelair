@extends('layouts.myapp')

@section('dynamicPageTitle', 'Mes commandes en cours')
@section('description', "Liste des commandes en cours passées sur le site légumes de Bel Air. Retrouvez toutes les commandes en cours. Vente de légumes directement chez le producteur, à Réalville dans le Tarn et Garonne. Des légumes issus d'une production locale, d'une agriculture raisonnée, en pleine terre et en plein air.")
@section('keywords', "légumes de Bel Air, mes commandes, panier de légumes, vente à la ferme, production locale, agriculture raisonnée, Réalville, Tarn et Garonne")

@section('content')

    @include('components.header.titlepage3')

    <div class="bg0 p-t-100 p-b-80">
        @foreach($commandes as $shoppingcart)
            <?php
                $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                                IntlDateFormatter::NONE,
                                'Europe/Paris',
                                IntlDateFormatter::GREGORIAN );
                $date =new DateTime($shoppingcart->created_at);
                $creationdate = $formatter->format($date);
                $pr_id = sprintf("%06d", $shoppingcart->id);
                if($shoppingcart->checkcommande == "no"){
                    $prepacommande = "En attente";
                }else{
                    $prepacommande = "Prête";
                }
            ?>
            <div class="container p-tb-30">
                <div class="p-t-35">
                    <h3 class="txt-m-125 cl3 hov-cl10 trans-04">
                            Commande n°{{$pr_id}}
                    </h3>
                    <div class="flex-w flex-sb-m">
                        <div class="flex-w flex-m txt-m-121 cl9 m-r-30 p-tb-10">
                            <span class="m-r-25">
                                Passée le <span class="txt-m-109 cl10">{{$creationdate}}</span>
                            </span>
                            <span class="txt-m-109 cl6">
                                {{$prepacommande}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="wrap-table-shopping-cart rs1-table">
                    <table class="table-shopping-cart">
                        <tr class="table_head bg12">
                            <th class="column-1 p-l-30">Produit</th>
                            <th class="column-2">Prix</th>
                            <th class="column-3">Quantité</th>
                            <th class="column-4">Total</th>
                        </tr>
                        <?php $commande = json_decode($shoppingcart->content);
                        $subtotal = 0; ?>
                        @foreach($commande as $article)
                        <tr class="table_row">
                            <td class="column-1">
                                <div class="flex-w flex-m">
                                    <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                        <img src="../../assets/images/produits/{{$article->options->image}}" alt="IMG">
                                    </div>
                                    <span>
                                        {{$article->name}}
                                    </span>
                                </div>
                            </td>
                            <td class="column-2">
                                {{$article->price}} €
                            </td>
                            <td class="column-4">
                                <div class="flex-t m-l-30">
                                    {{$article->qty}}
                                </div>
                            </td>
                            <td class="column-4">
                                <?php $totalligne = $article->price * $article->qty;
                                $subtotal = $subtotal + $totalligne; ?>
                                <div class="m-l-20">
                                    {{$totalligne}} €
                                </div>   
                            </td>
                        </tr>
                        @endforeach  
                    </table>
                </div>
                <div class="flex-w flex-sb-m p-t-30">
                    <div class="m-r-50 m-tb-10">
                        <div class="m-b-20 flex-c">
                            @if($shoppingcart->checkcommande == "no")
                            <form method="POST" action="{{route('destroycommande', $shoppingcart->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <button class="flex-c-m txt-s-105 cl0 bg16 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                    annuler la commande
                                </button>
                            </form>
                            @endif
                        </div>
                        @if(Auth()->user()->role == "admin")
                            @if($shoppingcart->checkcommande == "no")
                                <p>Vous n'avez pas encore préparé cette commande.</p>
                                @if($shoppingcart->livraison == "yes")
                                    <p>Vous devez livrer ce {{$shoppingcart->daylivr}} après 18h.</p>
                                @else
                                    <p>Le panier sera récupéré {{$shoppingcart->day}} prochain à {{$shoppingcart->hour}}.</p>
                                @endif
                            @else
                                <p>La commande est prête.</p>
                                @if($shoppingcart->livraison == "yes")
                                    <p>Vous devez livrer ce {{$shoppingcart->daylivr}} après 18h.</p>
                                @else
                                    <p>Le panier sera récupéré {{$shoppingcart->day}} prochain à {{$shoppingcart->hour}}.</p>
                                @endif
                            @endif
                        @else
                            @if($shoppingcart->checkcommande == "no")
                                <p>Votre commande n'est pas encore prête.</p>
                                @if($shoppingcart->livraison == "yes")
                                    <p>Vous serez livrés ce {{$shoppingcart->daylivr}} après 18h.</p>
                                @else
                                    <p>Vous devez récupérer votre panier {{$shoppingcart->day}} prochain à {{$shoppingcart->hour}}.</p>
                                @endif
                            @else
                                <p>Votre commande est prête.</p>
                                @if($shoppingcart->livraison == "yes")
                                    <p>Vous serez livrés ce {{$shoppingcart->daylivr}} après 18h.</p>
                                @else
                                    <p>Vous devez récupérer votre panier {{$shoppingcart->day}} prochain à {{$shoppingcart->hour}}.</p>
                                @endif
                            @endif
                        @endif
                    </div>
                    <div>
                        <span class="txt-m-123 cl3 p-tb-20">
                            TOTAL DES ACHATS
                        </span>
                        <div>              
                            {{-- <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                                <span class="size-w-58 txt-m-109 cl3">
                                    Hors Taxe
                                </span>
                                {{$subtotal}} €
                            </div> --}}
                            <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                                <span class="size-w-58 txt-m-109 cl3">
                                    TTC
                                </span>
                                <?php $total = $subtotal; 
                                $total = round($total, 2); ?>
                                {{$total}} €
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
	</div>

@endsection