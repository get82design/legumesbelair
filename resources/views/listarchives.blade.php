@extends('layouts.myapp')

@section('dynamicPageTitle', 'Liste des archives de commandes')
@section('description', "Retrouvez toutes vos commandes passées sur le site légumes de Bel Air, et archivées sur cette page. Vente de légumes directement chez le producteur, à Réalville dans le Tarn et Garonne")
@section('keywords', "liste archives, commandes archivées, légumes de Bel Air, producteur local, vente à la ferme, panier légumes, agriculture raisonnée")

@section('content')

    @include('components.header.titlepage')

    @admin
    <div class="container m-t-40">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1 p-l-30">Nom</th>
                    <th class="column-2">Commande n°</th>
                    <th class="column-3">Réceptionné le</th>
                    <th class="column-4"></th>
                </tr>
                @foreach($listarchives as $archive)
                <?php
                    $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                                    IntlDateFormatter::NONE,
                                    'Europe/Paris',
                                    IntlDateFormatter::GREGORIAN );
                    $date =new DateTime($archive->created_at);
                    $creationdate = $formatter->format($date);
                    $date =new DateTime($archive->updated_at);
                    $receptiondate = $formatter->format($date);
                    $pr_id = sprintf("%06d", $archive->id);
                ?>
                <tr class="table_row">
                    <td class="column-4 p-l-30">
                        @if($archive->name != "")
                        {{$archive->name}}
                        @else
                        {{$archive->user->name}} {{$archive->user->firstname}}
                        @endif
                    </td>
                    <td class="column-4 p-l-30">
                        {{$pr_id}}
                    </td>
                    <td class="column-4 p-l-30">
                        {{$receptiondate}}
                    </td>
                    <td class="column-5 flex-c">
                        <a href="{{route('archive', $archive->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                Voir
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="m-tb-20">
        {{ $listarchives->links() }}
        </div>
    </div>
    @else
    <div class="container m-t-40">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-2 p-l-30">Commande n°</th>
                    <th class="column-2">Commandé le</th>
                    <th class="column-3">Réceptionné le</th>
                    <th class="column-4"></th>
                </tr>
                @foreach($listarchives as $archive)
                <?php
                    $formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
                                    IntlDateFormatter::NONE,
                                    'Europe/Paris',
                                    IntlDateFormatter::GREGORIAN );
                    $date =new DateTime($archive->created_at);
                    $creationdate = $formatter->format($date);
                    $date =new DateTime($archive->updated_at);
                    $receptiondate = $formatter->format($date);
                    $pr_id = sprintf("%06d", $archive->id);
                ?>
                <tr class="table_row">
                    <td class="column-4 p-l-30">
                        {{$pr_id}}
                    </td>
                    <td class="column-4">
                        {{$creationdate}}
                    </td>
                    <td class="column-4">
                        {{$receptiondate}}
                    </td>
                    <td class="column-5 flex-c">
                        <a href="{{route('archive', $archive->id)}}">
                            <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                Voir
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="m-tb-20">
        {{ $listarchives->links() }}
        </div>
    </div>
    @endadmin

@endsection