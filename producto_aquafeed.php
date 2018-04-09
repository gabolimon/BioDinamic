<?php include('complements/head.php') ?>
	<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
	<div class="contenido">
	<div class="container-12" id="cont_pag_producto">
		<!--IMAGEN PRODUCTO-->
		<div class="grid-5">
			<img id="img_producto" src="img/productos/img001.png"><br>
			<img class="img_producto_icon" id="icon_1" onclick="myFunction('icon_1')" src="img/productos/img001.png">
			<img class="img_producto_icon" id="icon_2" onclick="myFunction('icon_2')" src="img/sensor_2.jpg">
			<img class="img_producto_icon" id="icon_3" onclick="myFunction('icon_3')" src="img/sensor_3.jpg">
			<img class="img_producto_icon" id="icon_4" onclick="myFunction('icon_4')" src="img/sensor_4.jpg">
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-5" id="cont_descripcion">
			<h>AQUAFEED</h><br><br>
			<hr>
			<p id="demo">Mercado: Granja Camaroneras<br><br>
			Monitoreo:<br><br>
			•  Parámetros del agua (Oxígeno disuelto y temperatura)<br>
			•  Actividad alimenticia (sonidos del camarón al comer)<br>
			•  Genera cuadros estadísticos con estos datos.<br><br>
			Especificaciones:<br><br>
			•  Conección a alimentadores automáticos.<br>
			•  Permite adaptar sensores ambientales.<br>
			•  Soporta condiciones ambientales.<br>
			•  Permite conectarse a la plataforma web.<br>
			•  Cuenta con recurso energético para un funcionamiento correcto y permanente.<br>
			•  Fácil manejo y requiere poco mantenimiento.<br><br>
			Benedicios:<br><br>
			•  Reducción de tiempo de cultivo por cada corrida en un 20% a 25%.<br>
			•  Mejora de factor de conversión alimenticia en un 25%.<br>
			•  Aumento de crecimiento en un 15% a 20%.<br>
			•  Ahorro de gastos de producción en un 10%.<br>
			•  Mejora en la calidad del producto.<br>
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>

	<!--PIE DE PAGINA -->
	<?php include('complements/cont_pie_pag.php') ?>
	
<!--FIN BODY -->
</body>
</html>