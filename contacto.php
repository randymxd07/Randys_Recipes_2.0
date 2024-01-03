<?php $fondo = 'contactos' ?>
<?php $titulo = 'Contactos' ?>

<?php include_once "partes/parte_head.php" ?>

<div class="container section form-control mt-5 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

    <p class="center bigtext section"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</p>

    <hr>

    <div class="row">

        <form class="col s12">

            <div class="input-field col s12">
                <input maxlength="100" type="text" id="nombre" class="validate" required>
                <label for="nombre">Nombre del Contacto:</label>
            </div>

            <div class="input-field col s12">
                <input maxlength="100" type="email" id="correo" class="validate" required>
                <label for="correo">Correo Electrónico:</label>
            </div>

            <div class="input-field col s12">
                <input maxlength="30" type="text" id="telefono" class="validate" required>
                <label for="telefono">Teléfono:</label>
            </div>

            <div class="input-field col s6">
                <input maxlength="15" type="text" id="tiempo" class="validate" required>
                <label for="tiempo">Hora para Llamarme:</label>
            </div>

            <div class="input-field col s6">
                <input maxlength="15" type="text" id="codigopostal" class="validate" required>
                <label for="codigopostal">Codigo Postal:</label>
            </div>


            <div class="input-field col s12">
                <input maxlength="100" type="text" id="tema" class="validate" required>
                <label for="tema">Tema:</label>
            </div>

            <div class="input-field col s12">
                <textarea maxlength="150" id="descripcion" class="materialize-textarea validate" required></textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="col naranja">
                <button type="submit" class="btn grey waves-effect waves-light"><i class="fa fa-arrow-right" aria-hidden="true"></i> Siguiente</button>
            </div>

        </form>

    </div>

</div>

<?php include_once "partes/parte_footer.php" ?>