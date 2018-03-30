<?php include('complements/head.php') ?>
	<!--CARPETAS CSS,JS,JQUERY-->
</head>

<body>
<!--ENCABEZADO-->
	<header >
		<!--MENU DINAMICO-->
		<?php include('complements/menu.php') ?>
	</header>
<!--INICIO BODY -->
	<!--BODY SLIDER -->
	<?php include('complements/slider.php') ?>
	<!--BODY CONTENEDOR -->
	<div class="container-12">
		<!--BODY ICONO -->
		<?php include('complements/iconos.php') ?>
		<div class="clear"></div>
	</div>
	<!--BODY VIDEO -->
	<?php include('complements/cont_video.php') ?>
	<!--BODY PRODUCTOS -->
	<?php include('complements/cont_producto.php') ?>
	<!--BODY GOOGLE MAP -->
	<?php include('complements/cont_map.php') ?>
	<!--PIE DE PAGINA -->
	<div id="fondo_pie_pag">

		<div class="container-12" id="cont_pie_pag">
			<!--LOGOTIPO-->
			<div class="grid-3" id="pie_logo">
				<div id=logo_pp>
					<p>Bio</p>
					<p1>Dinamics</p1>
				</div>
			</div>
			<!--CONTACTOS Y REDES SOCIALES-->
			<div class="grid-3">
				<h2>CONTÁCTOS</h2>
				<P>09-5784-9865</P>
				<P>info@biodinamics.com</P>
				<h2>REDES SOCIALES</h2>
			</div>
			<!--PRODUCTOS-->
			<div class="grid-3">
				<h2>PRODUCTOS</h2>
				<P>>  Producto Número 1</P>
				<P>>  Producto Número 2</P>
				<P>>  Producto Número 3</P>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="fondo_pie_pag_2">
		<p>Copyright © 2018 · Bio-Dinamics S.A. Todos los Derechos Reservados</p>
	</div>


<!--FIN BODY -->
<?php include('complements/script_slider.php') ?>

</body>
</html>