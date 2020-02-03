<header class="banner">
  @include('partials/mobile-menu')
  <div class="container desktop-menu">
    <a class="brand" href="{{ home_url('/') }}">
      @if (is_front_page())
          <div class="home">
            <img
            class="logo-img"
            src="@php echo get_stylesheet_directory_uri(); @endphp/assets/images/logo-dark.png"
            alt="triangle with all three sides equal"
            height="30px"
            width="auto" />
          </div>
        @else
        <div class="home">
          <img
            src="@php echo get_stylesheet_directory_uri(); @endphp/assets/images/logo-dark.png"
            alt="triangle with all three sides equal"
            height="30px"
            width="auto" />
          </div>
      @endif




  </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {{ wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) }}
      @endif
      @include('partials/social-header')
    </nav>
  </div>


</header>
