@extends('layout.main')

@php
$comics = config('comics_data');
@endphp

@section('main')
@include('includes.comics')
@yield('content')

@stop