<?php include('complements/head.php') ?>
	<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
<div id="fondo_pag_prod">
	<!--TITULO -->
		<div id="titulos">
			<p>PRODUCTOS</p>
		</div>
	<!--PRODUCTO 1-->
	<div class="container-12" id="cont_pag_productos">
		<!--IMAGEN PRODUCTO-->
		<div class="grid-3">
			<img id="img_productos" src="img/sensor_1.jpg"><br>
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-6" id="cont_texto">
			<h>AQUAFEED</h><br><br>
			<hr>
			<p>Granjas Camaroneras.<br><br>
			Este dispositivo monitorea los parámetros del agua y la actividad alimenticia del camaron, con estos datos genera automáticamente cuadros estadísticos para su respectivo análisis.
			</p>
			<button type="button" onclick="location.href='producto_aquafeed.php'" id="button_pro">LEER MAS</button> 
		</div>
		<div class="clear"></div>

		<br><br><br>
		<!--PRODUCTO 2-->
	
		<!--IMAGEN PRODUCTO-->
		<div class="grid-3">
			<img id="img_productos" src="img/sensor_2.jpg"><br>
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-6" id="cont_texto">
			<h>DETECT SHRIMP</h><br><br>
			<hr>
			<p>Granjas Camaroneras.<br><br>
			Este dispositivo detecta el color del camarón pre cocinado con una cámara de alto nivel profesional. Usa algoritmos de detección para asociar la imagen de camarón a un rango de color y tamaño.
			</p>
			<button type="button" onclick="location.href='producto_detect.php'" id="button_pro">LEER MAS</button> 
		</div>
		<div class="clear"></div>


		<br><br><br>
		<!--PRODUCTO 3-->
	
		<!--IMAGEN PRODUCTO-->
		<div class="grid-3">
			<img id="img_productos" src="img/sensor_3.jpg"><br>
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-6" id="cont_texto">
			<h>SHEDDING SHRIMP</h><br><br>
			<hr>
			<p> Granjas Camaroneras.<br><br>
			Este dispositivo permite visualizar y verificar el estado de muda del camarón. El Sistema cuenta con varias luces que permite la captura de imágenes del camarón.</p>
			<button type="button" onclick="location.href='producto_shedding.php'" id="button_pro">LEER MAS</button> 
		</div>
		<div class="clear"></div>
	</div>
</div>
	<!--PIE DE PAGINA -->
	<?php include('complements/cont_pie_pag.php') ?>
	
<!--FIN BODY -->
</body>
</html>