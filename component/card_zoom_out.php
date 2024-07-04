<!-- Desenvolvimento de uma div com 3 Cards e efeito de Zoom ao Hover 
<style>

.zoom_mask {
   width: 100%;
   height: 100%;
   overflow: hidden;
   margin: 0 auto;
}

.zoom_mask img {
   width: 120%;
   transition: 0.5s all ease-in-out;
}

.zoom_mask:hover img {
   transform: scale(0.8) translateY(-5.1rem);
}
</style>
-->
<div class="container-fluid">
    <div class="row">

        <div class="col-4 px-0">
            <div class="card text-white zoom_mask">
                <div class="d-flex justify-content-center">


                    <img class="card-img"
                        src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                        alt="Card image">

                </div>
                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                    <button class="btn btn-transparent">Saiba Mais</button>
                </div>
            </div>
        </div>

        <div class="col-4 px-0">
            <div class="card text-white zoom_mask">
                <div class="d-flex justify-content-center">


                    <img class="card-img"
                        src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                        alt="Card image">
                </div>
                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                    <button class="btn btn-transparent">Saiba Mais</button>
                </div>
            </div>
        </div>
 
    <div class="col-4 px-0">
        <div class="card text-white zoom_mask">
            <div class="d-flex justify-content-center">


                <img class="card-img"
                    src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                    alt="Card image">
            </div>
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                <button class="btn btn-transparent">Saiba Mais</button>
            </div>
        </div>
    </div>
</div>
