<!-- Eventos -->
<?php
$eventos_query = new WP_Query( array(
    'p' => 136,
    'post_type' => 'eventos'
   ));
   while ( $eventos_query->have_posts()){
    $eventos_query->the_post(); ?>

<div class="container my-5">
    <div class="row mb-4">

        <div class="col-lg-6 d-flex align-items-center justify-content-center ">
            <img src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/home-eventos1.png"
                class="img-fluid img-shrink" alt="Image">
        </div>

        <div class="col-lg-6 align-items-center lh-lg fs-5 d-flex flex-column justify-content-center text-body-secondary order-first">

            <div class="row fs-4 text-secodary ms-2 my-2 align-self-start text-uppercase"><?php the_title();?></div>
            <div class="row fs-1 text-secodary mx-2">
                <div class="col  border-end border-dark-subtle" style="max-width:7%; height:85%"></div>
                <div class="col me-3 fs-1"><?php the_excerpt();?></div>
            </div>
            <div class="container">

                <div class="row lh-base ms-2"><?php the_content();?></div>
                <button class="btn align-self-start">
                    <span class="fs-4 fw-bold lh-base ">Saiba Mais</span>
                </button>
            </div>
        </div>

    </div>
</div>

<?php
   }
   wp_reset_postdata();
   ?>
