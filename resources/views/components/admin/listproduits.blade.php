<div class="bg0">
    <div class="container">
        {{-- <form> --}}
            <div class="wrap-table-shopping-cart">
                <table class="table-shopping-cart">
                    <tr class="table_head bg12">
                        <th></th>
                        <th></th>
                        <th class="column-2">Produit</th>
                        <th class="column-2 p-rl-10">Prix</th>
                        <th class="column-2">Disponibilité</th>
                        <th class="column-2"></th>
                    </tr>
                    
                    <?php $n=0; ?>
                    @foreach($selectimgprods as $selectimgprod)
                    <tr class="table_row">
                        <td class="p-rl-10">
                            <?php $n=$n+1;
                                echo $n; ?>
                        </td>
                        <td>
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="assets/images/produits/{{$selectimgprod->image}}" alt="IMG">
                            </div> 
                        </td>
                        <td class="column-2">
                            <p>{{$selectimgprod->produit->name}}</p>
                        </td>
                        <td class="column-2 p-rl-10">
                            <p>{{$selectimgprod->produit->price}} €</p>
                        </td>
                        <td class="column-2 p-l-10">
                            @if($selectimgprod->produit->dispo==="yes")
                                <div class="flex-t">
                                    <img class="m-t-4 m-r-8" src="{{asset('assets/images/icons/icon-list3.png')}}" alt="IMG">
                                    <span class="size-w-53 txt-m-104 cl6">
                                        Disponible
                                    </span>
                                </div>
                            @else
                                <div class="flex-t">
                                    <img class="m-t-4 m-r-8" src="{{asset('assets/images/icons/icon-list4.png')}}" alt="IMG">
                                    <span class="size-w-53 txt-m-104 cl6">
                                        Indisponible
                                    </span>
                                </div>
                            @endif
                        </td>
                        <td class="">
                            <div class="flex-w flex-sb-m">
                                <a href="{{route('produit.edit', $selectimgprod->produit->id)}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04">
                                    Modifier
                                </a>

                                <div class="fs-15 hov-cl10 pointer p-r-10">
                                    <form method="POST" action="{{route('destroyproduit', $selectimgprod->produit->id) }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <button type="submit" class="lnr lnr-cross"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        {{-- </form> --}}
    </div>
</div>