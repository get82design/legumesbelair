<section class="how-overlay2 bg-img1" style="background-image: url(../../assets/images/{{$image}});">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                {{$title}}
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="{{route('home')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Accueil
                </a>

                <span>
                    /
                </span>

                <a href="{{route('acount')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6" style="margin-left:5px;">
                    Compte
                </a>

                <span>
                    / {{$title}}
                </span>
            </span>
        </div>
    </div>
</section>