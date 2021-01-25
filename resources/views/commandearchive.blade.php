@extends('layouts.myapp')

@section('dynamicPageTitle', 'Archive de votre commandes')
@section('description', "Archive de votre commande passée sur légumes de Bel Air. Retrouvez ici votre commande passée. Vente de légumes à la ferme, issus d'une production locale et d'une agriculture raisonnée. Commandez vos légumes directement chez le producteur.")
@section('keywords', "Légumes de Bel Air, archive, commande, production locale, vente à la ferme, directement chez le producteur, agriculture raisonnée, panier de légumes")

@section('content')

    @include('components.header.titlepage3')

    <div class="container p-b-10 p-t-40">
        <?php
            $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                            IntlDateFormatter::NONE,
                            'Europe/Paris',
                            IntlDateFormatter::GREGORIAN );
            $date =new DateTime($shoppingcart->created_at);
            $creationdate = $formatter->format($date);
            $date =new DateTime($shoppingcart->updated_at);
            $updatedate = $formatter->format($date);
            $pr_id = sprintf("%06d", $shoppingcart->id);
            if($shoppingcart->livraison == "no"){
                $prepacommande = "Vous avez réceptionné votre panier le ".$shoppingcart->day." ".$updatedate.".";
            }else{
                $prepacommande = "Nous vous avons livré le ".$shoppingcart->daylivr." ".$updatedate.".";
            }
        ?>
        <div>
            <div class="p-t-35 col-md-6">
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
                <div class="flex-w flex-m m-r-50 m-tb-10"></div>
                <div>
                    <span class="txt-m-123 cl3 p-tb-20">
                        TOTAL DES ACHATS
                    </span>
                    <div>              
                        <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                            <span class="size-w-58 txt-m-109 cl3">
                                Hors Taxe
                            </span>
                            {{$subtotal}} €
                        </div>

                        <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                            <span class="size-w-58 txt-m-109 cl3">
                                TTC
                            </span>
                            <?php $total = $subtotal * 1.055; 
                            $total = round($total, 2); ?>
                            {{$total}} €
                        </div>
                    </div>
                </div>
            </div>              
        </div>
        <div class="flex-r m-t-20">
            <a href="{{route('listarchives', Auth()->user()->id)}}">
                <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">Retour</button>
            </a>
        </div>
    </div>

@endsection