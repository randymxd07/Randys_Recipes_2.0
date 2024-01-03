<?php $fondo = 'auth' ?>
<?php $titulo = 'Registrarse' ?>

<?php include_once "partes/parte_head.php" ?>

<div class="container section form-control mt-5 mb-2" style="background: rgba(128, 128, 128, 0.795); color: white;">

    <p class="center bigtext section"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</p>

    <hr>

    <div class="row" style="width: 80%;">

        <form class="col s12">

            <div class="input-field col s12 m6">
                <input maxlength="50" type="text" id="nombre" class="validate" required>
                <label for="nombre">Nombre:</label>
            </div>

            <div class="input-field col s12 m6">
                <input maxlength="60" type="text" id="apellido" class="validate" required>
                <label for="apellido">Apellido:</label>
            </div>

            <div class="input-field col s12 m12">
                <input maxlength="100" type="email" id="correo" class="validate" required>
                <label for="correo">Correo Electronico:</label>
            </div>


            <div class="input-field col s12 m6">
                <input maxlength="30" type="text" id="telefono" class="validate" required>
                <label for="telefono">Teléfono:</label>
            </div>

            <div class="input-field col s12 m6">
                <select class="icons" required>
                    <option value="" disabled selected>Sexo</option>
                    <option value="1" data-icon="images/masculino.png">Masculino</option>
                    <option value="2" data-icon="images/femenino.png">Femenino</option>
                </select>
            </div>

            <div class="input-field col s12 m6">
                <input maxlength="30" type="password" id="password" class="validate" required>
                <label for="password">Contraseña:</label>
            </div>

            <div class="input-field col s12 m6">
                <input maxlength="30" type="password" id="passwordc" class="validate" required>
                <label for="passwordc">Confirmar Contraseña:</label>
            </div>

            <div class="input-field col s12">
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Recordar Contraseña</span>
                    </label>
                </p>
            </div>

            <div class="col naranja">
                <button type="submit" class="btn grey waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</button>
            </div>

        </form>

    </div>

    <div class="row" style="width: 80%;">

        <hr class="mt-2">
        
        <div class="col-sm-12 col-md-6 section naranja">
            <a target="blank" class="btn blue waves-effect waves-orange" href="https://accounts.google.com/ServiceLogin/identifier?hl=es&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Diniciar%2Bsesion%2Ben%2Bgoogle%255C%26oq%3Diniciar%2Bsesion%2Ben%2Bgoogle%255C%26aqs%3Dchrome..69i57j0l4j69i60l3.2013j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=AddSession">
                <p class="lead" style="font-size: 14px;"><i class="fa fa-google" style="font-size: 20px;"></i> Inicia Sesión con <b>Google</b></p>
            </a>
        </div>

        <div class="col-sm-12 col-md-6 section naranja">
            <a target="blank" class="btn blue darken-3 waves-effect waves-orange" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=1705914966164020&kid_directed_site=0&app_id=1705914966164020&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fresponse_type%3Dcode%26client_id%3D1705914966164020%26redirect_uri%3Dhttps%253A%252F%252Fwww.000webhost.com%252Fcpanel-login%252Foauth%252Ffacebook%26scope%3Demail%252C%2Bpublic_profile%26state%3DHA-86C923ESVZXTNRWIFDOY57QLJBA1U4MPH0KG%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Db88d56f0-8287-49cf-942b-06d64c85b943&cancel_url=https%3A%2F%2Fwww.000webhost.com%2Fcpanel-login%2Foauth%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3DHA-86C923ESVZXTNRWIFDOY57QLJBA1U4MPH0KG%23_%3D_&display=page&locale=es_LA&pl_dbl=0">
                <p class="lead" style="font-size: 14px;"><i class="fa fa-facebook-official" style="font-size: 20px;"></i> Inicia Sesión con <b>Facebook</b></p>
            </a>
        </div>

    </div>

</div>

<?php include_once "partes/parte_footer.php" ?>