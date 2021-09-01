@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PAGE ABOUT</h1>

    <div class="buttonsBO">
        <a href="{{route('createAbout')}}" class="aBtn">
            <button class="monBtn1" type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
        <a href="{{route('editAbout')}}" class="aBtn">
          <button class="monBtn2" type="submit">Edit About</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataAbout as $item)

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>UI/UX Designer &amp; Web Developer.</h3>
              <p class="font-italic">
                Texte: {{$item->petittext}}
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{$item->birthday}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{$item->website}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>{{$item->phone}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{$item->city}}</li>
                  </ul> 
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>{{$item->age}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong>{{$item->degree}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong>{{$item->PhEmailone}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$item->Freelance}}</li>
                  </ul>
                </div>
              </div>
              <p>
                {{$item->text}}
              </p>
            </div>
          </div>

          <div class="buttonDelEd">
            <form action="{{route('deleteBlog', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>
                </form>
                <a href="{{route('editBlog', $item->id)}}">
                    <button class="btnEd" type="submit">
                        EDIT
                    </button>
                </a>
            </div>

        @endforeach
    </div>

@endsection