<!-- Cavalos -->
<?php 
    $cavalos_query = new WP_Query( array(
    'p' => 129,
    'post_type' => 'cavalos'
   ));
   while ( $cavalos_query->have_posts()){
    $cavalos_query->the_post(); ?>
<!-- Titulos-->

<div class="container my-5 text-body-secondary">
    <!-- Titulo e Subtitulo -->
    <div class="row fs-3 text-secodary ms-2 my-2">Cavalos</div>
    <div class="row fs-1 text-secodary my-2">
        <div class="col border-end border-dark-subtle" style="max-width:7%; height: 3,5rem;">
        </div>
        <div class="col mr-1">Tecnologias Genéticas
        </div>
    </div>
</div>




<div class="container my-5 text-body-secondary">
    <!-- Post-->
    <div class="row fs-3 text-secodary mt-2 mb-2">
        <div class="col col-md-6 offset-md-3"><?php the_excerpt();?></div>
    </div>
    <div class="row">
        <div class="col col-md-6 offset-md-3 d-flex align-items-center lh-lg fs-6">
            <div class="content-box">
                <?php the_content();?>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column justify-content-center align-items-center text-center mb-4">

        <button type="button" href="#" class="btn btn-outline-secondary" style="width:20%">Saiba Mais</button>
    </div>

    <!-- Banner-->
    <div class="row border-bottom border-secondary border-2 mb-5">
        <div class="col-md-12 mb-5">
            <img src='http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalo_homepage.png' class="img-fluid"
                alt="Image">
        </div>
    </div>

</div>

<?php
   }
   wp_reset_postdata();
   ?>