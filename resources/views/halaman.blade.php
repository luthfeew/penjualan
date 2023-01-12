@extends('layout.layout')
@section('title', $title)
@section('sidebar')
    @parent
    <li>PHP</li>
@endsection
@section('content')
    <p>{{ $konten }}</p>
@stop
