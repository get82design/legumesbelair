<div class="bg0">
    <div class="container">
        <form>
            <div class="wrap-table-shopping-cart">
                <table class="table-shopping-cart">
                    <tr class="table_head bg12">
                        <th></th>
                        <th class="column-2">Nom</th>
                        <th class="column-2">Prénom</th>
                        <th class="column-2">Téléphone</th>
                        <th class="column-2"></th>
                    </tr>
                    <?php $n=0; ?>
                    @foreach($users as $user)
                    <tr class="table_row">
                        <td class="p-rl-30">
                            <?php $n=$n+1;
                                echo $n; ?>
                        </td>
                        <td class="column-2">
                            <p>{{$user->name}}</p>
                        </td>
                        <td class="column-2">
                            <p>{{$user->firstname}}</p>
                        </td>
                        <td class="column-2">
                            <p>{{$user->phone}}</p>
                        </td>
                        <td class="">
                            <div class="flex-w flex-sb-m">
                                <a href="{{route('viewuser', $user->id)}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                                    Voir
                                </a>
                                @if($user->role != "admin")
                                <form method="post" action="{{route('destroyuser', $user->id)}}">
                                {{ csrf_field() }}
                                    <div class="fs-15 hov-cl10 pointer p-r-10">
                                        <button class="lnr lnr-cross"></button>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </form>
    </div>
</div>