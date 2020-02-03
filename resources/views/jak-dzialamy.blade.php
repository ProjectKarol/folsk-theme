{{--
  Template Name: Jak działamy
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="jak-dzialamy-page">
    <img
    class="image-corner d-none d-lg-block"
    src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy-top.png"
    alt="jak działamy"/>

  <div class="container">
    <div class="row">
      <div class="col-md-6 jak-dzialamy-intro">
        <h1>Jak <span>działamy</span></h1>
        <p>Folsk stawia na bezpośrednie relacje z Twórcami działającymi w Internecie. Każda osoba, przynależąca do Folks jest odpowiednio weryfikowana - nie tylko pod kątem generowanych zasięgów , ale również prowadzonej
          komunikacji, spójności z marką i jej wartościami.
        </p>
        <img
        class="corner-image-mobile d-block d-lg-none"
        src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy-top.png"
        alt="jak działamy"/>
      </div>

    </div>


    <h2>Etapy współpracy</h2>
    {{-- section destop  d-none d-lg-block --}}
    <div class="etapy-wspolpracy d-none d-lg-block ">
      <div class="row">
        <div class="col-sm-4">
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy1.png"
      alt="Dołącz"/>
        </div>
        <div class="col-sm-8 znajdz-toworce-opis">
          <h3><span>1.</span> Identyfikacja potrzeb Klienta</h3>
      <p style=" font-size:18px;"> W pierwszym etapie działań ustalane są główne cele biznesowo - wizerunkowe Klienta, których realizacja jest możliwa dzięki wsparciu wpływowych Twórców. Określane są potrzeby i możliwości
        Klienta, weryfikowana i udoskonalana jest oferta, jaką Klient kieruje do Twórców. Etap pierwszy kończy się przygotowaniem rekomendacji wyselekcjonowanych profili osób Klientów i jednoczesnej prezentacji benefitów
        współpracy  obydwu zainteresowanym stronom. </p>
        <img
        src=" {{get_stylesheet_directory_uri()}}/assets/images/jak-dzialamy-kierunek.jpg"
        alt="kierunek"/>
        </div>

        <div class="col-sm-8 znajdz-toworce-opis">
          <h3><span>2.</span> Selekcja Twórców</h3>
      <p style=" font-size:18px;"> Identyfikacja Twórców i potwierdzenie zainteresowania współpracą z Klientem – to kluczowy etap działań prowadzonych w Folks. Twórcy otrzymują informacje uzupełniające poznają składowe planowanej kampanii, przedstawiają swoje warunki, w tym również dostępność czasową i oczekiwania wobec projektu.
         W ramach etapu drugiego – Klient uzyskuje potwierdzoną listę Twórców chcących uczestniczyć we wspólnej kampanii – celem finalnej weryfikacji i akceptacji.
      </p>
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/jak-dzialamy-kierunek-right.jpg" style="margin-left:40%;"
      alt="kierunek"/>
        </div>

        <div class="col-sm-4">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy2.png"
          alt="Dołącz"/>
            </div>
        <div class="col-sm-4">
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy3.png"
      alt="Dołącz"/>
        </div>
        <div class="col-sm-8 znajdz-toworce-opis">
          <h3><span>3.</span> Kontakt i negocjacje</h3>
      <p style=" font-size:18px;"> Po potwierdzeniu listy Twórców – Folks finalizuje ustalenia, negocjuje warunki umów, potwierdza ustalenia i założenia projektowe.
        Na tym etapie w przypadku rezygnacji ze współpracy po stronie Twórcy. Klient otrzymuje rekomendację kolejnej osoby pasującej do kampanii.
      </p>

      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/jak-dzialamy-kierunek.jpg"
      alt="kierunek"/>
        </div>

        <div class="col-sm-8 znajdz-toworce-opis">
          <h3><span>4.</span> Monitorowanie i opieka</h3>
      <p style=" font-size:18px;"> Uruchomienie kampanii, pomiar jej efektów, stały kontakt z Klientem i Twórcami -to wszystko Folks podsumowuje w ramach sumarycznego raportu, dbając o jak najdokładniejszą analitykę kampanii.
      </p>
        </div>

        <div class="col-sm-4">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy4.png"
          alt="Dołącz"/>
            </div>

            <a class="btn-effect center" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do nas</a>
      </div>
    </div>
    {{-- section mobile d-block d-lg-none  --}}
    <div class="etapy-wspolpracy mobile-size d-block d-lg-none">
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="col-9">
              <h3><span>1.</span> Identyfikacja potrzeb Klienta</h3>
            </div>
            <div class="col-3">
              <img src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy1.png" alt="Dołącz"/>
            </div>
          </div>

        </div>
        <div class="col-sm-8 znajdz-toworce-opis">

      <p style=" font-size:18px;"> W pierwszym etapie działań ustalane są główne cele biznesowo - wizerunkowe Klienta, których realizacja jest możliwa dzięki wsparciu wpływowych Twórców. Określane są potrzeby i możliwości
        Klienta, weryfikowana i udoskonalana jest oferta, jaką Klient kieruje do Twórców. Etap pierwszy kończy się przygotowaniem rekomendacji wyselekcjonowanych profili osób Klientów i jednoczesnej prezentacji benefitów
        współpracy  obydwu zainteresowanym stronom. </p>
        </div>

        <div class="col-sm-8 znajdz-toworce-opis">
          <div class="row">
            <div class="col-9">
              <h3><span>2.</span> Selekcja Twórców</h3>
            </div>
            <div class="col-3">
              <img src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy2.png" alt="Dołącz"/>
            </div>
          </div>

      <p style=" font-size:18px;"> Identyfikacja Twórców i potwierdzenie zainteresowania współpracą z Klientem – to kluczowy etap działań prowadzonych w Folks. Twórcy otrzymują informacje uzupełniające poznają składowe planowanej kampanii, przedstawiają swoje warunki, w tym również dostępność czasową i oczekiwania wobec projektu.
         W ramach etapu drugiego – Klient uzyskuje potwierdzoną listę Twórców chcących uczestniczyć we wspólnej kampanii – celem finalnej weryfikacji i akceptacji.
      </p>
        </div>


        <div class="col-sm-8 znajdz-toworce-opis">
          <div class="row">
            <div class="col-9">
              <h3><span>3.</span> Kontakt i negocjacje</h3>
            </div>
            <div class="col-3">
              <img src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy2.png" alt="Dołącz"/>
            </div>
          </div>

      <p style=" font-size:18px;"> Po potwierdzeniu listy Twórców – Folks finalizuje ustalenia, negocjuje warunki umów, potwierdza ustalenia i założenia projektowe.
        Na tym etapie w przypadku rezygnacji ze współpracy po stronie Twórcy. Klient otrzymuje rekomendację kolejnej osoby pasującej do kampanii.
      </p>

        </div>

        <div class="col-sm-8 znajdz-toworce-opis">
          <div class="row">
            <div class="col-9">
              <h3><span>4.</span> Monitorowanie<br> i opieka</h3>
            </div>
            <div class="col-3">
              <img src=" {{get_stylesheet_directory_uri()}}/assets/images/new/jak-dzialamy4.png" alt="Dołącz"/>
            </div>
          </div>

      <p style=" font-size:18px;"> Uruchomienie kampanii, pomiar jej efektów, stały kontakt z Klientem i Twórcami -to wszystko Folks podsumowuje w ramach sumarycznego raportu, dbając o jak najdokładniejszą analitykę kampanii.
      </p>
        </div>


            <a class="btn-effect center" style="max-width:95%" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do nas</a>
      </div>
    </div>

</div>

  {!! get_the_posts_navigation() !!}
@endsection
