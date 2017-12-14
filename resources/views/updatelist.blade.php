@extends('layouts.index')
@section('title')
    Mettre à jour un Jeu
@endsection
<table class="tableau">
    <tr class="en-tete-tableau">
        <td>Nom</td>
        <td>Dernière MAJ</td>
        <td>Supports</td>
        <td>Languages</td>
        <td>Mettre à jour</td>
    </tr>
    @foreach($games as $game)
        <tr>
            <td>{{ $game->name }}</td>
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
            <td><i class="fa fa-refresh" aria-hidden="true"></i></td>
        </tr>

    @endforeach
</table>