@extends('layouts.app')

@section('content')
  @include('partials.page-header')
      @php
      $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
      $imagepath = (get_user_meta(  $curauth -> ID , 'slim_image_gf' ))[0];

      @endphp

  <div class="tworca-header">
      <div class="container">
       <a href="/tworcy" class="powrot"> <span class="theme-orange-color">&#10094;</span> <span>Powrót do Twórców</span></a> <br>

 {{-- {{vdump(    get_user_meta( $curauth -> ID  )  )}} --}}


            <div class="row">
              <div class="col-sm-4 author-header">
                {{the_post_thumbnail('carouser_image')}}
              </div>
              <div class="col-sm-8">
                <h1>{{ the_title()}}</h1>


                <p>{{get_field('krotki_opis')}}</p>

                  <h3>Kategorie Twórczości </h3>

                  <div class="category-area">
                    @php global $post;
                    $terms = wp_get_post_terms($post->ID, 'rodzaj'); @endphp
                    @foreach ( $terms  as $kategoria )
                    {{-- {{ ddd( $kategoria->slug )}} --}}
                  <a href='{{get_bloginfo('home')}}/rodzaj/{{$kategoria->slug }}'>
                    <div class="category-box">
                      <div class="box-item {{$kategoria-> name}}">
                      </div>
                       <span>{{$kategoria-> name}}</span>
                    </div>
                  </a>
                  @endforeach
                  </div>



              </div>
            </div><!-- row -->
      </div>

  </div>
  {{-- <iframe style="min-width: 100%;" src="http://folks.loc:3000/wp-content/plugins/react-plugin/widget/build"></iframe> --}}
  @php echo do_shortcode( "[erw_widget]") @endphp


  <section class="author-bio-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">


          <p> <?php echo get_post_field('post_content', $post->ID); ?></p>

        </div>
        <div class="col-md-4 social-media">

          <h2>Social Media</h2>

          <div class="social-links">
            @php
            $facebook = get_field('facebook');
            $linkfacebook = $facebook['facebook-acf'];
            @endphp
              {{-- @if (get_field('facebook-acf')) --}}
                  <a class="icon facebook" href="{{$linkfacebook}}" title="Facebook">
                    <div class="ir">
                        <svg viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
                            <path
                                d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z">
                            </path>
                        </svg>
                        <span>Facebook</span>
                    </div>
                </a>
              {{-- @endif --}}
               <!-- end social link -->

               @php $havefb = get_user_meta($curauth -> ID , 'social_profile_in', true); @endphp
               @php
               $instagram = get_field('instagram');
               $linkinstagram = $instagram['instagram-acf'];
               @endphp
               @if ($linkinstagram)
                   <a class="icon instagram" href="{{$linkinstagram}}" title="instagram">
                    <div class="ir">
                    <svg viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
                      <path
                          d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z">
                      </path>
                      <path
                          d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z">
                      </path>
                      <circle cx="351.5" cy="160.5" r="21.5"></circle>
                  </svg>
                         <span>Instagram</span>
                     </div>
                 </a>
               @endif
                <!-- end social link -->
               @php $havefb = get_user_meta($curauth -> ID , 'social_profile_yt', true); @endphp
               @php
               $youtube = get_field('youtube');
               $linkyoutube = $youtube['youtube-acf'];
               @endphp
               @if ($linkyoutube	)
                   <a class="icon facebook" href="{{$linkyoutube}}" title="Youtube">
                     <div class="ir">
                      <svg viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M422.6 193.6c-5.3-45.3-23.3-51.6-59-54 -50.8-3.5-164.3-3.5-215.1 0 -35.7 2.4-53.7 8.7-59 54 -4 33.6-4 91.1 0 124.8 5.3 45.3 23.3 51.6 59 54 50.9 3.5 164.3 3.5 215.1 0 35.7-2.4 53.7-8.7 59-54C426.6 284.8 426.6 227.3 422.6 193.6zM222.2 303.4v-94.6l90.7 47.3L222.2 303.4z">
                        </path>
                    </svg>
                         <span>YouTube</span>
                     </div>
                 </a>
               @endif
                <!-- end social link -->
               @php $havefb = get_user_meta($curauth -> ID , 'social_profile_sn', true); @endphp
               @php
               $snapchat = get_field('snapchat');
               $linksnapchat = $snapchat['snapchat-acf'];
               @endphp
               @if ($linksnapchat)
                   <a class="icon facebook" href="{{$linksnapchat}}" title="SnapChat">
                     <div class="ir">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.829 4.533c-.6 1.344-.363 3.752-.267 5.436-.648.359-1.48-.271-1.951-.271-.49 0-1.075.322-1.167.802-.066.346.089.85 1.201 1.289.43.17 1.453.37 1.69.928.333.784-1.71 4.403-4.918 4.931-.251.041-.43.265-.416.519.056.975 2.242 1.357 3.211 1.507.099.134.179.7.306 1.131.057.193.204.424.582.424.493 0 1.312-.38 2.738-.144 1.398.233 2.712 2.215 5.235 2.215 2.345 0 3.744-1.991 5.09-2.215.779-.129 1.448-.088 2.196.058.515.101.977.157 1.124-.349.129-.437.208-.992.305-1.123.96-.149 3.156-.53 3.211-1.505.014-.254-.165-.477-.416-.519-3.154-.52-5.259-4.128-4.918-4.931.236-.557 1.252-.755 1.69-.928.814-.321 1.222-.716 1.213-1.173-.011-.585-.715-.934-1.233-.934-.527 0-1.284.624-1.897.286.096-1.698.332-4.095-.267-5.438-1.135-2.543-3.66-3.829-6.184-3.829-2.508 0-5.014 1.268-6.158 3.833z" /></svg>
                         <span>SnapChat</span>
                     </div>
                 </a>
               @endif

                <!-- end social link -->
               @php $havefb = get_user_meta($curauth -> ID , 'social_profile_tw', true); @endphp
               @php
               $twitter = get_field('twitter');
               $linktwitter = $twitter['twitter-acf'];
               @endphp
               @if ($linktwitte))
                   <a class="icon twitter" href="{{$linktwitter}}" title="Twitter">
                     <div class="ir">
                      <svg viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z">
                        </path>
                    </svg>
                         <span>Twitter</span>
                     </div>
                 </a>
               @endif

                <!-- end social link -->
               @php $havefb = get_user_meta($curauth -> ID , 'social_profile_ln', true); @endphp
               @php
                   $linkedind = get_field('linkedin');
               @endphp
               @php $linkLindedIn = $linkedind['linkedin-acf'] @endphp
               @php $havefb = get_user_meta($curauth -> ID , $linkedind['social_profile_ln'], true); @endphp
               @if ($linkLindedIn)
                   <a class="icon linked-in" href="{{$linkLindedIn}}" title="LinkdeIn">
                     <div class="ir">
                      <svg xmlns="http://www.w3.org/2000/svg"  viewBox="-5 -2 35 35"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                         <span>LinkedIn</span>
                     </div>
                 </a>
               @endif
                <!-- end social link -->

          </div>

        </div>
      </div>
    </div>
  </section>










  {!! get_the_posts_navigation() !!}
@endsection
