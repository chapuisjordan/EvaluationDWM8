@extends('layouts.index')
@section('title')
    <i class="fa fa-refresh" aria-hidden="true"></i> Mettre à jour un jeu
@endsection
@section('navbardeux')
    <div class="navbardeux">
        <div class="onglets">
            <a href="/" class="no-style"><div class="onglet hover-orange">Accueil</div></a>
            <a href="/add" class="no-style"><div class="onglet hover-orange">Ajouter</div></a>
            <a href="/listing" class="no-style"><div class="onglet hover-orange">Liste</div></a>
            <a href="/delete" class="no-style"><div class="onglet hover-orange">Supprimer</div></a>
        </div>
    </div>
@endsection


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
            {{{ Form::select('supports[]', $supports, $game->supports, ['multiple' => true], array('class' => 'select-form')) }}}
        </div>
        <hr class="barre">
        <div class="group-select">
            {{{ Form::label('Language(s) : ') }}}
            {{{ Form::select('languages[]', $languages, $game->languages, ['multiple' => true], array('class' => 'select-form')) }}}
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
