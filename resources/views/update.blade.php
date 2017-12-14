@extends('layouts.index')
@section('title')
    Mettre à jour un jeu
@endsection

@section('main')
    <div class="form-add">
        {!! Form::open(['url' => '/game/updateAction/{id}']) !!}
        {{{ Form::hidden('id', $game->id) }}}
        <div class="group">
            {{{ Form::label('Nom :') }}}
            {{{ Form::text('name', $game->name) }}}
        </div>
        <div class="group">
            {{{ Form::label('Date de création :') }}}
            {{{ Form::text('created_date', $game->created_date) }}}
        </div>
        <div class="group">
            {{{ Form::label('Dernière maj :') }}}
            {{{ Form::text('updated_date',$game->updated_date) }}}
        </div>
        <div class="group-select">
            {{{ Form::label('Support(s) : ') }}}
            {{{ Form::select('supports[]', $supports, $game->supports, ['multiple' => true]) }}}
        </div>
        <div class="group-select">
            {{{ Form::label('Language(s) : ') }}}
            {{{ Form::select('languages[]', $languages, $game->languages, ['multiple' => true]) }}}
        </div>
        <div class="submit">
            {{{ Form::submit('Insérer') }}}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
