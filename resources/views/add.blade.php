@extends('layouts.index')
@section('title')
    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter un jeu
@endsection
@section('navbardeux')
    <div class="navbardeux">
        <div class="onglets">
            <a href="/" class="no-style"><div class="onglet hover-orange">Accueil</div></a>
            <a href="/listing" class="no-style"><div class="onglet hover-orange">Liste</div></a>
            <a href="/delete" class="no-style"><div class="onglet hover-orange">Supprimer</div></a>
            <a href="/updatelist" class="no-style"><div class="onglet hover-orange">Mettre à jour</div></a>
        </div>
    </div>
@endsection


@section('main')
<div class="form-add">
    {!! Form::open(['url' => '/game/insert', 'class' => 'container']) !!}
    <div class="group">
        {{{ Form::label('Nom :') }}}
        {{{ Form::text('name') }}}
    </div>
    <div class="group-select">
        {{{ Form::label('Nombre en stock : ') }}}
        {{{ Form::number('number') }}}
    </div>
    <div class="group">
        {{{ Form::label('Créateur :') }}}
        {{{ Form::select('authors', $authors) }}}
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