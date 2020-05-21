<?php
include("conexion.php");

// if($conex){
//     echo "Todo correcto c";
// }
// if(strlen($_POST["name"]) < 1 && strlen($_POST["email"]) < 1 &&)
//Existe post
if(isset($_POST["register"])){
    if(strlen($_POST["nombre_Actividad"]) >= 1 && strlen($_POST["puntaje_Actividad"]) >= 1 && strlen($_POST["instrucciones_Actividad"]) >= 1 && strlen($_POST["unidad_Actividad"]) >= 1 ){
        //A través del nombre que ponemos en nuestro formulario
        //Podemos recibir datos con mi name 
        $nombre_Actividad=trim($_POST["nombre_Actividad"]);
        $puntaje_Actividad=trim($_POST["puntaje_Actividad"]);
        $instrucciones_Actividad=trim($_POST["instrucciones_Actividad"]);
        $unidad_Actividad=trim($_POST["unidad_Actividad"]);
        $fechaDeEntrega_Actividad=trim($_POST["fechaDeEntrega_Actividad"]);
        $fecha=strtotime($fechaDeEntrega_Actividad);
        $fecha =date("Y-m-d", $fecha);

      if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
        echo "<b>Upload exitoso!. Datos:</b><br>";  

        $ruta = "upload/"; 
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        // $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta.$nombrefinal;  

        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) {
        $nombre  = ($_FILES['fichero']['name']);
        echo "<b>Upload exitoso!. Datos:</b><br>";  

        //Consulta para guardar datos   
        $consulta= "INSERT INTO crearactividad(nombre_Actividad, puntaje_Actividad, instrucciones_Actividad, unidad_Actividad,fechaDeEntrega_Actividad, archivoActividad, rutaActividad ) VALUES
                                            ('$nombre_Actividad','$puntaje_Actividad','$instrucciones_Actividad','$unidad_Actividad','$fecha', '$nombre', '$upload')";
  
        $resultado= mysqli_query($conex, $consulta);
        }


      }else{
        $consulta= "INSERT INTO crearactividad(nombre_Actividad, puntaje_Actividad, instrucciones_Actividad, unidad_Actividad,fechaDeEntrega_Actividad ) VALUES
                                            ('$nombre_Actividad','$puntaje_Actividad','$instrucciones_Actividad','$unidad_Actividad','$fecha')";
  
        $resultado= mysqli_query($conex, $consulta);

      }


    if($resultado){

        ?>
<div class="alert alert-success" role="alert">
    Actividad registrada.
</div><?php

}else{
    echo ("gola")
    ?>
  <div class="alert alert-danger" role="alert">
      No se ha podido registrar la actividad, procure que ningún campo quede sin registrar
    </div>
    <?php
        echo " ", ($fechaDeEntrega_Actividad), " "; 
        echo($fecha), " ";
        echo($nombre_Actividad), " ";
        echo($unidad_Actividad), " ";
        echo($puntaje_Actividad), " ";
        echo($instrucciones_Actividad), " ";        
    }
}else{
    echo ("sadd")
    
    ?>
 <div class="alert alert-danger" role="alert">
      No se ha podido registrar la actividad, procure que ningún campo quede sin registrar
    </div>

        <?php

    }
}
?> 