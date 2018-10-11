<?php
	include '../barramenu.php';
?>

<style type="text/css">
	#fondo {
		background-image: url('../img/a.jpg');
		background-position-y: center;
	    background-repeat: no-repeat;
	    background-position-x: center;
	    background-size: cover;
	    color: white;
	}
	.subtitulo {
		padding: 20px;
		font-size: 20px;
		margin: 0px;
	}
	.subicono {
		margin-right: 7px;
		font-size: 30px;
	}
	.servicios {
		border: 1px solid black;
		width: 100%;
		height: 200px;
		padding: 7px;
		position: relative;
	}
	.servTitulo {
		margin: 20 -8 0 -8;
	    text-align: center;
	    font-size: 25px;
	    font-weight: 700;
	    color: whitesmoke;
	    background: #1a1a1a;
	}
	.servText {
		padding: 10 10 5 10;
	}
	.servIcono {
		position: absolute;
		font-size: 60px;
		left: 50%;
		margin-top: -40px;
		background-color: #f8f9fa;
		border: 7px solid #f8f9fa;
	}
	.precio {
   		border: 2px solid tomato;
		width: 100%;
		padding: 7px;
		cursor:pointer; 
		cursor: hand;
	}
	.precioList {
   		list-style-type: none;
	}
	.precSpan {
		color: tomato;
		padding-left: 5px;
	}
	.precDinero {
		text-align: right;
		margin-right: 20px;
		font-size: 25px;
	}
	.precIcono {
		font-size: 60px;
		margin: 40px;
	}
	.precTitulo {
		color: tomato;
		text-align: center;
		font-weight: 700;
	}
	.precText {
		padding: 20 0 0 20;
	}
	.prec {
		text-align: right;
		padding-top: 20px;
		margin: 0 20 0 0;
		font-size: 18px;
		color: gray;
	}
	.precEuro {
		font-size: 14px;
		position: absolute;
	}
	.padding{
		padding: 20px;
		max-width: 350px;
		margin: 0 auto;
	}
	.titulo {
		padding: 30px 0px 30px 0px
	}
	.btn-cont {
		border-radius: 0px;
		color: #1a1a1a;
		background-color: #e2e2e2;
		font-size: 20px;
		border: 2px solid #adadad;
		padding: 10px 30px 10px 30px;
	}
	.marcado {
		border-radius: 0px;
		background-color: tomato;
		border: 2px solid #a03522;
		color: #f8f9fa;
		font-weight: 700;
	}
	.marcadoPrecio {
		border: 2px solid #ffc107;
		background-color: #fffffa;
	}
	.marcTitulo {
		color: #ffc107;
	}

	/* CSS BARRAS */
	#skills span {
	    top: -35px;
	    left: 2%;
	    position: relative;
	    font-size: 20px;
	    color: #f5f5f5;
	}
	progress {
	    background-color: #f3f3f3;
	    border: 0;
	    height: 2.5em;
	    width: 100%;
	}
	progress::-webkit-progress-bar {
	    background-color: #D6DBDF;
	}
	progress::-webkit-progress-value {
	    background-color: #85929E;
	}
	progress::-moz-progress-bar {
		background-color: #85929E;
	}
	/* CSS BARRAS 2 */
	/* Make sure that padding behaves as expected */
	* {
		box-sizing:border-box
	}

	.barra {
		background-color: #d9d9d9;
		margin-bottom: 20px;
		position: relative;
	}

	.nombre-skill {
		position: absolute;
	    top: 7px;
	    left: 40px;
	    font-size: 20px;
	    color: white;
	}

	.skills {
	    text-align: right;
	    padding: 10px;
	    color: white;
	}
</style>


<script type="text/javascript">
	$(document).ready(function(){
		$(".contacto").hover(function(){
			$(this).addClass("marcado");
				}, function() {
			$(this).removeClass("marcado")
		});

		$(".precio").hover(function(){
			$(this).addClass("marcadoPrecio");
			$(this).children(".precTitulo").addClass("marcTitulo");
				}, function() {
			$(this).removeClass("marcadoPrecio");
			$(this).children(".precTitulo").removeClass("marcTitulo");
		});



	});
</script>



<div style="padding: 15px;">
	<div class="container" id="fondo">
		<div class="row" style="text-align: center;">
			<div class="col-sm-12 col-md-12 col-lg-4">
				<img src="../img/yo.png" style="max-width: 100%;">
			</div>
			<div class="col-sm-12 col-md-12 col-lg-8" style="padding: 20px">
				<div id="info">
					<br>
					<h1><b>Felipe C. Cañada</b></h1>
					<h3 style="color: #ff6347">Programador web freelance</h3>
					<hr id="hr" style="background-color: #ffc107 !important">
					<h2>Dale a tu negocio <b>presencia profesional</b> en internet con tu propia <b>página web</b>.</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<hr id="hr-normal">
<div style="background-color: #e9ecef;">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-4">
				<p class="subtitulo"><i class="fas fa-hand-holding-usd subicono"></i> Precio económico</p>
			</div>
			<div class="col-md-4">
				<p class="subtitulo"><i class="fas fa-pen-nib subicono"></i> 100% personalizado</p>
			</div>
			<div class="col-md-4">
				<p class="subtitulo"><i class="far fa-file-powerpoint subicono"></i> Sin plantillas</p>
			</div>
		</div>
	</div>
