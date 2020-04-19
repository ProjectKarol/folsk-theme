{{--
  Template Name: Dolacz
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="dolocz-page">

  <div class="container" id="tab-content">
    <h1>Dołącz do Folks</h1>
    <!-- Nav pills -->
    <ul class="nav nav-pills" >
      <li class="nav-item-tab ">
        <a class="nav-link nav-item-tab-right active " data-toggle="pill" href="#login">Dołącz jako twórca</a>
      </li>
      <li class="nav-item-tab">
        <a class="nav-link nav-item-tab-left" id="znajdz-tworce" data-toggle="pill" href="#regis">Znajdź twórcę dla swojej marki</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        @if (is_user_logged_in())
        {{gravity_form( 6, false, false, false, '', true )}}
        @else
        {{gravity_form( 4, false, false, false, '', false )}}
        <hr>
        @php echo do_shortcode('[woo_social_login networks="googleplus,facebook"][/woo_social_login]'); @endphp
        <p>Masz już konto <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="false"><span>Zaloguj się</span></a></p>
        @endif

   {{-- {{gravity_form( 1, false, false, false, '', false )}} --}}
      </div>
      <div id="regis" class="container tab-pane">
        <div class="row">
          <div class="col-sm-4">
        <img
        src=" {{get_stylesheet_directory_uri()}}/assets/images/new/dolacz.png"
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

<script type="text/javascript">


// Javascript to enable link to tab
var url = document.location.toString();


function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
}
if(url.includes("#regise")){

  document.addEventListener('DOMContentLoaded', ()=>eventFire(document.getElementById('znajdz-tworce'), 'click'), false);
}



</script>

  {!! get_the_posts_navigation() !!}
@endsection
