<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>CIT - Consulta de infracciones de transito</title>

	<!-- Bootstrap core CSS -->
	<link href="{urlCss}bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="{url}assets/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link href="{urlCss}magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="{urlCss}freelancer.min.css" rel="stylesheet">


	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font: 16px Arial;
		}

		/*the container must be positioned relative:*/
		.autocomplete {
			position: relative;
			display: inline-block;
		}

		input {
			border: 1px solid transparent;
			background-color: #f1f1f1;
			padding: 10px;
			font-size: 16px;
		}

		input[type=text] {
			background-color: #f1f1f1;
			width: 100%;
		}

		input[type=submit] {
			background-color: DodgerBlue;
			color: #fff;
			cursor: pointer;
		}

		.autocomplete-items {
			position: absolute;
			border: 1px solid #d4d4d4;
			border-bottom: none;
			border-top: none;
			z-index: 99;
			/*position the autocomplete items to be the same width as the container:*/
			top: 100%;
			left: 0;
			right: 0;
		}

		.autocomplete-items div {
			padding: 10px;
			cursor: pointer;
			background-color: #fff;
			border-bottom: 1px solid #d4d4d4;
		}

		/*when hovering an item:*/
		.autocomplete-items div:hover {
			background-color: #e9e9e9;
		}

		/*when navigating through the items using the arrow keys:*/
		.autocomplete-active {
			background-color: DodgerBlue !important;
			color: #ffffff;
		}
	</style>

</head>


<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top"><h1 style="color: yellow;">CIT</h1><h6 style="text-transform:lowercase">Consulta de Infracciones <br>de transito</h6></a>
		<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick='{modalLogin}' href="{urlPanel}">{nameBtnLogin}</a>
				</li>
				<?php
				if($modalLogin == ""){
					echo '<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{urlPanel}/logoun">Cerrar Session</a>
					</li>';
				}
				?>
			</ul>
		</div>
	</div>
</nav>


<div class="modals">
	<!-- Modal -->
	<div class="modal fade" id="login" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Iniciar Sesíon</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<h6 id="error" style="color: red;"></h6><hr>

					<form id="formLogin">
						<div class="form-group">
							<label>Usuario</label>
							<input id="usuario" name="usuario" class="form-control" type="text" value="" placeholder="Usuario" required="required">
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input id="password" name="password" class="form-control" value="" type="password" placeholder="Contraseña" required="required">
						</div>
						<div class="form-group">
							<input id="btnLogin" class="btn btn-success btn-sm" type="submit" value="Iniciar Sesíon">
							<input data-dismiss="modal" class="btn btn-danger btn-sm" type="button" value="Cerrar">
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Header -->

<header class="bg-primary text-white text-center">
	<div class="container">
	</div>
	<br><br><br><br><br>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
	<div class="container">
		<h3 class="text-center text-uppercase text-secondary mb-0"><span style="color: yellow;">CIT</span></h3>
		<h6 class="text-center text-uppercase text-secondary mb-0">consulta de infracciones de transito</h6>
		<hr class="star-dark mb-5">
		<div class="row">
			<div class="col-md-6">
				<a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
					<h6 class="text-center">Buscar Vehiculo Por Placa</h6>
					<div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
						<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
							<h6>Buscar Vehiculo Por Placa</h6>
							<i class="fas fa-search-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="{url}assets/img/placa.jpg" alt="">
				</a>
			</div>


			<div class="col-md-6 ">
				<a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
					<h6 class="text-center">Buscar Vehiculo Por Documento</h6>
					<div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
						<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
							<h6>Buscar Vehiculo Por Documento</h6>
							<i class="fas fa-search-plus fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" style="position: relative; left: 30%" src="{url}assets/img/documento.png" width="120"  alt="">
				</a>
			</div>

		</div>
	</div>
	</div>
</section>



<!-- Footer -->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">2215 John Daniel Drive
					<br>Clark, MO 65243</p>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<ul class="list-inline mb-0">
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-google-plus-g"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-dribbble"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
					<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
			</div>
		</div>
	</div>
</footer>

