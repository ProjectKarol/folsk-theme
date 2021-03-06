<div class="col-sm-12 col-md-6 col-lg-4">
    <a href="{{ get_permalink() }}">

        <div class="image-conteanier"
            style=" background: url('{{ get_the_post_thumbnail_url(get_the_ID(), 'carouser_image') }}') no-repeat; background-size: cover;">
            <div class="image-contanier-bacground"></div>

            @php
                global $post;
                $terms = wp_get_post_terms($post->ID, 'rodzaj');
            @endphp

            @foreach ($terms as $kategoria)

                <div class="category-box">
                    <div class="box-item  {{ $kategoria->name }}">

                    </div>
                    {{ $kategoria->name }}

                </div>

            @endforeach

        </div> <!-- image-conteanier-->

        <h2>{{ the_title() }}</h2>
    </a>
</div> <!-- col-sm-4-->
