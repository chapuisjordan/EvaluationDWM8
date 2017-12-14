@extends('layouts.index')
@section('title')
Liste des films
@endsection

@section('main')
    <table class="tableau">
        <tr class="en-tete-tableau">
            <td>Nom</td>
            <td>Dernière MAJ</td>
            <td>Supports</td>
            <td>Languages</td>
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
           </tr>

        @endforeach
    </table>

@endsection