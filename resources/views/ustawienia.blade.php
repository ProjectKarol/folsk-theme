{{--
  Template Name: Ustawienia
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="dolocz-page">

  <div class="container" id="tab-content">
    <h1>Edytuj swoj dane</h1>
    <!-- Nav pills -->


    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        @if (is_user_logged_in())
        {{gravity_form( 5, false, false, false, '', true )}}
        @else
        {{gravity_form( 4, false, false, false, '', false )}}
        <hr>
        @php echo do_shortcode('[woo_social_login networks="googleplus,facebook"][/woo_social_login]'); @endphp
        <p>Masz ju konto <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="false"><span>Zaloguj się</span></a></p>
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
        <p style="font-weight:bold; color:##2b3050;">Napisz na <span style="color:#ff6251 ;"><a href="mailto:kontakt@folks.pl">kontakt@folks.pl</a></span> i sprawdź co potrafimy</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  {!! get_the_posts_navigation() !!}
@endsection
