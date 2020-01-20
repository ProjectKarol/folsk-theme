{{--
  Template Name: Jak działamy
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="jak-dzialamy-page">
    <img
    class="image-corner"
    src=" {{get_stylesheet_directory_uri()}}/assets/images/jak-dzialamy-corner-picture.png"
    alt="jak działamy"/>

  <div class="container">
    <div class="row">
      <div class="col-md-6 jak-dzialamy-intro">
        <h1>Jak działamy</h1>
        <p>Folsk stawia na bezpośrednie relacje z Twórcami działającymi w Internecie. Każda osoba, przynależąca do Folks jest odpowiednio weryfikowana - nie tylko pod kątem generowanych zasięgów , ale również prowadzonej
          komunikacji, spójności z marką i jej wartościami.
        </p>

      </div>

    </div>


    <h2>Etapy współpracy</h2>
    <div class="etapy-wspolpracy">
      <div class="row">
        <div class="col-sm-4">
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/dolacz2-image.jpg"
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
      src=" {{get_stylesheet_directory_uri()}}/assets/images/jak-dzialamy-kierunek-right.jpg"
      alt="kierunek"/>
        </div>

        <div class="col-sm-4">
          <img
          src=" {{get_stylesheet_directory_uri()}}/assets/images/dolacz2-image.jpg"
          alt="Dołącz"/>
            </div>
        <div class="col-sm-4">
      <img
      src=" {{get_stylesheet_directory_uri()}}/assets/images/dolacz2-image.jpg"
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
          src=" {{get_stylesheet_directory_uri()}}/assets/images/dolacz2-image.jpg"
          alt="Dołącz"/>
            </div>

            <a class="btn-effect center" href="/dolacz/" target="_self" rel="nofollow noopener">Dołącz do nas</a>
      </div>
    </div>

</div>

  {!! get_the_posts_navigation() !!}
@endsection
