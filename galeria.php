<?php $fondo = 'galeria' ?>
<?php $titulo = 'Galería' ?>

<?php include_once "partes/parte_head.php" ?>


<div class="container section">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <div class="slider">

                <ul class="slides">
                    <li>
                        <img src="images/imagen6.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen1.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen2.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen3.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen4.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen5.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen7.jpg" alt="image">
                    </li>
                    <li>
                        <img src="images/imagen8.jpg" alt="image">
                    </li>
                </ul>

            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems, {
            indicators: false,
            height: 500,
            interval: 3000,
            duration: 2000
        });
    });
</script>

<!--Este section contiene todas las imagenes de la galeria-->
<section class="container bg-white">

    <h2 class="text-center section"><i class="fa fa-picture-o" aria-hidden="true"></i> Galería</h2>

    <hr>

    <div class="row text-center">
        <div class="col-sm-12 col-md-4 mb-4 mt-4">
            <img class="responsive-img materialboxed" src="images/post1.jpg" alt="post1">
        </div>
        <div class="col-sm-12 col-md-4 mb-4 mt-4">
            <img class="responsive-img materialboxed" src="images/post2.jpg" alt="post2">
        </div>
        <div class="col-sm-12 col-md-4 mb-4 mt-4">
            <img class="responsive-img materialboxed" src="images/post3.jpg" alt="post3">
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post4.jpg" alt="post4">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post5.jpg" alt="post5">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post6.jpg" alt="post6">
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post7.jpg" alt="post7">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post8.jpg" alt="post8">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post9.jpg" alt="post9">
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post10.jpg" alt="post10">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post13.jpg" alt="post11">
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <img class="responsive-img materialboxed" src="images/post12.jpg" alt="post12">
        </div>
    </div>

    <hr>

    <div class="row mt-2 section">

        <ul class="pagination" style="justify-content: center;">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
        
    </div>

</section>
<!--Fin del section-->

<?php include_once "partes/parte_footer.php" ?>