<!-- Product detail -->
<section class="sec-product-detail bg0 p-t-105 p-b-70">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
					<div class="m-r--30 m-r-0-lg">
						<!-- Slide 100 -->
						<div id="slide100-01">
							<div class="wrap-main-pic-100 bo-all-1 bocl12 pos-relative">
								<div class="main-frame">
									<div class="wrap-main-pic">
										<div class="main-pic">
											<img src="../../assets/images/produits/{{$imgproduits[0]->image}}" alt="{{$imgproduits[0]->alt}}">
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
                <div class="p-l-70 p-t-35 p-l-0-lg">
                    <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                        {{$imgproduit->produit->name}}
                    </h4>

                    <span class="txt-m-117 cl9">
                        {{$imgproduit->produit->price}} €/{{$imgproduit->produit->conditionnement}}
                    </span>
                    
                    <p class="txt-s-101 cl6">
                        {{$imgproduit->produit->desc}}
                    </p>
                    @if($imgproduit->produit->dispo == "yes")
                    <div class="flex-w flex-m p-t-55 p-b-30">
                        <div id="counter">
                            <counter></counter>
                        </div>

                        <div id="addprod">
                            <addprod :prodid="{{$imgproduit->produit->id}}"></addprod>
                        </div>
                    </div>
                    @else
                    <div class="flex-w flex-m p-t-55 p-b-30">
                        <div class="flex-c-m txt-s-103 cl0 bg16 size-a-2 hov-btn2 trans-04 m-b-30">
                            Indisponible
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

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