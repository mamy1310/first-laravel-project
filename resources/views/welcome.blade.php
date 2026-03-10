@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    <x-article titre="L'IA soigne mieux">
        L'intelligence artificielle aide les médecins à diagnostiquer plus vite.
    </x-article>
    <x-article titre="Villes vertes">
        Les métropoles deviennent plus écologiques et durables.
    </x-article>
    <x-article titre="Télétravail">
        Plus de liberté, mais aussi plus de solitude.
    </x-article>
@endsection
