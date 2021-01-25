<div>
    <form method="POST" action="{{ route('addresslivraison.update', $addresslivraison->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-sm-4 p-b-23">
                <div>
                    <div class="txt-s-101 cl6 p-b-10">
                        N° voie <span class="cl12">*</span>
                    </div>

                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="number" name="numrue" value="{{$addresslivraison->numrue}}">
                </div>
            </div>

            <div class="col-sm-8 p-b-23">
                <div>
                    <div class="txt-s-101 cl6 p-b-10">
                        adresse <span class="cl12">*</span>
                    </div>

                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="rue" value="{{$addresslivraison->rue}}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 p-b-23">
                <div>
                    <div class="txt-s-101 cl6 p-b-10">
                        Code postal <span class="cl12">*</span>
                    </div>

                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="number" name="postal" value="{{$addresslivraison->postal}}" required>
                </div>
            </div>

            <div class="col-sm-8 p-b-23">
                <div>
                    <div class="txt-s-101 cl6 p-b-10">
                        ville <span class="cl12">*</span>
                    </div>

                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="ville" value="{{$addresslivraison->ville}}" required>
                </div>
            </div>
        </div>
        <input style="display:none" name="user_id" value="{{$addresslivraison->user_id}}">
        <div class="flex-w p-rl-15 p-t-17">
            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                Enregistrer
            </button>
        </div>
    </form>
</div>