<div class="copyright py-4 text-center text-white">
	<div class="container">
		<small>Copyright &copy; Your Website 2019</small>
	</div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<h6 class="text-secondary text-uppercase mb-0" style="color: yellow!important;">Busca tu infraccion mediante tu Documento de indentidad</h6>
					<hr class="star-dark mb-5">


					<form autocomplete="off" id="formDocumento">
						<div class="autocomplete" style="width:500px;">
							<input id="documento" type="text" name="documento" class="form-control" placeholder="Documento">
						</div>
						<input type="submit" value="Buscar Infraccion">
					</form>

					<hr>
					<div id="verTableDocumento" style="display: none;">
						<h6>Informacion pertinentes de infracciones cometidas por el titular de la Documento: <label id="labelDocumento"></label></h6>
						<table class="table">
							<thead>
							<tr>
								<th>Documento Titular</th>
								<th>Nombre Titular</th>
								<th>Valor Infraccion</th>
								<th>Detalle de Infraccion</th>
								<th>Fecha Infraccion</th>
								<th>Accion</th>
							</tr>
							</thead>
							<tbody id="tableMultaDocumento">
							</tbody>
						</table>
					</div>
					<hr>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#"><i class="fa fa-close"></i>Cerrar</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<h6 class="text-secondary text-uppercase mb-0" style="color: yellow!important;">Busca tu infraccion mediante la placa de tu Vehiculo</h6>
					<hr class="star-dark mb-5">


					<form autocomplete="off" id="formPlaca">
						<div class="autocomplete" style="width:500px;">
							<input id="placa" type="text" name="placa" class="form-control" placeholder="Placa">
						</div>
						<input type="submit" value="Buscar Infraccion">
					</form>

					<hr>
					<div id="verTablePlaca" style="display: none;">
						<h6>Informacion pertinentes de infracciones cometidas por el titular de la Documento: <label id="labelDocumento"></label></h6>
						<table class="table">
							<thead>
							<tr>
								<th>Documento Titular</th>
								<th>Nombre Titular</th>
								<th>Valor Infraccion</th>
								<th>Detalle de Infraccion</th>
								<th>Fecha Infraccion</th>
								<th>Gestion Infraccion</th>
							</tr>
							</thead>
							<tbody id="tableMultaPlaca">
							</tbody>
						</table>
					</div>
					<hr>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#"><i class="fa fa-close"></i>Cerrar</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row" id="impresion" style="display: none; position: relative; top:20px;">
	<div class="col-md-12 col-lg-12 col-sm-12" style="position: relative; top:100px;">
		<div class="white-box">
			<h3 class="box-title">Factura Multa</h3>
			<div class="table-responsive">
				<table class="table">
					<hr>
					<h6 class="box-title">Datos Personales</h6>
					<thead>
					<tr>
						<th>#</th>
						<th>Documento</th>
						<th>Primer Nombre</th>
						<th>Segundo Nombre</th>
						<th>Primer Apelldio</th>
						<th>Segundo Apellido</th>
					</tr>
					</thead>
					<tbody id="tabla1">
					</tbody>
				</table>

				<hr>
				<h6 class="box-title">Datos agente</h6>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Correo Electronico</th>
					</tr>
					</thead>
					<tbody id="tabla2">
					</tbody>
				</table>
				<hr>
				<h6 class="box-title">Datos de infraccion</h6>
				<table class="table">
					<thead>
					<tr>
						<th>Placa</th>
						<th>Codigo</th>
						<th>Detalle</th>
						<th>Valor</th>
						<th>Fecha</th>
						<th>Estado</th>
					</tr>
					</thead>
					<tbody id="tabla3">
					</tbody>
				</table>
			</div>
			<br><br><br>

			<b>Debes cancelar el pago en la oficinas con un valor de $ <small id="val"></small>
				<br>Fecha Generacion de Factura <small id="fechaA"></small>
			<br><br><br>
			<b>
			<hr>
			<label>Firma: </label><br>
				<span style="position: relative; left: 1px; top:8px;" id="firma"></span><br>____________________
			<br>
			<label>C.C: <small id="cedu"></small></label>
			<hr>
		</div>
	</div>
</div>






<!-- Bootstrap core JavaScript -->
<script src="{urlJs}jquery.min.js"></script>
<script src="{urlJs}bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="{urlJs}jquery.easing.min.js"></script>
<script src="{urlJs}jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="{urlJs}freelancer.min.js"></script>

