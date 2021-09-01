@extends('template.back')

@section('contentBO')

    <h1>Modifier Skill</h1>
    <br>
    <form action="{{route('updateSkills', $skill->id)}}" method="POST">
        @csrf
        @method('PUT')
        Nom: <input type="text" name="nom" value="{{$skill->nom}}">
    </form>

@endsection

