@extends('template.back')

@section('contentBO')
<h1 class="titresBO">PAGE CONTACT</h1>

    <div class="buttonsBO">
        <a href="{{route('createContact')}}" class="aBtn">
            <button class="monBtn1" type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataContact as $item)
        <div class="maDiv">
            <p>titre:{{$item->titre}}</p>
            <p>lien image:{{$item->img}}</p>
            <p>description:{{$item->description}}</p>
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
        </div>
        @endforeach
    </div>

@endsection