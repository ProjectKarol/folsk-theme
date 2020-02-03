<footer class="content-info">
    <div class="container">
        @php dynamic_sidebar('sidebar-footer') @endphp
        <div class="footer-bottonm">
          <div class="row  align-items-center justify-content-between">
            <div class="col-md-6">
              @php
              wp_nav_menu( array(
              'menu' => 'footer',
              ) )
              @endphp
            </div>
            <div class="col-md-6">
              @include('partials/social')
            </div>


          </div>
        </div>
    </div>
    </div>
</footer>
<div class='socked-area'>
    <div class="container">
      <div class="row">
          <div class="col-md-6 mobilie-justyfy">
            <span>&copy; 2019 – <?php echo date('Y'); ?> Folks. All Right Reserved.</span>
          </div>
          <div class="col-md-6 fols-part mobilie-justyfy">
            <span>Folks is a part of a
              group <a href="http://www.goodone.co/" target="_blank" ><img src="{{get_stylesheet_directory_uri() }}/assets/images/logo-goodone.png"
                  alt="Good-one-group-logo" height='auto' width='140px'></a> </span>
          </div>

      </div>

    </div>
</div>



                    <!-- Modal -->
                    <div class="modal fade" id="myModal-mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  data-backdrop="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            @if (is_user_logged_in())
                          <h5 class="modal-title" id="exampleModalLabel">Witaj, {{wp_get_current_user() -> data -> display_name}}</h5>
                            @else
                            <h5 class="modal-title" id="exampleModalLabel">Logowanie</h5>
                            @endif
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            @if ( function_exists( 'login_with_ajax' ))
                            {{login_with_ajax() }}
                            @endif

                            <hr>
                            @php echo do_shortcode('[woo_social_login networks="googleplus,facebook"][/woo_social_login]'); @endphp
                            @if (is_user_logged_in())
                            <a id="wp-logout" href="<?php echo wp_logout_url() ?>">Wyloguj się</a><br />
                              @else
                              <p>Nie masz jeszcze konta? <a href="/dolacz/">Zarejestruj się jako twórca!</a></p>
                              @endif
                          </div>

                        </div>
                      </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">

                            @if (is_user_logged_in())
                          <h5 class="modal-title" id="exampleModalLabel">Witaj, {{wp_get_current_user() -> data -> display_name}}</h5>
                            @else
                            <h5 class="modal-title" id="exampleModalLabel">Logowanie</h5>
                            @endif
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            @if ( function_exists( 'login_with_ajax' ))

                            {{login_with_ajax() }}
                            @endif
                            <hr>
                            @php echo do_shortcode('[woo_social_login networks="googleplus,facebook"][/woo_social_login]'); @endphp
                            @if (is_user_logged_in())

                            <a id="wp-logout" href="<?php echo wp_logout_url() ?>">  <button class="btn-effect center">Wyloguj się</button></a><br />
                              @else
                              <p>Nie masz jeszcze konta? <a href="/dolacz/">Zarejestruj się jako twórca!</a></p>
                              @endif



                          </div>

                        </div>
                      </div>
                    </div>