</div>
<hr id="hr-normal">
<br>
<br>


<div class="container"  style="position: relative;">
	<h2>Mis servicios</h2>
	<br>
	<br>
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-3 padding">
			<div class="servicios">
				<i class="fas fa-desktop servIcono" style="margin-left: -30px"></i>
				<p class="servTitulo">Diseño web</p>
				<p class="servText">Páginas con diseño web adaptable para tablets y moviles, con estilo moderno y útil.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 padding">
			<div class="servicios">
				<i class="far fa-file-code servIcono" style="margin-left: -20px"></i>
				<p class="servTitulo">Programación</p>
				<p class="servText">Programación desde cero y toltamente personalizado.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 padding">
			<div class="servicios">
				<i class="fas fa-draw-polygon servIcono" style="margin-left: -20px"></i>
				<p class="servTitulo">Diseño gráfico</p>
				<p class="servText">Creación de logotipos y distintivos para tu empresa.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 padding">
			<div class="servicios">
				<i class="fas fa-cog servIcono" style="margin-left: -30px"></i>
				<p class="servTitulo">Mantenimiento</p>
				<p class="servText">Copias de seguridad, servicios de red y actualizaciones.</p>
			</div>
		</div>	
	</div>
</div>
<br>
<br>


<div style="background-color: #1a1a1a; color: #f5f5f5;">
	<div class="container">
		<h2 class="titulo">Contacto</h2>
		<div class="row" style="padding-bottom: 20px;">
			<div class="col-md-12 col-lg-6">
				<p>Ponte en contacto conmigo y te resolveré cualquier tipo de dudas. Suelo estar disponible las 24 horas y responderé lo más pronto posible.</p>
			</div>
			<div class="col-md-12 col-lg-6" style="text-align: center;">
				<a href="/camarlengo/contacto/">
					<input type="button" name="contacto" value="¿Hablamos?" class="btn btn-cont contacto">
				</a>
			</div>
		</div>
	</div>
</div>
<br>
<br>


<div class="container">
	<h2>Precios /<span style="color: gray; font-size: 20px;"> Negociable</span></h2>
	<br>
	<div class="row">
		<div class="col-md-12 col-lg-4 padding">
			<div class="precio">
				<div class="precTitulo">
					<i class="fas fa-chess-pawn precIcono"></i>
					<p>PÁGINA BÁSICA</p>
				</div>
				<div class="precText">
					<p>DISEÑO PERSONALIZADO</p>
					<p>ADAPTADO A MÓVIL <span class="precSpan">SI</span></p>
					<p>PÁGINAS <span class="precSpan">5</span></p>
					<p>BASE DE DATOS <span class="precSpan">NO</span></p>
					<p class="prec">A partir de</p>
					<p class="precDinero">250<span class="precEuro">€</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 padding">
			<div class="precio">
				<div class="precTitulo">
					<i class="fas fa-chess-bishop precIcono"></i>
					<p>PÁGINA INTERMEDIA</p>
				</div>
				<div class="precText">
					<p>DISEÑO PERSONALIZADO</p>
					<p>ADAPTADO A MÓVIL <span class="precSpan">SI</span></p>
					<p>PÁGINAS <span class="precSpan">7</span></p>
					<p>BASE DE DATOS <span class="precSpan">SI</span></p>
					<p class="prec">A partir de</p>
					<p class="precDinero">600<span class="precEuro">€</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 padding">
			<div class="precio">
				<div class="precTitulo">
					<i class="fas fa-chess-queen precIcono"></i>
					<p>PÁGINA AVANZADA</p>
				</div>
				<div class="precText">
					<p>DISEÑO PERSONALIZADO</p>
					<p>ADAPTADO A MÓVIL <span class="precSpan">SI</span></p>
					<p>PÁGINAS <span class="precSpan">+7</span></p>
					<p>BASE DE DATOS <span class="precSpan">SI</span></p>
					<p class="prec">A partir de</p>
					<p class="precDinero">900<span class="precEuro">€</span></span></p>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<hr id="hr-normal">
<div style="background-color: #e9ecef; padding-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<h2 class="titulo">Conocimientos</h2>
				<p>Tengo conocimientos avanzados para la creación de páginas web desde cero, con los que podré adaptarme a tus necesidades y diseño que quieras.</p>
				<p>Aunque también me puedo adaptar a proyectos ya comenzados con el fin de mejorarlos o administrarlos.</p>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="barra">
					<span class="nombre-skill">HTML5 / CSS3</span>
					<div class="skills" style="width: 95%; background-color: #808080;">95%</div>
				</div>
				<div class="barra">
					<span class="nombre-skill">NodeJS</span>
					<div class="skills" style="width: 80%; background-color: #808080;">80%</div>
				</div>
				<div class="barra">
					<span class="nombre-skill">Java / PHP</span>
					<div class="skills" style="width: 90%; background-color: #808080;">90%</div>
				</div>
				<div class="barra">
					<span class="nombre-skill">MySQL</span>
					<div class="skills" style="width: 80%; background-color: #808080;">80%</div>
				</div>
				<div class="barra">
					<span class="nombre-skill">Photoshop / Illustrator</span>
					<div class="skills" style="width: 75%; background-color: #808080;">75%</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr id="hr-normal">
<br>
<br>


<?php
	include '../finmenu.php';
?>


