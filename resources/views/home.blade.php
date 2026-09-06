@extends('layouts.app')

@section('title', config('cabinet.nom').' — '.config('cabinet.titre'))

@section('content')
    @include('partials.hero')
    @include('partials.competences-bar')
    @include('partials.a-propos')
    @include('partials.droit-affaires')
    @include('partials.expertises')
    @include('partials.pourquoi')
    @include('partials.accompagnements')
    @include('partials.cabinet-digital')
    @include('partials.avis')
    @include('partials.faq')
    @include('partials.rendez-vous')
@endsection
