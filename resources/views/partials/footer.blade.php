<footer class="content-info">
    <div class="container">
        @php dynamic_sidebar('sidebar-footer') @endphp
        <div class="footer-bottonm">

            @php
            wp_nav_menu( array(
            'menu' => 'footer',
            ) )
            @endphp
            @include('partials/social')

        </div>
    </div>
    </div>
</footer>
<div class='socked-area'>
    <div class="container">
        <span>&copy; 2019 – <?php echo date('Y'); ?> Folks. All Right Reserved.</span><span>Folks is a part of a
            group <img
                src="@php echo get_stylesheet_directory_uri(); @endphp/assets/images/logogoodone-group-white-200.png"
                alt="Good-one-group-logo" height='30px' widht='auto'> </span>
    </div>
</div>
