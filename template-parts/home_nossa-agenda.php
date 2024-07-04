<!-- Nossa Agenda -->



<div class="container">

    <div class="row fs-4 text-secodary ms-2 my-2 text-body-secondary text-uppercase">NOSSA AGENDA</div>
    <div class="row fs-1 text-secodary mt-2 mb-4">
        <div class="col  border-end border-dark-subtle" style="max-width:7%"></div>
        <div me-5 class="col mr-1 h-3 text-body-secondary">Saiba quais são os próximos eventos realizados pelo Rancho
            Nhazinha</div>
    </div>
</div>
<div class="container-fluid mb-5">
    <div class="row d-flex align-content-center justify-content-center">
        <?php
            $today = date('Ymd');
            $agenda_query = new WP_Query( array(
                'post_type' => 'agenda',
                'posts_per_page' => -1,
                'meta_key' => 'data_evento',
                'orderby' => 'meta_value_num',
                //'order' => 'ASC'
               // 'meta_query' => array(
               //     array(
              //          'key' => 'data_evento',
              //          'compare' => '>=',
              //          'value' => $today,
              //          'type' => 'numeric'
              //      )
            //     )

            ));
        while ( $agenda_query->have_posts()){
            $agenda_query->the_post(); 
            $event_day = new DateTime(get_field('data_evento'));
            $mes = $event_day->format('M');
            $dia = $event_day->format('d');
         
        ?>

        <div class="card text-white col-lg-4 col-sm-12 no-outline mb-2 p-2" style="height:350px">

            <img class="card-img img-fluid" style="height:100%; object-fit:cover;"
                src="<?php the_post_thumbnail_url()?>" alt="Card image">


            <div class="card-img-overlay  container d-flex flex-column justify-content-between ">

                <div class="container mt-3 ms-2">

                    <div class="row">

                        <div id="borda-esquerda" class="col-sm-2 border-end border-white border-2"
                            style="max-width:7%;height: 4.5rem"></div>


                        <div class="col-sm-9">
                            <div class="row text-secodary my-2 ps-2">
                                <span class="row card-text display-3 fw-bold mt-1 " style="line-height: 1rem;">
                                    <?php echo $dia ?></span>
                                <span class="row card-text display-3 "><?php echo $mes ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-itens-end">
                    <span class="card-text fs-3">Competição</span>
                    <h5 class="card-title fs-2 lh-md fc-white text-uppercase"><?php the_title() ?></h5>
                    <div class="d-flex justify-content-start">
                        <button class="btn btn-transparent fs-3 p-0" style="border-color:transparent;">Saiba
                            Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        //echo the_field('tipo_de_evento');
        ?>
    </div>
</div>
<?php wp_reset_postdata(); ?>