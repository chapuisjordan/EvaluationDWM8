@extends('layouts.index')
@section('title')
    Mettre à jour un jeu
@endsection

@section('main')
    <div class="form-add">
        {!! Form::open(['url' => '/game/update/{id}']) !!}
        <div class="group">
            {{{ Form::label('Nom :') }}}
            {{{ Form::text('name') }}}
        </div>
        <div class="group">
            {{{ Form::label('Date de création :') }}}
            {{{ Form::text('created_date') }}}
        </div>
        <div class="group">
            {{{ Form::label('Dernière maj :') }}}
            {{{ Form::text('updated_date') }}}
        </div>
        <div class="group-select">
            {{{ Form::label('Support(s) : ') }}}
            {{{ Form::select('supports[]', $supports, 0, ['multiple' => true]) }}}
        </div>
        <div class="group-select">
            {{{ Form::label('Language(s) : ') }}}
            {{{ Form::select('languages[]', $languages, 0, ['multiple' => true]) }}}
        </div>
        <div class="submit">
            {{{ Form::submit('Insérer') }}}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
