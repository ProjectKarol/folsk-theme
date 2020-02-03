{{--
  Template Name: Home
--}}

@extends('layouts.app')



@section('content')
{{-- Section 1  --}}
<div class="home-header d-none d-lg-block" >
    <div class="container">
      <div class="row">


          <div class="col-md-6">
          <h1>CREATORS <br> <span style="color:white;">that influence</span></h1>

          <p>Folks to agencja influencer marketingu na polskim rynku. Nasze działania są skierowane do twórców – zarówno makro i mikroinfluencerów, jak i do klientów poszukujących skutecznego sposobu komunikacji.
            </p>
          </div>
          <div class="col-md-6">
            <img
            src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-top.png"
            alt="Dołącz"/>
            </div>
      </div>
    </div>
</div>
<div class="home-header d-block d-lg-none" >
  <div class="container">
    <div class="row">


      <div class="col-md-6">
      <h1>CREATORS <br> <span style="color:white;">that influence</span></h1>

      <p>Folks to agencja influencer marketingu na polskim rynku. Nasze działania są skierowane do twórców – zarówno makro i mikroinfluencerów, jak i do klientów poszukujących skutecznego sposobu komunikacji.
        </p>
      </div>
      <div class="col-md-6">
        <img
        src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-top.png"
        alt="Dołącz" width="95%"/>
        </div>
  </div>
  </div>
</div>
{{-- Section 2 rozpocznij  --}}
<div class="rozpocznij">
<div class="container">
  <div class="row text-center center-block justify-content-between">
    <div class="intro col-md-4 col-md-offset-2 firs-intro"><h3>Twórcy</h3>
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box1.png"
      alt="Komputer"/>
    <p>Znajdziemy dla Ciebie najlepszych Twórców i spełniających Twoje biznesowe i wizerunkowe oczekiwania.</p>
    </div>
    <div class="intro col-md-4 col-md-offset-2"><h3>Pomysł</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box2.png"
      alt="Komputer"/>
      <p>Dzięki nieszablonowemu myśleniu przeprowadzimy efektywną i angażującą kampanię!</p>
    </div>
    <div class="intro col-md-4"><h3>Realizacja</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box3.png"
      alt="Komputer"/>
      <p>Do zadań podchodzimy kompleksowo - zdejmujemy ciężar realizacji. </p>
    </div>
  </div>


</div>

<div class="text-center">

  <a class="btn-effect center" href="/jak-dzialamy" target="_self" rel="nofollow noopener">Rozpocznij</a>
</div>


</div>
<div class="tworcy">
<div class="container">

  <h2>Twórcy</h2>
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
       <span>{{$categoryitem}}</span>
  </div>
@endforeach

</div>
</a>
@endforeach



  <h3>{{$user -> data -> user_nicename}}  </h3>
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
        src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-jestestworca.png"
        alt="Jeseś twórcą"/>
         <h2> <span style="color:#385071;">Jesteś </span> <br> <span class="theme-orange-color">twórcą ?</span> </h2>

        </div>
      <p>Zapraszamy do współpracy wszystkich twórców internetowych, którzy poprzez działanie w mediach społecznościowych tworzą ciekawe i angażujące treści i chcą to wykorzystać przy współpracach marketingowych.
        Dołącz do naszej agencji klikając w przycisk poniżej.
      </p>
      <a class="btn-effect center" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do twórców</a>
      </div>
      <div class="info-box col-md-6 info-box-jestes-marka ">
        <div class="info-header">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-marka.png"
          alt="Jeseś twórcą"/>
        <h2><span style="color:#385071;">Jesteś marką i</span> <br> <span class="theme-orange-color">szukasz twórcy ?</span></h2>
        </div>
        <p >Jeśli potrzebujesz uatrakcyjnić działania marketingowe twojej firmy, zgłoś się do nas z zapytaniem o współpracę.  Razem ustalimy wspólne działania które pomogą dotrzeć do jak największej liczby potencjalnych klientów/odbiorców.</p>
      <a class="btn-effect center" href="/dolacz/#regise" target="_self" rel="nofollow noopener">Rozpocznij współpracę</a>
    </div>
    </div>
  </div>
</div>
</div>


@endsection
