{{--
  Template Name: Home
--}}

@extends('layouts.app')



@section('content')
<div class="home-header" >
  <div class="container">
    <div class="col-md-6">
    <h1>CREATORS</h1>
    <H2>that influence</H2>
    <p>Folks to nowa agencja influenceru marketingu na polskim rynku.
      Nasze działania są skierowane do twórców – zarówno marko i mikroinfluencerów, jak i do klientów poszukujących nowego źródła komunikacji.
      </p>
    </div>
  </div>
</div>

<div class="rozpocznij">
<div class="container">
  <div class="row text-center center-block justify-content-between">
    <div class="intro col-md-4 col-md-offset-2"><h3>Twórcy</h3>
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/komputer.jpg"
      alt="Komputer"/>
    <p>Znajdziemy dla Ciebie najlepszych Twórców i przeprowadzimy efektywną kampanię!</p>
    </div>
    <div class="intro col-md-4 col-md-offset-2"><h3>Pomysł</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/komputer.jpg"
      alt="Komputer"/>
      <p>Dzięki nieszablonowemu myśleniu przeprowadzimy ciekawą i angażującą kampanię!</p>
    </div>
    <div class="intro col-md-4"><h3>Realizacja</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/komputer.jpg"
      alt="Komputer"/>
      <p>Do zadań podchodzimy kompleksowo i profesjonalnie – zajmiemy się realizacją całej kampanii wg Twoich wytycznych. </p>
    </div>
  </div>


</div>

<div class="text-center">

  <a class="btn-effect center" href="add-website-here" target="_self" rel="nofollow noopener">Rozpocznij</a>
</div>


</div>
<div class="tworcy">
<div class="container">

  <h1>Twórcy</h1>
  @php
// WP_Query arguments
$args = array(
            'role'           => 'Author',
            'orderby'        => 'post_count',
          );

// The Query
$user_query = new WP_User_Query( $args );
// The Loop
@endphp

@if ( ! empty( $user_query->results )  )
<div class="gallery main-carousel">
  @foreach ( $user_query->results as $user )
  <a href="/author/{{ $user -> data -> user_nicename}}">
  @foreach ( get_user_meta( $user -> ID , 'slim_image_gf' ) as $userAvatar )

<div class="gallery-cell" style="background-image: url('{{$userAvatar}}'); background-size: cover;">
  @endforeach


  @foreach ( get_user_meta( $user -> ID , 'kategorie_tworczosci_gf' ) as $kategoria )
  @php $kategoriearray = explode( ',', $kategoria ) @endphp
  <div class="icons-talens">
@foreach ($kategoriearray as $categoryitem)
    {{-- {{vdump($categoryitem )}} --}}
    <div class="category-box">
      <div class="box-item {{$categoryitem}}">

      </div>
      {{$categoryitem}}
  </div>
@endforeach

</div>
</a>
@endforeach



  <h2>{{$user -> data -> user_nicename}}  </h2><p>Influencer</p>
</div>




@endforeach
</div>
@else
<p>nie znaleziono twóców</p>
@endif

@php
// Restore original Post Data
wp_reset_postdata();
@endphp
<div class="text-center">

  <a class="btn-effect center" href="/tworcy/" target="_self" rel="nofollow noopener">Zobacz wszystkich</a>
</div>
</div>
</div>

<div class="home-info-boxes">
  <div class="container">
    <div class="row">
      <div class="info-box col-md-6">
        <div class="info-header">
        <img
        src=" {{get_stylesheet_directory_uri()}}/assets/images/icon-planet-women.jpg"
        alt="Jeseś twórcą"/>
         <h2> <span class="theme-blue">Jesteś </span> <br> <span class="theme-orange-color">twórcą ?</span> </h2>

        </div>
      <p>Zapraszamy do współpracy wszystkich twórców internetowych, którzy poprzez działanie w mediach społecznościowych tworzą ciekawe i angażujące treści i chcą to wykorzystać przy współpracach marketingowych.
        Dołącz do naszej agencji klikając w przycisk poniżej.
      </p>
      <a class="btn-effect center" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do twórców</a>
      </div>
      <div class="info-box col-md-6">
        <div class="info-header">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/icon-planet-women.jpg"
          alt="Jeseś twórcą"/>
        <h2><span class="theme-blue">Jesteś marką,</span> <br> <span class="theme-orange-color">szukasz twórcy ?</span></h2>
        </div>
        <p>Lorem ipsum lor Lorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lorLorem ipsum lor</p>
      <a class="btn-effect center" href="/dolacz/#regise" target="_self" rel="nofollow noopener">Rozpocznij współpracę</a>
    </div>
    </div>
  </div>
</div>
</div>


@endsection
