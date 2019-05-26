<?php
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_TIME, 'es_ES');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pagina de presentación</title>
	<link rel="stylesheet" type="text/css" href="externos/bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="publico/css/estilosHome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="trabajo" content="Cristian Vasquez - Nicolas Maldonado - Cristian Briñez">
	<meta name="Autor" content="Cristian Camilo Vasquez Osorio">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
	  <a class="navbar-brand" href="#">Inicio</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      
	      <li class="nav-item active dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Sistemas operativos
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a href="/vistas/videosInstalacion.php" class="dropdown-item" href="#">Videos de instalación</a>
	        </div>
	      </li>
	      <li class="nav-item active dropdown">
	      	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Introducción al hardware
	        </a>
	        <div  class="dropdown-menu" aria-labelledby="navbarNavDropdown">
	        	<a class="dropdown-item" href="/vistas/mantenimientos.php">Mantenimientos</a>
	        	<a class="dropdown-item" href="media/Formato_Mantenimiento_FUS.xlsx">Formato</a>
	        	<a class="dropdown-item" href="https://youtu.be/qjq9tA5jcjA" > Video mantenimiento preventivo</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container mt-4 col-md-12">
		<div class="card" >
			<div class="card-header" >
				<strong>Proyecto integrador</strong>
			</div>
			<div class="card-body" >
				<div id="info">
					<div class="row">
						<div class="col-md-2" >
							<img class="img-fluid" alt="Responsive image" width="179" src="media/Vertical - Color - Editorial.png">
							<hr>
							<strong>Trabajo elaborado por:</strong>
							<br>
							<li>Nicolas Maldonado</li>
							<li>Cristian Vasquez</li>
							<li>Cristian Briñez</li>
						</div>
						<div class="col-md-9" >
							<nav>
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Introducción</a>
							    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Objetivos</a>
							  </div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
							  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							  	<P align="justify">
							  		<br>
							  		Este trabajo es con fines educativos en el cual se podrá apreciar 3 áreas en el campo de la ingeniería en sistemas.
							  		<br>
									En <strong>introducción al hardware </strong> Se tendrá 2 manuales de mantenimiento. Preventivo y correctivo adjunto a ello un vídeo para el mantenimiento preventivo y un formato de mantenimiento preventivo.
									<br>
									En <strong>Sistemas operativos</strong> Se tendrá 5 vídeos de instalación de diferentes sistemas operativos los cuales, en este caso son:
							  		<br>
							  		<strong>
							  		Windows 10<br>
							  		Windows 8<br>
							  		Linux Ubuntu<br>
							  		Linux Lite<br>
							  		Silverlight<br>
							  		Lubuntu<br>
							  		</strong>
							  		Ajunto a ello se encuentran los respectivos manuales de instalación.
							  		<br>
							  		En <strong>Lógica de programación</strong> Se encuentra el uso de un programa elaborado en el lenguaje JAVA donde se realiza un menú en el cual adjuntaremos el respectivo sitio web.
							  		La estructura gráfica se baso en el uso de JFrame para la interfaz gráfica del sitio
							  	</p>
							  </div>
							  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							  	<p align="justify" >
							  		<br>
							  		<strong>Objetivos generales</strong>
							  		<strong>
							  			<li>Poner en producción el conocimiento adquirido durante nuestra etapa de estudio</li>
							  			<li>Conocer nuevas herramientas para los diferentes campos de la ingeniera en sistemas</li>
							  			<li>Unir los diferentes trabajos en uno para dar a conocer un solo resultado, producto de 3 de áreas distintas</li>
							  		</strong>
							  	</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<hr>
				<div class="card col-md-12">
			  		<div class="card-body">
			    		<center>
			    			<strong>Derechos reservados © Fundación universitaria San Mateo</strong>
			    		</center>
			  		</div>
				</div>
			</div>
		</div>
	</div>
	
  <script src="externos/jquery/jquery-3.js" type="text/javascript"></script>
  <script src="externos/bootstrap4/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>