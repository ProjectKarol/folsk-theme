{{--
  Template Name: Home
--}}

@extends('layouts.app')



@section('content')
<div class="home-header" >
  <div class="container">
    <h1>CREATORS</h1>
    <H2>that influence</H2>
    <p>Folks to nowa agencja influenceru marketingu na polskim rynku.
      Nasze działania są skierowane do twórców – zarówno marko i mikroinfluencerów, jak i do klientów poszukujących nowego źródła komunikacji.
      </p>
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

  <a class="btn-effect center" href="add-website-here" target="_blank" rel="nofollow noopener">Rozpocznij</a>
</div>


</div>
<div class="tworcy">
@php
// WP_Query arguments
$args = array(
  'post_type' => 'tworcy',
);

// The Query
$query = new WP_Query( $args );
// The Loop
@endphp

@if ( $query->have_posts() )
<div class="gallery main-carousel">
	@while ( $query->have_posts() )
   @php $query->the_post(); @endphp

   <div class="gallery-cell">{{the_title()}}</div>



  @endwhile
</div>
 @else
   <p>nie znaleziono twóców</p>
@endif

@php
// Restore original Post Data
wp_reset_postdata();
@endphp

</div>


@endsection
