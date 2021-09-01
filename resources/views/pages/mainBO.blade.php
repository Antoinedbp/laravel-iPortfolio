@extends('template.back')

@section('contentBO')

  <h1 class="title_home">PAGE HOME</h1>
  <div class="globaleHome" >
    <div class="globale2">

      <div class="about">
        <h3>Modification About</h3>
        <p>CRUD About</p>
        <a href="{{route('showAbout')}}">
        <button type="submit">DIRECTION About</button>
        </a>
      </div>
      <div class="contact">
        <h3>Modification Contact</h3>
        <p>CRUD Contact</p>
        <a href="{{route('showContact')}}">
          <button type="submit">DIRECTION Contact</button>
        </a>
      </div>
      <div class="portfolio">
          <h3>Modification PORTFOLIO</h3>
          <p>CRUD PORTFOLIO</p>
          <a href="{{route('showPortfolio')}}">
            <button type="submit">DIRECTION PORTFOLIO</button>
          </a>
      </div>
      <div class="skills">
          <h3>Modification Skills</h3>
          <p>CRUD Skills</p>
          <a href="{{route('showSkill')}}"> 
            <button type="submit">DIRECTION Skills</button>
          </a>
      </div>
    
    </div>
  </div>

@endsection

