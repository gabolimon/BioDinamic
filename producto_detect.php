<?php include('complements/head.php') ?>
	<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
	<div class="container-12" id="cont_pag_producto">
		<!--IMAGEN PRODUCTO-->
		<div class="grid-5">
			<img id="img_producto" src="img/sensor_1.jpg"><br>
			<img class="img_producto_icon" id="icon_1" onclick="myFunction('icon_1')" src="img/sensor_1.jpg">
			<img class="img_producto_icon" id="icon_2" onclick="myFunction('icon_2')" src="img/sensor_2.jpg">
			<img class="img_producto_icon" id="icon_3" onclick="myFunction('icon_3')" src="img/sensor_3.jpg">
			<img class="img_producto_icon" id="icon_4" onclick="myFunction('icon_4')" src="img/sensor_4.jpg">
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-5" id="cont_descripcion">
			<h>DETECT SHRIMP</h><br><br>
			<hr>
			<p>Mercado: Granja Camaroneras<br><br>
			Detector:<br><br>
			•  Detecta el color del camarón pre-cocinado con una cámara profesional<br>
			•  Usa algoritmos de detección para asociar la imagen de camarón a un rango de color y tamaño.<br>
			•  El sistema decide como clasificar el camarón para siga con el proceso de empaquetado.<br><br>
			Especificaciones:<br><br>
			•  El producto es para industrias de empaquetados de camarón.<br>
			•  Construido con material certificado, de calidad y soporta condiciones industriales.<br>
			•  Cuenta con sensores de temperatura y humedad.<br><br>
			Benedicios:<br><br>
			•  Reduce a un 15% el proceso de selección de camarones.<br>
			•  Ahorro en gastos de producción en un 20%.<br>
			•  Asegura la calidad del producto de venta con características deseadas por el cliente..<br>
			</p>
		</div>
		<div class="clear"></div>
	</div>

	<!--PIE DE PAGINA -->
	<?php include('complements/cont_pie_pag.php') ?>
	
<!--FIN BODY -->
</body>
</html>