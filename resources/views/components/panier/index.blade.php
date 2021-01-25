@php
    $cart = Cart::content();
    $simple_articles = [];
    $i = 0;
    foreach($cart as $item){
        $article = [
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'qty' => $item->qty,
            'image' => $item->options->image,
        ];
        $simple_articles[$i] = $article;
        $i++;
    }
    $cartpan = json_encode($simple_articles)
@endphp
<!-- content page -->
<div class="bg0 p-tb-100">
    <div class="container" id="listepanier">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1 p-l-30">Produit</th>
                    <th class="column-2">Prix</th>
                    <th class="column-3">Quantité</th>
                    <th class="column-4">Total</th>
                </tr>
                @foreach($cart as $item)
                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="../../assets/images/produits/{{$item->options->image}}" alt="IMG">
                            </div>
                            <span>
                                {{$item->name}}
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        {{$item->price}} €
                    </td>
                    <td class="column-3">
                        @include('components.bladevue.countertwo')
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            @include('components.bladevue.prixligne')
                            <div class="fs-15 hov-cl10 pointer">
                                <form method="POST" action="{{route('deleterow', $item->rowId)}}">
                                {{ csrf_field() }}
                                    <button class="lnr lnr-cross"></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="flex-w flex-sb-m p-t-20">
            <div class="flex-w flex-m m-r-50 m-tb-10">
            </div>
            <a href="{{route('shop')}}">
                <div class="flex-c-m txt-s-105 cl0 bg10 size-a-33 hov-btn2 trans-04 pointer p-rl-20 m-tb-10">
                    Rajouter des produits
                </div>
            </a>
        </div>

        <div class="flex-w flex-sb-m p-tb-20">
            <div class="m-r-50 m-tb-10"></div>
            <div>
                <span class="txt-m-123 cl3 p-tb-20">
                    TOTAL DES ACHATS
                </span>
                <div>              
                    {{-- <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                        <span class="size-w-58 txt-m-109 cl3">
                            Hors Taxe
                        </span>
                        <php $subtotal = Cart::subtotal(); >
                        @include('components.bladevue.subtotal')
                    </div> --}}
                    <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                        <span class="size-w-58 txt-m-109 cl3">
                            TTC
                        </span>
                        <?php $total = Cart::total(); ?>
                        @include('components.bladevue.totalprice')
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-w flex-sb-m p-t-20">
            <div class="flex-w flex-m m-r-50 m-tb-10"></div>
            @Auth
            <a href="{{route('shoppingcart.create')}}">
                <button class="flex-c-m txt-s-105 cl0 bg10 size-a-34 hov-btn2 trans-04 p-rl-20 m-tb-10">
                    Passer la commande
                </button>
            </a>
            @else
            <a href="{{route('login')}}" >
                <button class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04 p-rl-20 m-tb-10">
                    Connexion
                </button>
            </a>
            @endauth
        </div>
    </div>
</div>