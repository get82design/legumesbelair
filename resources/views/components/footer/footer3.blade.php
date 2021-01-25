<!-- Footer -->
<footer class="bg2">
    <div class="container">
        <div class="wrap-footer flex-w p-t-83 p-b-12">
            <div class="footer-col1 p-b-50">
                <div class="p-b-36">
                    <span class="txt-m-109 cl0">
                        Contactez nous
                    </span>
                </div>

                <p class="txt-s-101 cl0 size-w-10 p-b-16">
                    Pour plus de renseignements, contactez nous
                </p>

                <ul>
                    <li class="txt-s-101 cl0 flex-t p-b-10">
                        <span class="size-w-11">
                            <img src="{{ asset('assets/images/icons/icon-mail-02.png') }}" alt="ICON-MAIL">
                        </span>
                        
                        <span class="size-w-12 p-t-1">
                            oliviermartinasso@orange.fr
                        </span>
                    </li>

                    <li class="txt-s-101 cl0 flex-t p-b-10">
                        <span class="size-w-11">
                            <img src="{{ asset('assets/images/icons/icon-pin-02.png') }}" alt="ICON-MAIL">
                        </span>
                        
                        <span class="size-w-12 p-t-1">
                            Chemin de Bel Air, 82440 Réalville
                        </span>
                    </li>

                    <li class="txt-s-101 cl0 flex-t p-b-10">
                        <span class="size-w-11">
                            <img src="{{ asset('assets/images/icons/icon-phone-02.png') }}" alt="ICON-MAIL">
                        </span>
                        
                        <span class="size-w-12 p-t-1">
                            06 05 11 52 23
                        </span>
                    </li>
                </ul>
            </div>

            <div class="footer-col2 p-b-50">
                <div class="p-b-36">
                    <span class="txt-m-109 cl0">
                        Informations
                    </span>
                </div>

                <ul>
                    <li class="p-b-16">
                        <a href="{{route('about')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                            A propos de Nous
                        </a>
                    </li>

                    <li class="p-b-16">
                        <a href="{{route('shop')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                            Notre magasin
                        </a>
                    </li>

                    <li class="p-b-16">
                        <a href="{{route('contact')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-col3 p-b-50">
                <div class="p-b-36">
                    <span class="txt-m-109 cl0">
                        Mon compte
                    </span>
                </div>

                <ul>
                    @auth
                        @admin
                            <li class="p-b-16">
                                <a href="{{route('admin')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mon Compte
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="{{route('admin')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mes Commandes
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="#" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Utilisateurs
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="#" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mes produits
                                </a>
                            </li>
                        @else
                            <li class="p-b-16">
                                <a href="{{route('acount')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mon Compte
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="#" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mes Commandes
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="#" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mes informations
                                </a>
                            </li>
                            <li class="p-b-16">
                                <a href="#" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                    Mes adresses
                                </a>
                            </li>
                        @endadmin
                    @else
                        <li class="p-b-16">
                            <a href="{{route('register')}}" class="txt-s-101 cl0 hov-cl10 trans-04 p-tb-5">
                                Créer un compte
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>

            <div class="footer-col4 p-t-8 p-b-50">
                <div class="bo-all-3 bocl17 flex-col-c-m p-rl-28 p-t-17 p-b-20">
                    <a href="{{route('home')}}" class="wrap-pic-max-s">
                        <img src="{{ asset('assets/images/logo/logo-02.png') }}" alt="LOGO">
                    </a>

                    <p class="txt-s-101 cl0 txt-center p-t-23">
                        Vente de Légumes à la ferme, découvrez nos produits
                    </p>
                </div>
            </div>
        </div>

        <div class="flex-w flex-sb-m bo-t-1 bocl14 p-tb-14">
            <span class="txt-s-101 cl9 p-tb-10 p-r-29">
                Copyright © 2019 Légumes de Bel Air. All rights reserved.
            </span>

            <div class="flex-w flex-m">
                <span>
                    Site réalisé par <a style="color:#8fae4a;" href="http://www.get82design.fr">Get82Design</a>
                </span>
            </div>
        </div>
    </div>
</footer>