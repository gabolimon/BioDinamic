<?php include('complements/head.php') ?>
<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
	<form class="container-12" id="loggin">
		<div class="text-center mb-4">
			<img class="mb-4" src="img/logoFi.jpg" alt width="100" height="100">
		</div>
		</br>
		<div class="form-label-group">
			<input type="email" name="" id="inputEmail" class="form-control" placeholder="User" required autofocus>
			
		</div>
		<div class="contrasenia">
	        <input type="password" id="contrasenia" class="form-control" placeholder="Contraseña" required>
	        
      	</div>
      </br>

      	<div class="checkbox mb-3">
      		<label>
      			<input type="checkbox" value="Recuerdame">  Recuerdame
      		</label>
      	</div>
      	<button class="btn btn-lg btn-primary btn-block text-center" style="margin-left: 15px" type="submit">Sign in</button>
		

	</form>

<div class="clear"></div>
</div>
	<!--PIE DE PAGINA -->
	<?php include('complements/cont_pie_pag.php') ?>
	
<!--FIN BODY -->
</body>
</html>