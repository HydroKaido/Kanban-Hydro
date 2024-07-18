@extends('layout.Structure.index')
@section('homeContent')
@include('components.Header.index')
    <h1> Welcome, {{ Auth::user()->username }}</h1>
    

@endsection