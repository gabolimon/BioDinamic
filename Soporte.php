<?php include('complements/head.php') ?>
<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
<div id="formulario_reclamo" >
	<!--TITULO -->
		<div id="titulos1" class="container-12">
			
			<i class="container-12"><h1 id="textoImagen">SOPORTE</h1></i>
		</div>



		<div id="formRecla" class="container-12" style="font-family: Century Gothic">
			<h2>FORMULARIO DE RECLAMO</h2></br></br>
			<form action="#" onsubmit="return validarFormulario()">
				<div>
					<input id="input_form" type="text" name="empresa" id="empresa" placeholder="Empresa">
					<input id="input_form" type="text" name="telefono" id="telefono" placeholder="Tel&eacute;fono">
					</br>
					<input id="input_form" type="text" name="contacto" id="contacto" placeholder="Contacto">
					<input id="input_form" type="text" name="telefono2" id="telefono2" placeholder="Tel&eacute;fono">
					</br>
					<input id="input_form" type="text" name="correo" id="correo" placeholder="Correo">
					<input id="input_form" type="text" name="numeroFactura" id="numeroFactura" placeholder="N&uacute;mero Factura">
					</br>
					<input id="input_form" type="text" name="productoForm" id="productoForm" placeholder="Producto"></td>
					<input id="input_form" type="text" name="cantidadAfectada" id="cantidadAfectada" placeholder="Cantidad Afectada"></br>
					
					<textarea id="input_text" name="queja" placeholder="Describir Queja.." cols="60" rows="5"></textarea></br>
					<input id="button" type="submit" value="ENVIAR" name="enviar">
				</div>
			</form>
		</div>




	<!--PRODUCTO 1-->
	<div class="clear"></div>
</div>
	<!--PIE DE PAGINA -->
	<?php include('complements/cont_pie_pag.php') ?>
	
<!--FIN BODY -->
</body>
</html>