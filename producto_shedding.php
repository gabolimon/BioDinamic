<?php include('complements/head.php') ?>
	<!--CARPETAS CSS,JS,JQUERY-->
</head>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
<div id="fondo_pag_prod" class="contenido" >
	<div class="container-12" id="cont_pag_producto">
		<!--IMAGEN PRODUCTO-->
		<div class="grid-5">
			<img id="img_producto" src="img/productos/img003.jpg"><br>
			<img class="img_producto_icon" id="icon_1" onclick="myFunction('icon_1')" src="img/productos/img003.jpg">
			<img class="img_producto_icon" id="icon_2" onclick="myFunction('icon_2')" src="img/sensor_2.jpg">
			<img class="img_producto_icon" id="icon_3" onclick="myFunction('icon_3')" src="img/sensor_3.jpg">
			<img class="img_producto_icon" id="icon_4" onclick="myFunction('icon_4')" src="img/sensor_4.jpg">
		</div>
		<!--DESCRIPCION PRODUCTO -->
		<div class="grid-5" id="cont_descripcion">
			<h>SHEDDING SHRIMP</h><br><br>
			<hr>
			<p>Mercado: Granja Camaroneras<br><br>
			Monitoreo:<br><br>
			•  Visualiza y verifica el estado del camarón cuando realiza su muda.<br>
			•  Cuenta con un conjunto de luces que permiten monitorear al camarón<br>
			•  Cuenta con un sofware especializado el cual procesa las imagenes y retorna un analisis del estado del camarón por piscina<br><br>
			
			Especificaciones:<br><br>
			•  El software es de fácil manejo para el usuario.<br>
			•  Construido con material amigable para el ambiente.<br>
			•  Posee sensor de movimiento, sensor de aproximación, sensor de temperatura.<br>
			•  El Sistema solo debe permanecer dos horas bajo el agua por dia.<br>
			•  Cuenta con recurso energético para un funcionamiento correcto y permanente.<br><br>
			
			Benedicios:<br><br>
			•  Disminuye la contaminación del agua en un 20%.<br>
			•  Ahorra gastos de alimento en un 18%.<br>
			•  Ahorra riesgos de muerte en 15%.<br>
			•  Ahorra gastos de producción en un 10%<br>
			•  Evita la pesca de camarones para observar. No hay necesidad de sacarlos del agua.<br>
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