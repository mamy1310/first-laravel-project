@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    @forelse ($articles as $article)
        <x-article :titre="$article['titre']" :description="$article['description']"/>
    @empty
        <li>Aucun article trouvé.</li>
    @endforelse
@endsection
