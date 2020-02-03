{{--
  Template Name: Kontakt
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="dolocz-page">
    <div class="container">
      <h1>Masz pytania?</h1>
      <h2>Skontaktuj się z nami!</h2>
      <div class="row">


        <div class="col-md-8">
          {{gravity_form( 3, false, false, false, '', true )}}
        </div>
        <div class="col-md-4 ">
          <div class="kontakt-info">
          <h2>Adres</h2>
          <p>Folks <br>
            ul. Edwarda Jelinka 38 <br>
            01-646 Warszawa
          </p>

          <hr>
          <h2>Kontakt</h2>
          <p>Telefon: <span>(22) 392 95 85</span></p>
          <p>Email: <span>kontakt@folks.pl</span></p>
        </div>
      </div>
      </div>

    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
