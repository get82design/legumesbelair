<!-- Subscribe -->
<section class="sec-subscribe bg2 p-t-65 p-b-65">
    <div class="container">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        @if (\Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('failure') }}</p>
        </div><br />
        @endif
        <div class="row">
            <div class="col-md-5 p-tb-15">
                <div class="h-full flex-col-m">
                    <h4 class="txt-m-110 cl0 p-b-4">
                        S'inscrire à la Newsletter.
                    </h4>

                    <p class="txt-s-101 cl6">
                        Recevez des informations sur notre boutique par e-mail.
                    </p>
                </div>
            </div>

            <div class="col-md-7 p-tb-15">
                <form method="post" action="{{route('newsletter')}}" class="flex-w flex-m h-full">
                {{ csrf_field() }}
                    <input class="size-a-6 txt-s-106 cl6 plh0 p-rl-30 w-full-sm" type="text" name="email" placeholder="Votre adresse mail">
                    <button class="bg10 size-a-5 txt-s-107 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>