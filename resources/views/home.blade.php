@extends('layout.main')

@php
$comics = config('comics_data');
@endphp

@section('main')

@yield('content')

@stop