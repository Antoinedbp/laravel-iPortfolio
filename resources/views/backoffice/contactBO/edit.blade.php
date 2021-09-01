@extends('template.back')

@section('contentBO')

    <h1>Modifier Contact</h1>
    <br>
    <form action="{{route('updateContact', $contacts->id)}}" method="POST">
        @csrf
        @method('PUT')
        Location: <input type="text" name="location" value="{{$contacts->location}}">
        Description de location: <input type="number" name="locaDescription" value="{{$contacts->locaDescription}}">
        Email: <input type="text" name="email" value="{{$contacts->email}}">
        Description email: <input type="text" name="emailDescription" value="{{$contacts->emailDescription}}">
        call: <input type="text" name="call" value="{{$contacts->call}}">
        Description call: <input type="text" name="callDescription" value="{{$contacts->callDescription}}">
        Source: <input type="text" name="src" value="{{$contacts->src}}">
    </form>

@endsection

