@extends('layouts.base')

@section('title')
    Ademass | Taller BootCamp Css 3
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
@endsection



@section('content')
    @include('layouts.partials.cards')
    @include('layouts.partials.products')
    @include('layouts.partials.banner')
    @include('layouts.partials.reviews')



    @include('layouts.partials.contact')
@endsection
