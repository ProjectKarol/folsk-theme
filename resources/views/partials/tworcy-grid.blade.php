  <div class="tworc-page">
    <div class="container">
      <h1 >Twórcy</h1>
      <div class="row">


          @php

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          // WP_User_Query arguments
          $args = array (
            'post_type'              => array( 'influencerzy' ),
            'post_status'            => array( 'publish' ),
            // 'nopaging'               => true,
            'order'                  => 'ASC',
            'orderby'                => 'menu_order',
            'posts_per_page' => 12, // post per page
            'paged' => $paged,
          );



// The Query
$services = new WP_Query( $args );


@endphp

@if ($services->have_posts())

@while ($services->have_posts())
{{$services->the_post()}}
<div class="col-sm-12 col-md-6 col-lg-4" >
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
<div class="pagination-tworcy">
@php
  $total_pages = $services->max_num_pages;

if ($total_pages > 1){

    $current_page = max(1, get_query_var('paged'));

    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'    => __('« Poprzednia'),
        'next_text'    => __('Następna »'),
    ));
}
@endphp
</div>
@else

@endif

@php wp_reset_postdata(); @endphp



      </div> <!-- row-->
    </div>  <!-- container -->
  </div> <!-- tworc-page -->
