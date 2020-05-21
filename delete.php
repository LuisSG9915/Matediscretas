<?php

include("conexion.php");

if(isset($_GET["id"])){
    $id=$_GET["id"];
    $query="DELETE FROM crearactividad WHERE id=$id";
    $result= mysqli_query($conex, $query);
    if(!$result){
        die("Query fallado, sorry hermano ");
    }else{
      // $_SESSION["message"]= "Removido";
      header("Location: Actividades-profe.php"); 
      $_SESSION["message"]="Tarea guardada satisfactoriamente";
      $_SESSION["message_type"]="success";
      ?>
    
    <?php
  }
}
?>


<!-- <script type="text/javascript">
  function ocultar() {
	 	document..style.display = "none";
}
ocultar(); 
</script> -->

