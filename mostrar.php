<?php

$inc=include("conexion.php");
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
						<h6 class="d-flex justify-content-end align-items-end">
							<?php echo "Puntaje de actividad: ", $puntaje," Fecha de entrega: ", $fechadeEntrega; ?><br />
						</h6>
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
                <!-- Boton  -->
                 <div class="row">
                 <div class="col-md-1 offset-md-10" style=""><a class="btn btn-primary" href="#" ><i class="fa fa-download fa-fw"></i>&nbsp;Subir actividad<br></a></div>
                 </div>

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