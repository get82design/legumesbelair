@php $cartphp = Cart::content(); 
    $nbprod = count($cartphp);
    $cartpan = [];
    class Ligne {
        public $id;
        public $article;
        public $price; 
        public $qty;
        public $image;
    };
    foreach($cartphp as $cart){
        $ligne = new Ligne;
        $ligne->article = $cart->name;
        $ligne->id = $cart->id;
        $ligne->price = $cart->price;
        $ligne->qty = $cart->qty;
        $ligne->image = "/assets/images/produits/".$cart->options->image;
        array_push($cartpan, $ligne);
    }
    $cartpanfinal = json_encode($cartpan);
@endphp
<!-- Header -->
<header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop">
                <div class="left-header">
                    <!-- Logo desktop -->		
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/images/logo/logo-02.png')}}" alt="IMG-LOGO"></a>
                    </div>	
                </div>
                <div class="center-header">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="{{route('home')}}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">à propos</a>
                            </li>
                            <li>
                                <a href="{{route('shop')}}">magasin</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>  
                <div class="right-header">
                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                        <div class="h-full flex-m">
                            <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                                <img src="{{ asset('assets/images/icons/icon-search2.png')}}" alt="SEARCH">
                            </div>
                        </div>
                        @admin
                            <div class="h-full flex-m m-l-10">
                                <div class="icon-header-item flex-c-m trans-04">
                                    <a href={{route('admin')}}>
                                        <img src="{{ asset('assets/images/icons/icon-user2.png')}}" style="width:14px; height:18px;" alt="Connexion">
                                    </a>
                                </div>
                            </div>
                        @else
                            @auth
                                <div class="h-full flex-m m-l-10">
                                    <div class="icon-header-item flex-c-m trans-04">
                                        <a href={{route('acount')}}>
                                            <img src="{{ asset('assets/images/icons/icon-user2.png')}}" style="width:14px; height:18px;" alt="Connexion">
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="h-full flex-m m-l-10">
                                    <div class="icon-header-item flex-c-m trans-04">
                                        <a href={{route('login')}}>
                                            <img src="{{ asset('assets/images/icons/icon-user2.png')}}" style="width:14px; height:18px;" alt="Connexion">
                                        </a>
                                    </div>
                                </div>
                            @endauth
                        @endadmin
                        @include('components.nav.panier')
                    </div>
                </div>
            </nav>
        </div>	
    </div>
    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="index.html"><img src="{{ asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
        </div>
        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
            <div class="h-full flex-m">
                <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                    <img src="{{ asset('assets/images/icons/icon-search.png')}}" alt="SEARCH">
                </div>
            </div>
            @admin
                <div class="h-full flex-m m-l-10">
                    <div class="icon-header-item flex-c-m trans-04">
                        <a href={{route('admin')}}>
                            <img src="{{ asset('assets/images/icons/icon-user.png')}}" style="width:14px; height:18px;" alt="Connexion">
                        </a>
                    </div>
                </div>
            @else
                @auth
                    <div class="h-full flex-m m-l-10">
                        <div class="icon-header-item flex-c-m trans-04">
                            <a href={{route('acount')}}>
                                <img src="{{ asset('assets/images/icons/icon-user.png')}}" style="width:14px; height:18px;" alt="Connexion">
                            </a>
                        </div>
                    </div>
                @else
                    <div class="h-full flex-m m-l-10">
                        <div class="icon-header-item flex-c-m trans-04">
                            <a href={{route('login')}}>
                                <img src="{{ asset('assets/images/icons/icon-user.png')}}" style="width:14px; height:18px;" alt="Connexion">
                            </a>
                        </div>
                    </div>
                @endauth
            @endadmin
            @include('components.nav.paniermobile')
        </div>
        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>
    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="{{route('home')}}">Accueil</a>
            </li>
            <li>
                <a href="{{route('about')}}">à propos</a>
            </li>
            <li>
                <a href="{{route('shop')}}">Magasin</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <span class="lnr lnr-cross"></span>
        </button>
        
        <div class="container-search-header">
            <form class="wrap-search-header flex-w">
                <button class="flex-c-m trans-04">
                    <span class="lnr lnr-magnifier"></span>
                </button>
                <input class="plh1" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>