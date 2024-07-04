<!-- Desenvolvimento de uma div com 3 Cards e efeito de Zoom ao Hover 
<style>

.zoom_mask {
   width: 100%;
   height: 100%;
   overflow: hidden;
   margin: 0 auto;
   --bs-card-border-width: 0;
   --bs-card-border-color: transparent;
}

.zoom_mask img {
   width: 300%;
   transition: 0.5s all ease-in-out;
}

.zoom_mask:hover img {
   transform: scale(0.8);
}


.transform_hover_up >*  {
   transition: 0.5s all ease-in-out;
 }

.zoom_mask:hover .transform_hover_up > * {
   transform: translateY(-3.1rem);
}

.saiba-mais-btn {
   opacity: 0;
   transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
   position: absolute; /* Para esconder abaixo da máscara */
   bottom: -50px; /* Ajuste a posição conforme necessário */
}

.zoom_mask:hover .saiba-mais-btn {
   opacity: 1;
   transform: translateY(-3.1rem); /* Ajuste para mover o botão para a posição desejada */
}

</style>
-->
<div class="container-fluid">
    <div class="row">

        <div class="col-12 col-lg-3 col-sm-6  col-md-6 px-4">
            <div class="card zoom_mask">
                <div class="transform_hover_up">

                    <div class="d-flex justify-content-center">


                        <img class="card-img-top" STYLE="height: 500px; object-fit:center"
                            src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/loja_camisas.png"
                            alt="Card image">

                    </div>
                    <div class="card-body d-flex flex-column justify-content-start">
                        <h5 class="card-title display-4 lh-lg fc-white text-body-secondary">Camisas</h5>
                        <button class="btn fs-4 saiba-mais-btn">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6  col-md-6 px-4">
            <div class="card zoom_mask">
                <div class="transform_hover_up">

                    <div class="d-flex justify-content-center">


                        <img class="card-img-top" STYLE="height: 500px; object-fit:center"
                            src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/loja_coletes.png"
                            alt="Card image">

                    </div>
                    <div class="card-body d-flex flex-column justify-content-start">
                        <h5 class="card-title display-4 lh-lg fc-white text-body-secondary">Camisas</h5>
                        <button class="btn fs-4 saiba-mais-btn">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6 col-md-6 px-4">
            <div class="card zoom_mask">
                <div class="transform_hover_up">

                    <div class="d-flex justify-content-center">


                        <img class="card-img-top" STYLE="height: 500px; object-fit:center"
                            src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/loja_botas.png"
                            alt="Card image">

                    </div>
                    <div class="card-body d-flex flex-column justify-content-start">
                        <h5 class="card-title display-4 lh-lg fc-white text-body-secondary">Camisas</h5>
                        <button class="btn fs-4 saiba-mais-btn">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6 col-md-6 px-4">
            <div class="card zoom_mask">
                <div class="transform_hover_up">

                    <div class="d-flex justify-content-center">


                        <img class="card-img-top" STYLE="height: 500px; object-fit:center"
                            src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/loja_chapeus.png"
                            alt="Card image">

                    </div>
                    <div class="card-body d-flex flex-column justify-content-start">
                        <h5 class="card-title display-4 lh-lg fc-white text-body-secondary">Camisas</h5>
                        <button class="btn fs-4 saiba-mais-btn">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>