<script src="{urlJs}myscript.js"></script>


<script>
	{loader}

	var dataImprimir = {};

	$("#formDocumento").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		obj.key = 'documento';
		obj.value = $("#documento").val();
		post.$url = "{urlPost}/getInfraccion";
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		var string = "";
		$("#labelDocumento").html(obj.value);
		for(var i in data){
			string += '<tr>';
			string += '<td>'+data[i].documento+'</td>';
			string += '<td>'+data[i].pNombre+'</td>';
			string += '<td>$ '+data[i].valor+'</td>';
			string += '<td>'+data[i].detalle+'</td>';
			string += '<td>'+data[i].fecha+'</td>';
			var l  = JSON.stringify(data[i]);
			string += "<td><span><a href='#' onclick='imprimir("+l+")' class='text-blue fa fa-print fa-fw'>Imprimir</a></span></td>";
			string += '</tr>';
		}
		$("#verTableDocumento").css("display","block");
		$("#tableMultaDocumento").html(string);
	});

	function imprimir(data = {}){
		var string = "";
		string += '<tr>';
		string += '<td>'+data.persona+'</td>';
		string += '<td>'+data.documento+'</td>';
		string += '<td>'+data.pNombre+'</td>';
		string += '<td>'+data.sNombre+'</td>';
		string += '<td>'+data.pApellido+'</td>';
		string += '<td>'+data.sApellido+'</td>';
		string += '</tr>';
		$("#tabla1").html(string);

		string = "";
		string += '<tr>';
		string += '<td>'+data.usuario+'</td>';
		string += '<td>'+data.nuip+'</td>';
		string += '<td>'+data.nombres+'</td>';
		string += '<td>'+data.email+'</td>';
		string += '</tr>';
		$("#cedu").html(data.nuip);
		$("#firma").html(data.nombres);
		$("#tabla2").html(string);

		string = "";
		string += '<tr>';
		string += '<td>'+data.placa+'</td>';
		string += '<td>'+data.codigo+'</td>';
		string += '<td>'+data.detalle+'</td>';
		string += '<td>$ '+data.valor+'</td>';
		string += '<td>'+data.fecha+'</td>';
		if(data.estado == 1){
			string += '<td>Pagado</td>';
		}else{
			string += '<td>No Pagado</td>';
		}
		string += '</tr>';
		$("#tabla3").html(string);
		$("#val").html("$ "+data.valor);
		var d = new Date();
		$("#fechaA").html(d.getDate()+"/"+(d.getMonth()+1)+"/"+d.getFullYear());

		printDiv("impresion")
	}

	$("#formPlaca").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		obj.key = 'placa';
		obj.value = $("#placa").val();
		post.$url = "{urlPost}/getInfraccion";
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		var string = "";
		$("#labelDocumento").html(obj.value);
		for(var i in data){
			string += '<tr>';
			string += '<td>'+data[i].documento+'</td>';
			string += '<td>'+data[i].pNombre+'</td>';
			string += '<td>$ '+data[i].valor+'</td>';
			string += '<td>'+data[i].detalle+'</td>';
			string += '<td>'+data[i].fecha+'</td>';
			var l  = JSON.stringify(data[i]);
			string += "<td><span><a href='#' onclick='imprimir("+l+")' class='text-blue fa fa-print fa-fw'>Imprimir</a></span></td>";
			string += '</tr>';
		}
		$("#verTablePlaca").css("display","block");
		$("#tableMultaPlaca").html(string);
	});

	$("#formLogin").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		obj.username = $("#usuario").val();
		obj.password = $("#password").val();
		post.$url = "{urlPost}/login";
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		if(data){
			window.location.href = '{url}'+'/panel';
		}else{
			$("#error").html("error usuario y/o contraseña invalida");
		}
	});


	$(document).ready(function () {
		post.$url = "{urlPost}/getDocumentoPlaca";
		post.$sendPost.setPost();
		var data = post.$sendPost.getPost();
		autocomplete(document.getElementById("documento"),data[0].documento);
		autocomplete(document.getElementById("placa"), data[1].placa);
	});




</script>

</body>

</html>
