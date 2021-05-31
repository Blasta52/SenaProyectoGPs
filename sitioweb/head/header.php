<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../assets/css/styles-header.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse formulario-registro" id="navbarNav">
		      	<div>
		         	<img src="../assets/image/logo.jpg" class="logo navbar-brand margin-left" href="#">
		        </div>
		        <div class="navbar-nav">
		         	<a class="nav-item nav-link active margin-righ" href="#">Inicio</a>
		         	<a class="nav-item nav-link active margin-righ" href="#">Informacion</a>
		         	<a class="nav-item nav-link active margin-righ" href="#">¿Quienes somos?</a>
		         	<a class="nav-item nav-link active margin-righ" href="#">Producto</a>
		         	<button type="button" class="btn btn-warning margin-righ" data-toggle="modal" data-target="#iniciosesion" data-whatever="@mdo">Iniciar sesión</button>
		         	<button type="button" class="btn btn-warning margin-righ" data-toggle="modal" data-target="#registro" data-whatever="@mdo">Registrarse</button>
		         	<!-- popup inicio sesion -->
		        	<div class="modal fade" id="iniciosesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        	  <div class="modal-dialog" role="document">
		        	    <div class="modal-content">
		        	      <div class="modal-header">
		        	        <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión</h5>
		        	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	          <span aria-hidden="true">&times;</span>
		        	        </button>
		        	      </div>
		        	      <div class="modal-body">
		        	        <form class="text-center">
		        	          <div class="form-group w-50 margin-0">
		        	            <label for="recipient-name" class="col-form-label">Nombre de usuario:</label>
		        	            <input type="text" class="form-control" id="recipient-name">
		        	          </div>
		        	          <div class="form-group w-50 margin-0">
		        	            <label for="recipient-name" class="col-form-label">Contraseña:</label>
		        	            <input type="text" class="form-control" id="recipient-name">
		        	          </div>
		        	        </form>
		        	      </div>
		        	      <div class="modal-footer">
		        	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        	        <button type="button" class="btn btn-warning">Iniciar sesión</button>
		        	      </div>
		        	    </div>
		        	  </div>
		        	</div>
		        	<!-- fin popup inicio sesion -->
		         	<!-- popup registro -->
		        	<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        	  <div class="modal-dialog" role="document">
		        	    <div class="modal-content">
		        	      <div class="modal-header">
		        	        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
		        	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	          <span aria-hidden="true">&times;</span>
		        	        </button>
		        	      </div>
		        	      <div class="modal-body">
		        	        <form>
		        	          <div class="form-group">
		        	            <label for="recipient-name" class="col-form-label">Nombres:</label>
		        	            <input type="text" class="form-control" id="recipient-name">
		        	          </div>
		        	          <div class="form-group">
		        	            <label for="recipient-name" class="col-form-label">Apellidos:</label>
		        	            <input type="text" class="form-control" id="recipient-name">
		        	          </div>
		        	          <div class="form-group">
		        	            <label for="recipient-name" class="col-form-label">Correo electronico:</label>
		        	            <input type="text" class="form-control" id="recipient-name">
		        	          </div>					          
		        	          <div class="formulario-registro ">
		        	          	<select class="mt-3 form-control width-form" >												    	
		        			    	<option>Seleccione</option>
		        			    	<option>CC</option>
		        			    	<option>TI</option>
		        			    	<option>PP</option>
		        			    	<option>CE</option>
		        			    </select>
		        	          	<div class="form-group" >
		        			        <label for="recipient-name" class="col-form-label">Numero de identificación:</label>
		        			        <input type="text" class="form-control" id="recipient-name">
		        			    </div>
		        			    
		        	          </div>
		        	          <div>
		        			    <div class="form-group width-form float-left">
		        			      <label for="recipient-name" class="col-form-label ">Usuario:</label>
		        			      <input type="text" class="form-control" id="recipient-name">
		        			    </div>
		        			    <div class="form-group width-form float-right">
		        			      <label for="recipient-name" class="col-form-label ">contraseña:</label>
		        			      <input type="text" class="form-control" id="recipient-name">
		        			    </div>
		        	          </div>
		        	          <div class="form-check">
		        				  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
		        				  <label class="form-check-label" for="flexCheckDefault">
		        				    Aceptar terminos y condiciones
		        				  </label>
		        			  </div>
		        	        </form>
		        	      </div>
		        	      <div class="modal-footer">
		        	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        	        <button type="button" class="btn btn-warning">Registrarse</button>
		        	      </div>
		        	    </div>
		        	  </div>
		        	</div>
		        	<!-- fin popup registro -->
		        </div>		      
		    </div>
		  </div>
		</nav>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>






