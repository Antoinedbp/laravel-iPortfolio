@extends('template.back')

@section('contentBO')

    <h1>Modifier About</h1>
    <br>
    <form action="{{route('updateAbout', $abouts->id)}}" method="POST">
        @csrf
        @method('PUT')
        Birthday: <input type="text" name="birthday" value="{{$abouts->birthday}}">
        Website: <input type="number" name="website" value="{{$abouts->website}}">
        Phone: <input type="text" name="phone" value="{{$abouts->phone}}">
        City: <input type="text" name="city" value="{{$abouts->city}}">
        Age: <input type="text" name="age" value="{{$abouts->age}}">
        degree: <input type="text" name="degree" value="{{$abouts->degree}}">
        PHEmailone: <input type="text" name="PHEmailone" value="{{$abouts->PHEmailone}}">
        Freelance: <input type="text" name="Freelance" value="{{$abouts->Freelance}}">
        text: <input type="text" name="text" value="{{$abouts->text}}">
        <button type="submit">Submit</button>
    </form>

@endsection

