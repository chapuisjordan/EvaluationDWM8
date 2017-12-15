@extends('layouts.index')
@section('title')
    Mettre à jour un Jeu
@endsection
@section('onglet1', 'Accueil')
@section('href1', '/')
@section('onglet2', 'Ajouter')
@section('href2', '/add')
@section('onglet3', 'Liste')
@section('href3', '/listing')
@section('onglet4', 'Supprimer')
@section('href4', '/delete')
@section('main')
<table class="tableau">
    <tr class="en-tete-tableau">
        <td>Nom</td>
        <td>Créateur</td>
        <td>Dernière MAJ</td>
        <td>Supports</td>
        <td>Languages</td>
        <td>Nombre en stock</td>
        <td>Mettre à jour</td>

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
            <form method="get" action="/game/update/{{ $game->id }}">
                <button class="btn">
                    <i class="fa fa-refresh orange" aria-hidden="true"></i>
                </button>
            </form>
            </td>

        </tr>

    @endforeach
</table>
@endsection