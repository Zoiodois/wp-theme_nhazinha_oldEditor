<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Rancho Nhazinha</title>


<?php if(is_page('cavalos')){ ?>
</script>
<?php } ?>

<head>
    <?php wp_head();  ?>
</head>

<body>
    <header>
        <div class="spacer" style="height:50px"></div>

        <div class="row mb-3">
            <div class="col">
                <div class="container box">

                    <div>
                        <img src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/logo_nhazinha_extend.jpg"
                            class="img-fluid" style="max-width:100% height:auto">
                    </div>
                </div>
            </div>

            <div class="col">

                <div class="container">
                <nav class="navbar .navbar-toggler navbar-light bg-light">
                        <div class="container-fluid justify-content-end">
                            <!--
                            <a class="navbar-brand" href="#">Menu</a>
-->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="main-menu">
                                <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
                            </div>
                        </div>
                    </nav>

                </div>



            </div>
        </div>
    </header>