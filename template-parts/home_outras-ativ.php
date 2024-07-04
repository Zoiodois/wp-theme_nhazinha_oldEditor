<!-- Outras Atividades -->

<?php
$outras_atv_query = new WP_Query( array(
    'p' => 137,
    'post_type' => 'outras_atividades',
    'posts_per_page' => -1

   ));
   while ( $outras_atv_query->have_posts()){
    $outras_atv_query->the_post(); ?>


<div class="container mb-4">

    <div class="row">

        <div class="col-sm-12 col-md-5 text-body-secondary">
            <div class="row fs-4 text-secodary ms-2 mt-2 mb-2 text-uppercase"><?php the_title();?></div>
            <div class="row fs-3 text-secodary mt-2 mb-4" style="letter-spacing: -1px;">
                <div class="col  border-end border-dark-subtle" style="max-width:7%"></div>
                <div class="col mr-1 display-3"><?php the_excerpt();?></div>
            </div>
            <div class="row m-3 p-3 ln-lg fs-5"><?php the_content();?></div>
        </div>

        <div class="col-sm-12 col-md-7 mt-4">

            <div class="row text-body-secondary">

                <div class="text-body-secondary card col col-lg-6 col-md-12 col-sm-12 no-outline">
                    <img class="card-img" style="width:100%"
                        src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/feno-img-04.webp"
                        alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title fs-2 fw-bold lh-md fc-white">Nutrição Animal</h5>
                        <p class="card-text">Produção de pré secado de azevém para nutrição Animal. Prestamos
                            serviço!
                        </p>
                        <button class="btn fs-5">Saiba Mais</button>
                    </div>
                </div>

                <div class="text-body-secondary card col-lg-6 col-md-12 col-sm-12 no-outline">
                    <img class="card-img" style="width:100%; outline:none;"
                        src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/home_agricultura.png"
                        alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title fs-2 fw-bold lh-md fc-white">Agricultura</h5>
                        <p class="card-text">Produção de aveia branca para consumo animal!</p>
                        <button class="btn fs-5">Saiba Mais</button>
                    </div>
                </div>



            </div>
        </div>




    </div>

</div>




<?php
   }
   wp_reset_postdata();
?>