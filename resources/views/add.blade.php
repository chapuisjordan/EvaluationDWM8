@extends('layouts.index')
@section('title')
Ajouter un livre
@endsection

@section('onglet1', 'Accueil')
@section('href1', '/')
@section('onglet2', 'Supprimer')
@section('href2', '/delete')
@section('onglet3', 'Liste')
@section('href3', '/listing')
@section('onglet4', 'Mettre à jour')
@section('href4', '/updatelist')

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