@extends('pages.layout.app')

@section('title')
    Home page
@endsection


@section('content')

    @component('pages.layout.header',['nav_title'=>'Home page'])


    @endcomponent

    <h1>Hello it is a dental clinic admin panel</h1>

@endsection
