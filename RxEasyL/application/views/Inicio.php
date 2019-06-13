<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>RxEasyL</title>

</head>

<body>
  <section>
    <div class="class row ">
      <div class="class col-12">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: rgb(197, 225, 248);">
          <a class="navbar-brand" href="inicio">
            <img src="https://raw.githubusercontent.com/Alexx570/Tareas_Ingenieria/master/Recursos/LL.png" width="108 "
              height="40" class="d-inline-block align-top" alt=""></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <?php if($this->session->userdata('username')):?>
            
            <form class="form-inline my-2 my-lg-0">
              <?php else:?>
              <li><a href="<?=site_url('Log')?>" class="nav-link" href="Log">Entrar/Registro <span class="sr-only">(current)</span></a></li>
            <?php endif;?>                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Partes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="Inicio/Craneo" class="dropdown-item">Craneo</a>
                  <a href="Inicio/Torax" class="dropdown-item">Torax Oseo</a>
                  <a href="Inicio/Columna" class="dropdown-item">Columna</a>
                  <a href="Inicio/Pelvis" class="dropdown-item">Pélvis</a>
                  <div class="dropdown-divider"></div>
                  <a href="Inicio/cons" class="dropdown-item">Huesos Largos</a>
                  <a href="Inicio/cons" class="dropdown-item">Manos</a>
                  <a href="Inicio/cons" class="dropdown-item">Pies</a>
                </div>
              </li>

              <!--<li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
            </ul>

            <?php if($this->session->userdata('username')):?>
            
            <form class="form-inline my-2 my-lg-0">
              <li><a href="<?=site_url('Log/logout')?>" class="btn btn-light " style="background-color: #00FF2F" type="submit">Salir</a></li>
              <?php else:?>
              <li><a href="<?=site_url('Log')?>" class="btn btn-light " style="background-color: #00FF2F" type="submit">Entrar</a></li>
            <?php endif;?>
              </form>
          </div>
        </nav>

      </div>
    </div>
    </div>
  </section>
  <br>
  <main role="main" class="container">
    <div class="jumbotron">
      <br>
      <h1>Bienvenido</h1>
      <p class="lead">EL estudio de la radiología puede ser muy extenso, así que no te preocupes nosotros
        podremos ayudarte con lo que necesites con respecto a cómo tomar una radiografía anatómicamente.
        .</p>
    </div>
  </main>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-6 col-md">
        <small class="d-block mb-3 text-muted">© 2019 RxEasyL</small>
        <div class="logo">
          <img width="60" height="47" title="Logo"
            src="https://raw.githubusercontent.com/Alexx570/Tareas_Ingenieria/master/Recursos/favi1.png">
        </div>
      </div>
      <div class="col-10  ">
        <ul class="list-unstyled text-small">
          <li><a class="text-muted"> La información aquí contenida no debe utilizarse durante una emergencia médica ni
              para el diagnóstico o tratamiento de alguna condición médica. Su propósito es informativo y no sustituye
              una consulta con su doctor. Debe consultar a un médico con licencia para el diagnóstico y tratamiento de
              lo que usted necesite. En caso de una emergencia médica, llame a quien corresponda. Los posibles enlaces a
              otros sitios, sólo se proporcionan con fines de información, no significa que se les apruebe.</a></li>
        </ul>
      </div>
  </footer>


  <!--<div class="container fluid">
            <div class="calss col-16">
                <div class="jumbotron">
                    <h1 class="display-4">RxEasyL</h1>
                    <p class="lead">
                    </p>
                    <hr class="my-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Partes
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="Inicio/Craneo" class="dropdown-item">Craneo</a>
                        <a href="Inicio/Torax" class="dropdown-item">Torax Oseo</a>
                        <a href="Inicio/Columna" class="dropdown-item">Columna</a>
                        <a href="Inicio/Pelvis" class="dropdown-item">Pélvis</a>
                            <button class="dropdown-item"><a href="">Huesos Largos</a></button>
                            <button class="dropdown-item"><a href="">Manos</a></button>
                            <button class="dropdown-item"><a href="">Pies</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
  <!--    <center>
         <!--add this code where you want the game to load
<div style="border:0px solid #000" id="nitrome_game_container" width="550" height="550"><a href="http://www.nitrome.com/games/nitromemustdie/" target="_blank">Play Nitrome Must Die</a></div><p style="text-align:center;"><a href="http://www.nitrome.com/games/nitromemustdie/" target="_blank">Play Nitrome Must Die</a> or play more <a href="http://www.nitrome.com/all-games/" target="_blank">games</a></p>

    </center>
    
<!--add this code above the '</body>' tag on your site
<script type="text/javascript">
document.getElementById('nitrome_game_container').innerHTML = unescape('%3Ciframe%20frameborder%3D%220%22%20scrolling%3D%22no%22%20marginheight%3D%220%22%20marginwidth%3D%220%22%20topmargin%3D%220%22%20leftmargin%3D%220%22%20allowtransparency%3D%22true%22%20width%3D%22550%22%20height%3D%22550%22%20src%3D%22http%3A//s3.amazonaws.com/us_nitrome_s3/iframe/nitromemustdie/index.html%22%3E%3C/iframe%3E');
</script>-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>