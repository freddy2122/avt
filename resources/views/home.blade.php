@extends('layouts.app')

@section('title', config('cabinet.nom').' — '.config('cabinet.titre'))

@section('content')
    @include('partials.hero')
    @include('partials.competences-bar')
    @include('partials.a-propos')
    @include('partials.droit-affaires')
@endsection
