{{--
  Template Name: Default Page
--}}


@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="dolocz-page">
    <div class="container">
      <br>
      <h2>{{the_title()}}</h2>
      <br>
      <div class="row">

        {{the_content()}}
<br>
      </div>
      </div>

    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
