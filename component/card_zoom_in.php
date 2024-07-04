<!-- Desenvolvimento de uma div com 3 Cards e efeito de Zoom ao Hover 
<style>
    
    .geeks {
        width: 100%;
        height: 100%;
   overflow: hidden;
   margin: 0 auto;
}

.geeks img {
    width: 100%;
    transition: 0.5s all ease-in-out;
}

.geeks:hover img {
    transform: scale(1.5);
}
</style>
-->
<div class="container-fluid">
    <div class="row">

        <div class="col-4 px-0">
            <div class="card text-white geeks" style="outline: 1px">
                
                
                <img class="card-img" style="width:100%"
                    src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                    alt="Card image">

                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                    <button class="btn btn-transparent">Saiba Mais</button>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card text-white geeks">


                <img class="card-img" style="width:100%"
                    src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                    alt="Card image">

                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                    <button class="btn btn-transparent">Saiba Mais</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-white geeks">


                <img class="card-img" style="width:100%"
                    src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                    alt="Card image">

                <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                    <h5 class="card-title display-3 fw-bold lh-lg fc-white">Garanhoes</h5>
                    <button class="btn btn-transparent">Saiba Mais</button>
                </div>
            </div>
        </div>

    </div>
</div>