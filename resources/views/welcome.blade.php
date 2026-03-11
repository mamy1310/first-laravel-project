@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    @forelse ($articles as $article)
        <a href="{{ route('article.details', ['id' => $article->id]) }}">
            <x-article :id="$article->id" :titre="$article->titre" :description="$article->description"/>
        </a>
        @if ($loop->iteration === $loop->count - 1)
            @break
        @endif
    @empty
        <li>Aucun article trouvé.</li>
    @endforelse
@endsection
