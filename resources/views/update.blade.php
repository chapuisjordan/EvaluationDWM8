@extends('layouts.index')
@section('title')
    Mettre à jour un jeu
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
    <div class="form-add">
        {!! Form::open(['url' => '/game/updateAction/{id}', 'class' => 'container']) !!}
        {{{ Form::hidden('id', $game->id) }}}
        <div class="group">
            {{{ Form::label('Nom :') }}}
            {{{ Form::text('name', $game->name) }}}
        </div>
        <hr class="barre">
        <div class="group">
            {{{ Form::label('Créateur :') }}}
            {{{ Form::select('author', $authors) }}}
        </div>
        <hr class="barre">

        <div class="group">
            {{{ Form::label('Date de création :') }}}
            {{{ Form::text('created_date', $game->created_date) }}}
        </div>
        <hr class="barre">
        <div class="group">
            {{{ Form::label('Dernière maj :') }}}
            {{{ Form::text('updated_date',$game->updated_date) }}}
        </div>
        <hr class="barre">
        <div class="group-select">
            {{{ Form::label('Support(s) : ') }}}
            {{{ Form::select('supports[]', $supports, $game->supports, ['multiple' => true]) }}}
        </div>
        <hr class="barre">
        <div class="group-select">
            {{{ Form::label('Language(s) : ') }}}
            {{{ Form::select('languages[]', $languages, $game->languages, ['multiple' => true]) }}}
        </div>
        <hr class="barre">
        <div class="group-select">
            {{{ Form::label('Nombre en stocks : ') }}}
            {{{ Form::number('number', $game->number) }}}
        </div>
        <hr class="barre">
        <div class="submit">
            {{{ Form::submit('Insérer') }}}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
