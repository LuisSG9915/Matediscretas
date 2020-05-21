<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
			type="text/css"
		/>
		<link rel="stylesheet" href="theme.css" type="text/css" />
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-primary" style="">
			<div class="container">
				<button
					class="navbar-toggler navbar-toggler-right border-0"
					type="button"
					data-toggle="collapse"
					data-target="#navbar6"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar6">
					<a
						class="navbar-brand text-primary d-none d-md-block"
						href="#"
					>
						<i
							class="fa fa-home text-white fa-2x"
							aria-hidden="true"
						></i>
						<b class="text-white">Matemáticas Discretas</b>
					</a>
					<ul class="navbar-nav mx-auto">
						<i
							class="fa fa-bell text-white fa-lg text-right"
							aria-hidden="true"
						></i>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item" style="">
							<a class="nav-link" href="#"
								><i class="fa fa-user text-white fa-lg"></i
							></a>
						</li>
						<li class="nav-item text-white" style="">
							<a
								class="nav-link text-white bg-primary"
								href="#"
								contenteditable="true"
								>VALDIVIA CRUZ ANA PATRICIA&nbsp;</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="mt-2" style="">
			<div class="container">
				<div class="row" style="">
					<div class="col-md-3" style="">
						<a class="btn btn-primary" href="#">Regresar<br /></a>
					</div>
					<div class="col-md-8 offset-md-1" style="">
						<h1 class="text-primary" style="">
							Actividades de la clase
						</h1>
					</div>
				</div>
			</div>
		</div>
		<?php
		
		if(isset($_SESSION["message"])){ ?>
		<div class="alert alert-<?= $_SESSION["message_type"];?> alert-dismissible fade show" role="alert">
			<?= $_SESSION["message"]?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
	<?php
		session_unset();}
	?>		
		<div class="py-5" style="">
			<div class="container">
				<div class="row border-info border-0 border-top" style="">
					<div class="col-md-2" style="">	
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<i class="fa fa-circle-thin"><a href="hello"> Unidad 1</a></i>
							</li>
							<li class="list-group-item">
								<i class="fa fa-circle-thin">Unidad 2</i><br />
							</li>
							<li class="list-group-item" style="">
								<i class="fa fa-circle-thin">Unidad 3</i>
							</li>
							<li class="list-group-item" style="">
								<i class="fa fa-circle-thin">Unidad 4</i><br />
							</li>
							<li class="list-group-item">
								<i class="fa fa-circle-thin">Unidad 5</i><br />
							</li>
							<li class="list-group-item">
								<i class="fa fa-circle-thin" style=""
									>Unidad 6</i
								><br /><br />
							</li>
						</ul>
					</div>
					
					
					<div class="col-md-10" style="">
					<?php
					include("mostrar-profe.php");
					
					?>     
				</div>
			</div>
		</div>
		
		<nav class="navbar navbar-dark bg-primary mt-0">
			<div class="container d-flex justify-content-center">
				<a class="navbar-brand" href="#">
					<i class="fa d-inline fa-lg fa-graduation-cap"></i>
					<b> ITSX</b>
				</a>
			</div>
		</nav>
		<script
			src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
		
	</body>
</html>
