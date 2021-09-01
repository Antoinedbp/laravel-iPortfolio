@extends('template.back')

@section('contentBO')
    <form action="{{route('storeContact')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">location</label>
        <input type="text" name="Location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">lien image</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="img1">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> petit-titre</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="titre_small">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> lien image</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="img2">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> lien image</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="img3">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> lien image</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="img4">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> lien image</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="img5">
        <label for="exampleInputPassword1" class="form-label"> description</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
@endsection