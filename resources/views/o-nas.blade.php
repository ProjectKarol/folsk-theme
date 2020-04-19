{{--
  Template Name: O nas
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="o-nas-page">


  <div class="container">


    <h1 data-aos="zoom-in">O nas</h1>
     {{-- section destop  d-none d-lg-block --}}
    <div class="etapy-wspolpracy d-none d-lg-block">
      <div class="row align-items-center">
            <div class="col-sm-8 znajdz-toworce-opis">

              <p style=" font-size:18px;" data-aos="zoom-in"> Folks łączy Twórców, którzy swoją pasję, wiedzę, pracę i styl życia zdobyli uznanie społeczności internetowej. Twórcy za pośrednictwem  kanałów w social mediach takich jak: Instagram, Facebook, Twitter, TikTok, YouTube czy własna strona www –
                nieustannie dzielą się swoim życiem  prywatnym i zawodowym, inspirując innych do poznawania świata, rozwoju osobistego i podejmowania wyzwań. </p>
                </div>
                <div class="col-sm-4">
              <img
              src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas1.png"
              alt="O nas img" data-aos="zoom-in"/>
            </div>


            <div class="col-sm-4">
              <img
              src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas2.png"
              alt="O nas img" data-aos="zoom-in"/>
            </div>
            <div class="col-sm-8 znajdz-toworce-opis">

              <p style=" font-size:18px;" data-aos="zoom-in"> Nie bez powodu osoby reprezentowane przez Folks nazywane są Twórcami. Dbają o tworzenie treści, które nieustannie budują ich kapitał społeczny i autorytet wśród obserwujących i słuchaczy. To wszystko sprawia, że stają się osobami wpływającymi na zachowanie swoich odbiorców. Folks to ludzie kreatywni, pełni pasji – definiowani nie przez swoją użyteczność marketingową, ale poprzez unikatowe treści z którymi identyfikują się ich widzowie. </p>
                </div>




                <div class="col-sm-8 znajdz-toworce-opis">

                  <p style=" font-size:18px;" data-aos="zoom-in"> Folks stoi na straży przemyślanej selekcji Twórców, dbając o to by właściwie odzwierciedlali tożsamość marki Klienta i spełniali oczekiwania grupy docelowej. Zadaniem platformy Folks jest współtworzenie efektywnej biznesowo komunikacji i kampanii w mediach społecznościowych poprzez właściwą koordynację działań prowadzonych z Twórcami. </p>
                    </div>
                    <div class="col-sm-4">
                  <img
                  src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas3.png"
                  alt="O nas img" data-aos="zoom-in"/>
                </div>



            <a class="btn-effect mx-auto" href="/dolacz/" target="_self" rel="nofollow noopener" data-aos="zoom-in">Dołącz do nas</a>
      </div>
    </div>
     {{-- section mobile d-block d-lg-none  --}}

     <div class="etapy-wspolpracy d-block d-lg-none">
      <div class="row align-items-center">
            <div class="col-sm-8 znajdz-toworce-opis">

              <p style=" font-size:18px;" data-aos="zoom-in"> Folks łączy Twórców, którzy swoją pasję, wiedzę, pracę i styl życia zdobyli uznanie społeczności internetowej. Twórcy za pośrednictwem  kanałów w social mediach takich jak: Instagram, Facebook, Twitter, TikTok, YouTube czy własna strona www –
                nieustannie dzielą się swoim życiem  prywatnym i zawodowym, inspirując innych do poznawania świata, rozwoju osobistego i podejmowania wyzwań. </p>
                </div>
                <div class="col-sm-4">
              <img
              src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas1.png"
              alt="O nas img" data-aos="zoom-in"/>
            </div>


            <div class="col-sm-8 znajdz-toworce-opis">

              <p style=" font-size:18px;" data-aos="zoom-in">
                <br><br>Nie bez powodu osoby reprezentowane przez Folks nazywane są Twórcami. Dbają o tworzenie treści, które nieustannie budują ich kapitał społeczny i autorytet wśród obserwujących i słuchaczy. To wszystko sprawia, że stają się osobami wpływającymi na zachowanie swoich odbiorców. Folks to ludzie kreatywni, pełni pasji – definiowani nie przez swoją użyteczność marketingową, ale poprzez unikatowe treści z którymi identyfikują się ich widzowie. </p>
                </div>
                <div class="col-sm-4">
                  <img
                  src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas2.png"
                  alt="O nas img" data-aos="zoom-in"/>
                </div>



                <div class="col-sm-8 znajdz-toworce-opis">

                  <p style=" font-size:18px;" data-aos="zoom-in"><br><br> Folks stoi na straży przemyślanej selekcji Twórców, dbając o to by właściwie odzwierciedlali tożsamość marki Klienta i spełniali oczekiwania grupy docelowej. Zadaniem platformy Folks jest współtworzenie efektywnej biznesowo komunikacji i kampanii w mediach społecznościowych poprzez właściwą koordynację działań prowadzonych z Twórcami. </p>
                    </div>
                    <div class="col-sm-4">
                  <img
                  src=" {{get_stylesheet_directory_uri()}}/assets/images/new/o-nas3.png"
                  alt="O nas img" data-aos="zoom-in"/>
                </div>



            <a class="btn-effect mx-auto" style="max-width:95%;" href="/dolacz/" target="_self" rel="nofollow noopener" data-aos="zoom-in">Dołącz do nas</a>
      </div>
    </div>

</div>

  {!! get_the_posts_navigation() !!}
@endsection
