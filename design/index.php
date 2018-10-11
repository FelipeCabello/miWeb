<?php
	include '../barramenu.php';
?>


<style type="text/css">
	#img {
		text-align: center;
		margin: 0px auto;
		padding: 15px;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){

		$(".logo").hover(function(){
			$(".logocolor").show();
				}, function() {
			$(".logocolor").hide();
		});
	});
</script>


<div class="container" id="img">
	<img src="../img/desing.jpg" style="width: 100%;">
</div>


<div class="container">
	<div style="padding: 20px 0px;">
		<div>
			<h2>Diseño gráfico</h2>
			<p style="color: gray;">¿Eres nuevo y necesitas crear tu marca?</p>
			<p>Un <b>logotipo</b> es el núcleo de la identidad corporativa, define y simboliza el carácter de una empresa u organización.</p>
		</div>
	</div>
</div>


<hr id="hr-normal">
<br>
<br>
<div class="container">
	<h2>¿Cómo creé mi logotipo?</h2>
	<div class="row" style="padding: 20px 0px; margin: auto;">
		<div class="col-sm-12 col-lg-5 logo" style="cursor:pointer; cursor: hand;">
			<div style="position: relative;">
				<center>
					<img src="../img/logoinicio.svg" style="width: 350px;">
				</center>
			</div>
			<div style="position: absolute; top: 0px; left: 50%; margin-left: -175px; display: none;" class="logocolor">
				<center>
					<img src="../img/logoiniciocolor.svg" style="width: 350px;">
				</center>
			</div>
		</div>
		<div class="col-sm-12 col-lg-5" style="margin: 10px;">
			<p>Utilizando una retícula conseguimos organizar y localizar todos esos elementos para que tengan unas proporciones y medidas determinadas.</p>
			<p>En este caso hemos usado una retícula isometrica, esto quiere decir que ademas de lineas verticales y horizontales, tienen  unas que la cruzan con un ángulo 30º. Nos ayudara a darle volumen a nuestro logotipo.</p>
			<p>Hemos usado formas simples, lo que ayuda a entender y memorizar el logotipo con mayor facilidad.</p>
		</div>
	</div>
</div>



<div style="text-align: center; padding: 10px;">
	<h4>Colores utilizados</h4>
</div>

<div class="row" style="margin: 0px;">
	<div class="col-md-12 col-lg-6" style="background: #1a1a1a">
		<h1 style="color: white; margin: 40px; text-align: right;">#1a1a1a</h1>
	</div>
	<div class="col-md-12 col-lg-6" style="background: tomato">
		<h1 style="color: white; margin: 40px; text-align: left;">#ff6347</h1>
	</div>
</div>
<br>
<br>

<div style="text-align: center; padding: 10px;">
	<h4>Tipos de fondos</h4>
</div>
<hr id="hr-normal">

<div style="background-color: #E0E0E0">
	<div class="container">
		<div class="row" style="text-align: center;	">
			<div class="col-md-12 col-lg-4" >
				<p style="padding-top: 20px;"><b>Negro</b></p>
				<img src="../img/logonegro.png" style="width: 100%; padding: 30px;">
			</div>
			<div class="col-md-12 col-lg-4" style="background-color: #1a1a1a;">
				<p style="padding-top: 20px; color: white;"><b>Blanco</b></p>
				<img src="../img/logoblanco.png" style="width: 100%; padding: 30px;">
			</div>
			<div class="col-md-12 col-lg-4">
				<p style="padding-top: 20px;"><b>A color</b></p>
				<img src="../img/logotomato.png" style="width: 100%; padding: 30px;">
			</div>
		</div>
	</div>
</div>
<hr id="hr-normal">
<br>
<br>

<div style="text-align: center; padding: 10px;">
	<h4>Mockups</h4>
</div>


<div style="background-color: #c9b498; color: #4e342e; font-size: 20px;">	
	<div class="container" style="font-family: monospace;">
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<center style="margin-top: 30px;"><b>Tarjetas de visita</b></center>
				<img src="../img/tarjetas.png" style="width: 100%;">
			</div>
			<div class="col-md-12 col-lg-6">
				<center style="margin-top: 30px;"><b>Papelería</b></center>
				<img src="../img/papeleria.png" style="width: 100%;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<center style="margin-top: 30px;"><b>Vaso</b></center>
				<img src="../img/vaso.png" style="width: 100%;">
			</div>
			<div class="col-md-12 col-lg-6">
				<center style="margin-top: 30px;"><b>Caja</b></center>
				<img src="../img/box.png" style="width: 100%;">
			</div>
		</div>
	</div>
</div>



<?php
	include '../finmenu.php';
?>