<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <!-- <form action="insertar.php" method="post"> -->
  <form method="post" <?php echo $_SERVER['PHP_SELF'] ?> enctype="multipart/form-data">
    <nav class="navbar navbar-expand-md navbar-light bg-primary" style="">
      <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button"
          data-toggle="collapse" data-target="#navbar6">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar6"> <a class="navbar-brand text-primary d-none d-md-block"
            href="#">
            <i class="fa fa-home text-white fa-2x" aria-hidden="true"></i>
            <b class="text-white">Matemáticas Discretas</b>
          </a>
          <ul class="navbar-nav mx-auto"> <i class="fa fa-bell text-white fa-lg text-right" aria-hidden="true"></i></ul>
          <ul class="navbar-nav">
            <li class="nav-item" style=""> <a class="nav-link" href="#"><i class="fa fa-user text-white fa-lg"></i></a>
            </li>
            <li class="nav-item text-white" style=""> <a class="nav-link text-white bg-primary" href="#"
                contenteditable="true">VALDIVIA CRUZ ANA PATRICIA&nbsp;</a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="mt-2" style="">
      <div class="container">
        <div class="row" style="">
          <div class="col-md-3 d-flex align-items-start justify-content-start flex-row flex-grow-1" style=""><a
              class="btn btn-primary" href="#">Regresar<br></a></div>
          <div class="col-md-8    offset-md-1" style="">
            <h1 class="text-primary" style="">&nbsp; &nbsp; &nbsp; Crear actividad</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-4" style="">
      <div class="container">
        <div class="row">
          <div class="col-md-3" style="">
            <h5 class="" style="">Nombre de actividad:<br><br></h5>
          </div>
          <div class="col-md-3" style="">
            <div class="col-10 col-md-12" style="transition: all 0.25s;">
              <div class="form-group"><label></label>
                <input type="text" name="nombre_Actividad" class="form-control form-control-sm w-100" style="">
              </div>
            </div>
          </div>
          <div class="col-md-3" style="">
            <h5 class="">Puntaje de actividad</h5>
          </div>
          <div class="col-md-3">
            <div class="form-group"><label></label>
              <input type="text" name="puntaje_Actividad" class="form-control w-100 form-control-sm">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3"  style="">
            <h5 class="">Instrucciones:<br></h5>
          </div>
          <div class="col-md-3" style="">
            <div class="form-group" ><label></label>
              <input type="text" name="instrucciones_Actividad" class="form-control w-100 form-control-sm " style="">
            </div>
          </div>
          <div class="col-md-3" style="">
            <h5 class="">Unidad<br></h5>
          </div>
          <div class="col-md-3">
            <div class="form-group"><label></label>
              <input type="text" name="unidad_Actividad" class="form-control w-100 form-control-sm"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row my-2 mt-3">
          <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">   -->
    <input name="fichero" class="btn btn-primary" type="file" size="150" maxlength="150">  

      <!-- </div> -->
    </div>
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-2" style="">
            <h5 class="" style="">Fecha de entrega</h5>
          </div>
          <div class="col-md-3" style="">
            <div class="form-group"><label></label>
              <input type="text" name="fechaDeEntrega_Actividad" class="form-control w-100 form-control-sm" style="">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row my-2">
          <div class="col-md-2 offset-md-10">

<!-- Aquí cuando le demos click al botoón nos va a mandar a llamar a mi php con un nombre de register -->
              <input type="submit" name="register" class="btn btn-primary">
            </a>
          </div>
        </div>
      </div>
<div id="alerta" class="alert alert-warning" role="alert">
Llene el formulario, porfavor</div>
</div>
<div id="exito" class="alert alert-primary" role="alert">
Actividad creada con éxito</div>
     </div>
      <nav class="navbar navbar-dark bg-primary mt-5">
      <div class="container d-flex justify-content-center"> <a class="navbar-brand" href="#">
          <i class="fa d-inline fa-lg fa-graduation-cap"></i>
          <b> ITSX</b>
        </a> </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <pingendo onclick="window.open('https://pingendo.com/', '_blank')"
    class="d-block" alt="Pingendo logo" height="16"></pingendo>
<?php
include("crear.php");
?>     

  </form>
</body>

</html>
