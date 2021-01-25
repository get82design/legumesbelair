@extends('layouts.myapp')

@section('dynamicPageTitle', 'Administration - Commande en cours')
@section('description', "Page administration commande, Vous avez une nouvelle commande, voici son contenu. Réalisé votre commande, validé la, et ensuite mettez la dans les archives depuis cette page")
@section('keywords', "administration, légumes de Bel Air, commande, réalisé, contenu du panier, heure de réception, heure de livraison, jour de réception, heure de réception, panier de légumes, vente à la ferme")

@section('content')

    @include('components.header.titlepage')

    <div class="bg0 p-t-100 p-b-80">
        {{-- @foreach($commandes as $shoppingcart) --}}
            <?php
                $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                                IntlDateFormatter::NONE,
                                'Europe/Paris',
                                IntlDateFormatter::GREGORIAN );
                $date =new DateTime($shoppingcart->created_at);
                $creationdate = $formatter->format($date);
                $pr_id = sprintf("%06d", $shoppingcart->id);
                if($shoppingcart->livraison == "no"){
                    $prepacommande = "À la ferme";
                    $livraison = $shoppingcart->day." à ".$shoppingcart->hour.".";
                }else{
                    $prepacommande = "Livraison";
                    $livraison = $shoppingcart->daylivr;
                }
            ?>
            <div class="container">
                <div class="single_alert">
                    <div class="alert alert-success spn_alert_popup spn_alert_icon_toggle" role="alert">
                        <span class="icon-info3 spn_alert_icon"></span>
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                        <p>Une fois que la commande est prête, appuyez sur le bouton commande prête. Un mail sera envoyé au client pour lui rappeler la date et l'heure de sa commande ainsi que le moyen de réception (livraison ou sur place).</p>
                    </div>
                </div>
            </div>
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
                            <span class="txt-m-109 cl6 m-l-10">
                                {{$prepacommande}} <span class="txt-m-109 cl10 m-l-30">{{$livraison}}</span>
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
                                <form method="POST" action="{{route('commandeprepa', $shoppingcart->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <button class="flex-c-m txt-s-105 cl0 bg16 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8 m-rl-10">
                                        Commande prête
                                    </button>
                                </form>
                            @endif
                            <form method="POST" action="{{route('commandelivraison', $shoppingcart->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <button class="flex-c-m txt-s-105 cl0 bg16 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8 m-rl-10">
                                    Commande livrée
                                </button>
                            </form>
                        </div>
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
        {{-- @endforeach --}}
	</div>

@endsection