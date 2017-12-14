@extends('layouts.index')
@section('title')
Liste des films
@endsection

@section('main')
    <table class="tableau">
        <tr>
            <td>Nom</td>
            <td>Auteur</td>
            <td>Dernière MAJ</td>
            <td>Supports</td>
            <td>Languages</td>
        </tr>
        @foreach($games as $game)
           <tr>
               <td>{{ $game->name }}</td>
               <td> </td>
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
           </tr>
        @endforeach
    </table>

@endsection