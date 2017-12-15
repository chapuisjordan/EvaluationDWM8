@extends('layouts.index')
@section('title')
    <i class="fa fa-list" aria-hidden="true"></i> Détail de votre jeu
@endsection
@section('navbardeux')
    <div class="navbardeux">
        <div class="onglets">
            <a href="/" class="no-style"><div class="onglet hover-orange">Accueil</div></a>
            <a href="/delete" class="no-style"><div class="onglet hover-orange">Supprimer</div></a>
            <a href="/add" class="no-style"><div class="onglet hover-orange">Ajouter</div></a>
            <a href="/updatelist" class="no-style"><div class="onglet hover-orange">Mettre à jour</div></a>
        </div>
    </div>
@endsection

@section('main')
    <table class="tableau">
        <tr class="en-tete-tableau">
            <td>Nom du jeu</td>
            <td>Créateur</td>
            <td>Date de création</td>
            <td>Dernière MAJ</td>
            <td>Supports</td>
            <td>Languages</td>
            <td>Nombre en stock</td>
        </tr>
        <tr>
            <td>{{ $game->name }}</td>
            @if($game->author)
                <td>{{ $game->author->author }}</td>
            @else
                <td>N</td>
            @endif
            <td>{{ $game->created_date }}</td>
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
        </tr>
    </table>
@endsection