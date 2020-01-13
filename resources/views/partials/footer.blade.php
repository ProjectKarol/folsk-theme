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
              group <img src="{{get_stylesheet_directory_uri() }}/assets/images/logogoodone-group-white-200.png"
                  alt="Good-one-group-logo" height='30px' widht='auto'> </span>
          </div>

      </div>

    </div>
</div>
