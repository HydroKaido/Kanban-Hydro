@extends('layout.Structure.index')
@section('homeContent')
    <h1> Welcome, {{ Auth::user()->username }}</h1>
    <form action="{{route('logout.post')}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@endsection