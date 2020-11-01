{{--
  Template Name: Riodzaj taksonomy
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="tworc-page">
    <div class="container">
    <h1 >{{single_cat_title('Obecnie przeglądasz: ')}}</h1>
      <div class="row">

@if (have_posts())

@while (have_posts())
{{the_post()}}
<div class="col-sm-4" >
  <a href="{{get_permalink()}}">

  <div class="image-conteanier" style=" background: url('{{get_the_post_thumbnail_url(get_the_ID(),'carouser_image')}}') no-repeat; background-size: cover;">
    <div class="image-contanier-bacground"></div>

@php
// global $post;
// $terms = wp_get_post_terms($post->ID, 'rodzaj');
// if ($terms) {
//     $output = array();
//     foreach ($terms as $term) {
//         $output[] = $term->name ;
//     }
//     vdump($output);
//     echo join( ', ', $output );
// }

 @endphp

@php global $post;
$terms = wp_get_post_terms($post->ID, 'rodzaj'); @endphp

@foreach ( $terms  as $kategoria )


  {{-- {{vdump($categoryitem )}} --}}
  <div class="category-box">
    <div class="box-item  {{$kategoria-> name}}">

    </div>
    {{$kategoria-> name}}

</div>


@endforeach

                {{-- {{vdump($categoryitem )}} --}}
                {{-- <div class="category-box">
                  <div class="box-item ">

                  </div>

              </div> --}}





  </div> <!-- image-conteanier-->

<h2>{{the_title()}}</h2>

    {{-- {{vdump( $user )}} --}}
    {{-- {{vdump(get_user_meta( $user -> ID  ))}} --}}
  </a>
</div> <!-- col-sm-4-->
@endwhile

@else

@endif

@php wp_reset_postdata(); @endphp


        {!! get_the_posts_navigation() !!}
      </div> <!-- row-->
    </div>  <!-- container -->
  </div> <!-- tworc-page -->
@endsection
