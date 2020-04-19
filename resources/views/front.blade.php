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
          <h1 data-aos="zoom-in">CREATORS <br> <span style="color:white;">that influence</span></h1>

          <p data-aos="zoom-in">Folks to agencja influencer marketingu na polskim rynku. Nasze działania są skierowane do twórców – zarówno makro i mikroinfluencerów, jak i do klientów poszukujących skutecznego sposobu komunikacji.
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
      <h1 data-aos="zoom-in">CREATORS <br> <span style="color:white;">that influence</span></h1>

      <p data-aos="zoom-in">Folks to agencja influencer marketingu na polskim rynku. Nasze działania są skierowane do twórców – zarówno makro i mikroinfluencerów, jak i do klientów poszukujących skutecznego sposobu komunikacji.
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
    <div class="intro col-md-4 col-md-offset-2 firs-intro" data-aos="zoom-in"><h3>Twórcy</h3>
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box1.png"
      alt="Komputer"/>
    <p >Znajdziemy dla Ciebie najlepszych Twórców i spełniających Twoje biznesowe i wizerunkowe oczekiwania.</p>
    </div>
    <div class="intro col-md-4 col-md-offset-2" data-aos="zoom-in"><h3>Pomysł</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box2.png"
      alt="Komputer"/>
      <p>Dzięki nieszablonowemu myśleniu przeprowadzimy efektywną i angażującą kampanię!</p>
    </div>
    <div class="intro col-md-4" data-aos="zoom-in"><h3>Realizacja</h3>
      <img
      src="{{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-box3.png"
      alt="Komputer"/>
      <p>Do zadań podchodzimy kompleksowo - zdejmujemy ciężar realizacji. </p>
    </div>
  </div>


</div>

<div class="text-center">

  <a class="btn-effect center" href="/jak-dzialamy" target="_self" rel="nofollow noopener" data-aos="zoom-in">Dowiedz się więcej</a>
</div>


</div>
<div class="tworcy">
<div class="container" >

  <h2 data-aos="zoom-in">Twórcy</h2>
  @php
// WP_Query arguments
$args = array(
	'post_type'                   => 'influencerzy',
	'post_status'            => array( 'publish' ),
);

// The Query
$user_query = new WP_Query( $args );
// The Loop
@endphp
@if ($user_query->have_posts())
    <div class="gallery main-carousel" data-aos="zoom-in">

      @while( $user_query->have_posts() )
      {{$user_query->the_post()}}
    <a href="{{get_permalink()}}">

    <div class="gallery-cell" style="background-image: url('{{get_the_post_thumbnail_url(get_the_ID(),'carouser_image')}}'); background-size: cover;">

        <div class="icons-talens">
          @php global $post;

          $terms = wp_get_post_terms($post->ID, 'rodzaj'); @endphp
          @foreach ( $terms  as $kategoria )
          <div class="category-box">
            <div class="box-item {{$kategoria-> name}}">

            </div>
             <span>{{$kategoria-> name}}</span>
        </div>
        @endforeach

        </div> <!-- icons-talens -->

      <h3>{{the_title()}}  </h3>
    </a>
    </div> <!-- gallery-cell-->

    @endwhile
    </div> <!-- galerry main carousel -->
@else

@endif
@php
// The Loop
// if ( $query->have_posts() ) {
// 	while ( $query->have_posts() ) {
// 		$query->the_post();
//     // do something
//     echo "tets";
// 	}
// } else {
// 	// no posts found
// }

// Restore original Post Data
wp_reset_postdata();
@endphp
<div class="text-center" data-aos="zoom-in">

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
        alt="Jeseś twórcą" data-aos="zoom-in"/>
         <h2 data-aos="zoom-in"> <span style="color:#385071;">Jesteś </span> <br> <span class="theme-orange-color">twórcą ?</span> </h2>

        </div>
      <p data-aos="zoom-in">Zapraszamy do współpracy wszystkich twórców internetowych, którzy poprzez działanie w mediach społecznościowych tworzą ciekawe i angażujące treści i chcą to wykorzystać przy współpracach marketingowych.
        Dołącz do naszej agencji klikając w przycisk poniżej.
      </p>
      <a class="btn-effect center" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do twórców</a>
      </div>
      <div class="info-box col-md-6 info-box-jestes-marka ">
        <div class="info-header">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/new/strona-glowna-marka.png"
          alt="Jeseś twórcą" data-aos="zoom-in"/>
        <h2 data-aos="zoom-in"><span style="color:#385071;">Jesteś marką i</span> <br> <span class="theme-orange-color">szukasz twórcy ?</span></h2>
        </div>
        <p data-aos="zoom-in">Jeśli chcesz zaistnieć w social mediach i dotrzeć do swoich klientów przez nowoczesną formę komunikacji, napisz do nas i sprawdź nas - Folks oraz naszych twórców.</p>
      <a class="btn-effect center" href="/dolacz/#regise" target="_self" rel="nofollow noopener">Rozpocznij współpracę</a>
    </div>
    </div>
  </div>
</div>
</div>


@endsection
