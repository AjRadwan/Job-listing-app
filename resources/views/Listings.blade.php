@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

 

@foreach($listings as $listing)

 <x-listing-card :listing="$listing" />

@endforeach
@endsection