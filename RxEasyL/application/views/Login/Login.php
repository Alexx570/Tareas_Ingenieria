<!doctype html>
<html lang="es">
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <Link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
    <!-- Favicon 
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Alexx570/Tareas_Ingenieria/master/Recursos/favi1.png"/>
    -->
    <title>Login/Sign-Up</title>
</head>

<section>
    <br>
    <br>
    <br>
    <br>
    <br>

    <body
        background="https://raw.githubusercontent.com/Alexx570/Tareas_Ingenieria/master/Recursos/health-2082630_640.jpg">
        <div class="container fluid ">
            <div class="class row justify-content-center align-items-center">
                <div class="class col-16">

                    <div class="global-container">
                        <div class="card login-form">
                            <div class="card-body">
                                <h3 class="card-title text-center">Bienvenido de vuelta,</h3>
                                <h3 class="card-title text-center">continúa contribuyendo</h3>
                                <div class="card-text">
                                    <!--
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                    <form>
                                        <!-- to error: add class "has-danger" 
                                    aria-describedby="emailHelp"-->

                                        <div class="form-group">
                                            <label for="username">Usuario</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <a href="Recu" style="float:right;font-size:12px;">¿Olvidaste tu
                                                contraseña?</a>
                                            <input type="password" class="form-control form-control-sm" id="password">
                                        </div>
                                        <button type="submit" class="btn btn-light btn-block"
                                            style="background-color:cornflowerblue" >Entrar</button>

                                        <div class="sign-up">
                                            <div class="class card-body">
                                                ¿No tienes cuenta? <a href="agregarusuarios">Crea una aquí</a>.
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section>

</body>
</html>