{{--
  Template Name: Dolacz
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="dolocz-page">

  <div class="container">
    <h1>Dołącz do Folsk</h1>
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item-tab ">
        <a class="nav-link nav-item-tab-right active " data-toggle="pill" href="#login">Dołącz jako twórca</a>
      </li>
      <li class="nav-item-tab">
        <a class="nav-link nav-item-tab-left" data-toggle="pill" href="#regis">Znajdź twórcę dla swojej marki</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        @if (is_user_logged_in())
        {{gravity_form( 2, false, false, false, '', true )}}
        @else
        {{gravity_form( 1, false, false, false, '', false )}}
        @endif

   {{-- {{gravity_form( 1, false, false, false, '', false )}} --}}
      </div>
      <div id="regis" class="container tab-pane fade">
        <div class="row">
          <div class="col-sm-4">
        <img
        src=" {{get_stylesheet_directory_uri()}}/assets/images/dolacz2-image.jpg"
        alt="Dołącz"/>
          </div>
          <div class="col-sm-8 znajdz-toworce-opis">
        <p style=" font-size:18px;">Foks nie ma dla nas rzeczy niemożliwych. Oferujemy kompleksową obsługę - od wyboru twórców i nawiązanie współpracy, przez realizację kampanii, do zmierzenia efektów w raporcie.

        </p>
        <p style="font-weight:bold; color:##2b3050;">Napisz na <span style="color:#ff6251 ;">kontakt@folks.pl</span> i sprawdź co potrafimy</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  {!! get_the_posts_navigation() !!}
@endsection
