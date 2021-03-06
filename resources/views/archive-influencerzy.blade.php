@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @php
    $user = wp_get_current_user();
    $allowed_roles = ['administrator', 'editor'];
    @endphp
    @if (array_intersect($allowed_roles, $user->roles))

        <div class="tworc-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3  bg-light" id="sticky-sidebar">
                        <div class="nav flex-column flex-nowrap overflow-scroll  p-2">
                            @include('partials.sidebar')
                            <button onclick="FWP.reset()">Reset</button>
                        </div>
                    </div>



                    <div class="col-9" id="main">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h2 class="h3">Dashboard</h2>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <span>{!! facetwp_display('sort') !!} </span>

                                </div>

                            </div>
                        </div>

                        <div class="row">



                            @if (!have_posts())
                                <div class="alert alert-warning">
                                    {{ __('Sorry, no results were found.', 'sage') }}
                                </div>
                                {!! get_search_form(false) !!}
                            @endif

                            @while (have_posts()) @php the_post() @endphp

                                {{-- @include('partials.content-'.get_post_type()) --}}

                                @include('partials.tworcy-search-grid')

                            @endwhile


                            <div class="col-9 offset-3" id="main">


                            </div>
                        </div>
                    </div>
                    {!! get_the_posts_navigation() !!}
                </div>

            @else
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <h1> Nie masz uprawnień do przeglądania tej strony</h1>
                </div>

    @endif
@endsection
