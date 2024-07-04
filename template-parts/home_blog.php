<!-- Bog -->

<div class="container my-5">
    <div class="row fs-4 text-secodary ms-2 my-2 text-body-secondary text-uppercase">Blog</div>
    <div class="row fs-1 text-secodary mt-2 mb-4">
        <div class="col  border-end border-dark-subtle" style="max-width:7%"></div>
        <div class="col mr-1 h-3 text-body-secondary text-center">Acompanhe as nossas ultimas notícias</div>
    </div>
</div>
<?php
$blog_query = new WP_Query( array(
        'post_type' => 'blog',
        'posts_per_page' => 3
   ));

   if ( $blog_query->have_posts()) :
    $blog_query->the_post(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7 col-sm-12 mb-1">
            <div class="container">

                <img class="img-fluid" alt="Image" src="<?php the_post_thumbnail_url();?>">

                <div class="row text-uppercase ms-1 m-0 fs-3 text-grow" style="color: rgba(33, 37, 41, 0.5)">
                    <?php the_title(); ?></div>
                <div class="row text-body-secondary"><?php get_the_category_list()?></div>
                <div class="row text-body-secondary"><?php the_excerpt();?></div>
            </div>
        </div>

        <div class="row col-xl-5 col-sm-12 d-flex align-content-center justify-content-center">
            <?php 
             while ($blog_query->have_posts()) : $blog_query->the_post(); 
            ?>
            <div class="card no-outline col-sm-12 col-lg-6 mb-2 p-2" style="height:350px">
                <img class="img-fluid card-img mb-2" style="height:100%; object-fit:cover;" alt="Image"
                    src="<?php the_post_thumbnail_url();?>">
                <div class="com-sm-12 col-lg-6 card-body p-0">

                    <div class="card-title fw-bold text-body-secondary m-0 fs-2"><?php the_title(); ?></div>
                    <div class="card-text text-body-secondary text-uppercase"><?php get_the_category_list()?></div>
                    <div class="card-text text-body-secondary fs-5"><?php the_excerpt();?></div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php 

endif;
wp_reset_postdata();
?>