@extends('template.back')

@section('contentBO')
    <h2>New image portfolio</h2>
    <form action="{{route('storePort')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input type="text" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
@endsection