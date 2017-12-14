@extends('layouts.index')
@section('title')
Accueil
@endsection

@section('main')
<div class="categories">
    <a href="/listing">
    <div href="/listing" class="categorie listing">
        <h2 class="categorie-texte">Liste des jeux</h2>
    </div>
    </a>
    <a href="/add">
    <div class="categorie add">
        <h2 class="categorie-texte">Ajouter un jeux</h2>
    </div>
    </a>
</div>
<div class="categories">
    <a href="/updatelist">
    <div class="categorie update">
        <h2 class="categorie-texte">Mettre à jour un jeux</h2>
    </div>
    </a>
    <a href="/delete">
    <div class="categorie delete">
        <h2 class="categorie-texte">Supprimer un jeux</h2>
    </div>
    </a>
</div>

@endsection