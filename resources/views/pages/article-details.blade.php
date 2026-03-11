@extends('layouts.app')
@section('title', 'Détails de l\'article ' . $article->id)
@section('content')
    <x-article :id="$article->id" :titre="$article->titre" :description="$article->description"/>
@endsection
