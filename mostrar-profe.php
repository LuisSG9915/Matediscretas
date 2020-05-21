<?php
//Para que incluya la base de datos 
$inc=include("conexion.php");
session_unset();



if($inc){
    $consulta="SELECT * FROM crearactividad";
    $resultado= mysqli_query($conex, $consulta);
    if($resultado){
        while($row= $resultado->fetch_array()){
            $id=$row["id"];
            $nombre=$row["nombre_Actividad"];
            $puntaje=$row["puntaje_Actividad"];
            $instrucciones=$row["instrucciones_Actividad"];
            $unidad=$row["unidad_Actividad"];
            $fechadeEntrega=$row["fechaDeEntrega_Actividad"];
            $archivo=$row["archivoActividad"];
            $ruta=$row["rutaActividad"];


            ?>
            
       <div class="card card-body">
            <div class="row col-md-12 justify-content-between">
						<h6 class="d-flex justify-content-end align-content-end">
							<?php echo "Puntaje de actividad: ", $puntaje," Fecha de entrega: ", $fechadeEntrega; ?><br />
						</h6>
                        
                    <div class="btn-group  ">
                            <a href="edit.php?id=<?php echo $row["id"]?>" class="btn btn-outline-primary  ">Editar</a> 
                            <a href="delete.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Eliminar<br></a> 
                     </div>
            </div>
        
                        
						<h1 class="" ><i class="fa fa-book"></i><?php echo $nombre; ?></h1>
						<h5 class="instrucciones">
						<?php echo $instrucciones; ?>
						</h5>
                        <?php
                        if($archivo==true){

                        
                        ?>

            <h1>
                <a href="<?php echo $ruta; ?>"> <i class="fa fa-download small">
                </i> </a>
            <?php echo $archivo;?>
            </h1>
            
            <?php
            }
            ?>	
            	<div class="col-md-10 offset-md-1">
					<label style="">Comentarios de la clase<br /></label>
                </div>
      
                <div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="form-group">
							<input type="text" class="form-control form-control-sm w-100" name="/100">
						</div>
					</div>
                </div>
                
                
                <br>
                </div>
                <hr>
                
            <?php
        }
    }
}

    ?>
        
                    