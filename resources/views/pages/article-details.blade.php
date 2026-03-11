@extends('layouts.app')
@section('title', 'Détails de l\'article ' . $article->id)
@section('content')
    <h2>Article portant l'identifiant {{ $article->id }}</h2>
    <h3>{{ $article->titre }}</h3>
    <p>{{ $article->description }}</p>
@endsection
