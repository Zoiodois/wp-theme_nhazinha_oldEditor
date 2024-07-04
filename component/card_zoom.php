<!-- zoom from net -->
 <style>
        .geeks {
            width: 300px;
            height: 300px;
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
</head>

<body>
    <div class="geeks">
        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200403151026/adblur_gfg.png" 
             alt="Geeks Image" />
    </div>
</body>

</html>


<!--1 IMG Background -->
<div class="container-fluid">
    <div class="row">
    <div class="geeks">
        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200403151026/adblur_gfg.png" 
             alt="Geeks Image" />
    </div>
    </div>

    <div class="row">

        <div class="col-4 d-flex flex-row justify-content-center align-items-center" style="height: 100vh; overflow:hidden">
            <div class="row">

                <div class="zoom" style="width: 60%; height: 60%;">
                    <img src="http://localhost/wp-MathElemento/wp-content/uploads/2024/06/cavalos-garanhoes.png"
                    class="img-fluid w-100 h-100" style="object-fit: cover;">
                    
                </div>
                <div class="row">
                    <div> Texto</div>
                    <div>Saiba Mais</div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


<!-- Desenvolvimento de uma div com 3 Cards e efeito de Zoom ao Hover -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4 px-0">
            <div class="card text-white">


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
            <div class="card text-white">


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
            <div class="card text-white">


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