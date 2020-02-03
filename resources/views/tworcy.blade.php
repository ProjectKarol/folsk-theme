{{--
  Template Name: Twórcy
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="tworc-page">
    <div class="container">
      <h1 >Twórcy</h1>
      <div class="row">


          @php
          // WP_User_Query arguments
          $args = array(
            'role'           => 'Author',
            'orderby'        => 'post_count',
          );

          // The User Query
          $user_query = new WP_User_Query( $args );

        @endphp

          @if ( ! empty( $user_query->results ) )
            @foreach ( $user_query->results as $user )
                @foreach ( get_user_meta( $user -> ID , 'slim_image_gf' ) as $userAvatar )

                  <div class="col-sm-4" >
                    <a href="/author/{{ $user -> data -> user_nicename}}">
                  <div class="image-conteanier" style=" background: url('{{$userAvatar}}') no-repeat;">
                @endforeach


                          @foreach ( get_user_meta( $user -> ID , 'kategorie_tworczosci_gf' ) as $kategoria )
                                @php $kategoriearray = explode( ',', $kategoria ) @endphp
                              @foreach ($kategoriearray as $categoryitem)
                                  {{-- {{vdump($categoryitem )}} --}}
                                  <div class="category-box">
                                    <div class="box-item {{$categoryitem}}">

                                    </div>
                                    {{$categoryitem}}
                                </div>
                              @endforeach

                          @endforeach


                    </div> <!-- image-conteanier-->
                      <h2>{{$user -> data -> user_nicename}}</h2>

                      {{-- {{vdump( $user )}} --}}
                      {{-- {{vdump(get_user_meta( $user -> ID  ))}} --}}
                    </a>
              </div> <!-- col-sm-4-->

            @endforeach
              @else
              <h2>no users</h2>
          @endif




        {!! get_the_posts_navigation() !!}
      </div> <!-- row-->
    </div>  <!-- container -->
  </div> <!-- tworc-page -->
@endsection
