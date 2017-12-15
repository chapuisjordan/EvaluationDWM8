@extends('layouts.index')
@section('title')
    <i class="fa fa-trash-o" aria-hidden="true"></i>  Suppression d'un jeu
@endsection
@section('navbardeux')
    <div class="navbardeux">
        <div class="onglets">
            <a href="/" class="no-style"><div class="onglet hover-orange">Accueil</div></a>
            <a href="/listing" class="no-style"><div class="onglet hover-orange">Liste</div></a>
            <a href="/add" class="no-style"><div class="onglet hover-orange">Ajouter</div></a>
            <a href="/updatelist" class="no-style"><div class="onglet hover-orange">Mettre à jour</div></a>
        </div>
    </div>
@endsection

@section('main')
    <table class="tableau">
        <tr class="en-tete-tableau">
            <td>Nom</td>
            <td>Créateur</td>
            <td>Dernière MAJ</td>
            <td>Supports</td>
            <td>Languages</td>
            <td>Nombre en stock</td>
            <td>Suppression</td>
        </tr>
        @foreach($games as $game)
            <tr>
                <td>{{ $game->name }}</td>
                @if($game->author)
                    <td>{{ $game->author->author }}</td>
                @else
                    <td>N</td>
                @endif
                @if($game->updated_date == null)
                    <td>Null</td>
                @else
                    <td>{{ $game->updated_date }}</td>
                @endif
                <td>
                    @foreach($game->supports as $support)
                        {{ $support->support}}
                    @endforeach
                </td>
                <td>
                    @foreach($game->languages as $language)
                        {{ $language->language }}
                    @endforeach
                </td>
                <td>{{ $game->number }}</td>
                <td>

                <form method="get" action="/game/delete/{{ $game->id }}">
                    {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-warning">
                        <i class="fa fa-trash orange" aria-hidden="true"></i>
                        </button>

                </form>
                </td>


            </tr>

        @endforeach
    </table>

@endsection