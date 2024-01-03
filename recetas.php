<?php $fondo = 'recetas' ?>
<?php $titulo = 'Recetas' ?>

<?php include_once "partes/parte_head.php" ?>

<div class="container section form-control mt-2 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

    <p class="center bigtext section"><i class="fa fa-cutlery" aria-hidden="true"></i> Recetas</p>

    <hr>

    <div class="row section form-control mt-2 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

        <div class="col s12 m4 l4 xl4">
            <img style="height: 200px;" class="responsive-img materialboxed" src="images/churros-1000x617.jpg" alt="image">
        </div>

        <div class="col s12 m8 l8 xl8">
            <span class="lead" style="font-size: 30px;">Churros</span>
            <p class="lead">Ingredientes: </p>
            <p> Mantequilla, Agua, Harina de Trigo, Sal, Canela Molida, Azúcar Blanca Refinada, Huevos</p>
            <p class="lead">Tiempo de Preparacion: 45m</p>
            <div class="naranja">
                <a class="form-control naranja btn grey waves-effect waves-light" href="churros.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Más</a>
            </div>
        </div>

    </div>

    <div class="row section form-control mt-2 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

        <div class="col s12 m4 l4 xl4">
            <img style="height: 200px; width: 320px;" class="responsive-img materialboxed" src="images/pastel-de-pure-de-manzana--md-62802p81145.jpg" alt="image">
        </div>

        <div class="col s12 m8 l8 xl8">
            <span class="lead" style="font-size: 30px;">Pastel de Manzana</span>
            <p class="lead">Ingredientes: </p>
            <p> Manzanas Rojas, Aceite de Coco, Huevos, Harina de Trigo, Azúcar, Canela Molida, Limón, Azúcar</p>
            <p class="lead">Tiempo de Preparacion: 1h 30m</p>
            <div class="naranja">
                <a class="form-control naranja btn grey waves-effect waves-light" href="pastel_de_manzana.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Más</a>
            </div>
        </div>

    </div>

    <div class="row section form-control mt-2 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

        <div class="col s12 m4 l4 xl4">
            <img style="height: 200px;" class="responsive-img materialboxed" src="images/coditoconatun.jpg" alt="image">
        </div>

        <div class="col s12 m8 l8 xl8">
            <span class="lead" style="font-size: 30px;">Ensalada de Coditos con Atún</span>
            <p class="lead">Ingredientes: </p>
            <p>Codito, Mayonesa, Vinagre, Mostaza, Atún, Vegetales, Sal y Pimienta, Galletas o Lechuga, Chiles</p>
            <p class="lead">Tiempo de Preparacion: 35m</p>
            <div class="naranja">
                <a class="form-control naranja btn grey waves-effect waves-light" href="codito.php"><i class="fa fa-eye" aria-hidden="true"></i> Ver Más</a>
            </div>
        </div>

    </div>

    <hr>

    <div>
        <ul class="pagination" style="justify-content: center;">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active waves-effect"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>

</div>

<?php include_once "partes/parte_footer.php" ?>