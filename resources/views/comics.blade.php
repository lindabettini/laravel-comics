@extends('layout.main')

@php
$comics = config('comics_data');
@endphp

@section('main')
@include('includes.products')
@yield('content')

@stop