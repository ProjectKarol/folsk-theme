<div class="mobile-menu">
  @if (is_front_page())
  <div class="home">
   <a href="/"> <img
    class="logo-img"
    src="{{get_stylesheet_directory_uri() }}/assets/images/logo-dark.png"
    alt="triangle with all three sides equal"
    height="30px"
    width="auto" /></a>
  </div>
@else
<div class="home">
  <a href="/">  <img
    src="{{get_stylesheet_directory_uri() }}/assets/images/logo-dark.png"
    alt="triangle with all three sides equal"
    height="30px"
    width="auto" /> </a>
  </div>
@endif
  <div id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>

</div>
<div id="content-mobile">
  <nav class="nav-primary-mobile">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-menu']) !!}
    @endif
    @include('partials/social-header-mobile')
  </nav>
</div>


