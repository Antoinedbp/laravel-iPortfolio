@extends('template.back')

@section('contentBO')

    <h1>Modifier Portfolio</h1>
    <br>
    <form action="{{route('updatePortfolio', $portfolio->id)}}" method="POST">
        @csrf
        @method('PUT')
        Image: <input type="text" name="img" value="{{$portfolio->img}}">
    </form>

@endsection

