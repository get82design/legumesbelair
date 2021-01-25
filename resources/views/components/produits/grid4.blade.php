<!-- Related product -->
<section class="sec-related bg0 p-b-85 p-t-50">
    <div class="container">
        <!-- slide9 -->
        <div class="wrap-slick9">
            <div class="flex-w flex-sb-m p-b-33 p-rl-15">
                <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                    Les autres Produits
                </h3>

                <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
            </div>

            <div class="slick9">
                @foreach($selectimgprods as $selectimgprod)
                <!-- - -->
                <div class="item-slick9 p-all-15">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-140">
                            <img src="../../assets/images/produits/{{$selectimgprod->image}}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{$selectimgprod->produit->name}}
                                </a>

                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    {{$selectimgprod->produit->price}} €
                                </span>

                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="{{route('produit.show', $selectimgprod->produit->id)}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="../../assets/images/icons/icon-view.png" alt="ICON">
                                    </a>
                                    @if($selectimgprod->produit->dispo == "yes")
                                    <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                        <img src="../../assets/images/icons/icon-cart.png" alt="ICON">
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>