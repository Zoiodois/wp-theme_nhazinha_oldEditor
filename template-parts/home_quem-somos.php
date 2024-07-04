<!--
<style>
@media (max-width: 768px) {
    .img-shrink {
        height: 300px;
    }
}
</style>
-->

<!-- Quem Somos -->
<?php 
    $blog_info_query = new WP_Query( array(
    'page_id' => 110
   ));
   while ( $blog_info_query->have_posts()){
    $blog_info_query->the_post(); ?>

<div class="container my-5 text-body-secondary container-fluid">
    <!-- Titulo e Subtitulo -->
    <div class="row fs-3 text-secodary ms-2 mt-2 mb-2"><?php the_title();?></div>
    <div class="row fs-1 text-secodary mt-2 mb-2">
        <div class="col border-end border-dark-subtle" style="max-width:7%; height: 3,5rem;">
        </div>
        <div class="col mr-1">Aqui é Diferenciado
        </div>
    </div>
</div>

<!-- Primeira linha com 2 colunas -->
<div class="container-fluid text-body-secondary">

    <div class="row justify-content-center mb-5">

        <div class="col-md-6 lh-lg fs-5 my-5 d-flex flex-column align-items-center justify-content-center">
            <div class="row text-center px-4">
                <?php the_content();?>
            </div>
            <div class="row d-flex align-self-center" style="width:80%">
                <img src=<?php the_field('foto3');?> alt="Image">
            </div>
        </div>

        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
            <img src="<?php the_post_thumbnail_url('full');?>" class="img-fluid img-shrink">
        </div>
    </div>
</div>


<!-- Segundo Titulo -->
<div class="container my-5 mx-3">

    <div class="row fs-1">
        <a href="#" class="link-body-emphasis link-underline-opacity-0 link-underline-opacity-75-hover">

            <div class="col mr-1"><?php the_field('subtitulo');?>
        </a>
    </div>
</div>
</div>


<!-- Segunda linha com 2 colunas-->
<div class="container-fluid text-body-secondary">
    <div class="row">

        <div class="col-md-7 col-sm-12 d-flex align-items-center justify-content-center">
            <img src=<?php the_field('foto2');?> class="my-3 img-fluid img-shrink" alt="Image">
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="row d-flex align-items-center justify-content-center">
                <img src=<?php the_field('foto1');?> class="my-3 img-fluid img-shrink order-last" style="width:85%"
                    alt="Image">
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="my-3 lh-lg fs-5 row text-center order-first" style="width:95%">

                    <?php the_field('texto_1');?>
                    <?php the_field('texto2');?>
                    <?php the_field('texto3');?>

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