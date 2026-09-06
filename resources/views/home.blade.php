@extends('layouts.app')

@section('title', config('cabinet.nom').' — '.config('cabinet.titre'))

@section('content')
    @include('partials.hero')
@endsection
