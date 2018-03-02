<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Rodrigo Ferreira Valentim">
		<meta name="description" content="{$header.description}">
		<meta name="keywords" content="{$header.keywords}">

		<title>{$header.title|escape:'htmlall'}</title>

		<link rel="icon" href="{base_url('/assets/images/favicon.ico')}" type="image/x-icon">

		<!-- Bootstrap core CSS -->
		<link href="{base_url('/assets/css/bootstrap.min.css')}" rel="stylesheet">

		<!-- Bootstrap theme -->

		<!-- Custom styles for this template -->
		<link href="{base_url('/assets/css/rodrigovalentim.css')}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{base_url('/assets/js/html5shiv.js')}"></script>
			<script src="{base_url('/assets/js/respond.min.js')}"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{'/'|base_url}" target="_self"><img src="{'/assets/images/home/Rodrigo_Valentim_vertical.png'|base_url}" alt="Rodrigo Valentim" class="img-responsive center-block"></a>
				</div>
			</div>

<!--
		<nav id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menubuilder">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/"><img src="{base_url('/assets/images/logo_rodrigo_valentim.jpg')}" alt="Rodrigo Valentim" class="logo"></a>
					<a class="navbar-brand" href="/"></a>
				</div>
				<div class="collapse navbar-collapse navbar-menubuilder" id="navbar-menubuilder">
					<ul class="nav navbar-nav navbar-left navbar-static-top">
						<li {if $item ==  1} class="active" {/if}><a href="/astronomo">Astrônomo</a></li>
						<li {if $item ==  5} class="active" {/if}><a href="/aventureiro">Aventureiro</a></li>
						<li {if $item == 10} class="active" {/if}><a href="/dancarino">Dançarino</a></li>
						<li {if $item == 15} class="active" {/if}><a href="/desenvolvedor">Desenvolvedor</a></li>
						<li {if $item == 20} class="active" {/if}><a href="/fotografo">Fotógrafo</a></li>
						<li {if $item == 25} class="active" {/if}><a href="/lutador">Lutador</a></li>
						<li {if $item == 30} class="active" {/if}><a href="/maquiador">Maquiador</a></li>
						<li {if $item == 35} class="active" {/if}><a href="/mergulhador">Mergulhador</a></li>
						<li {if $item == 40} class="active" {/if}><a href="/musico">Músico</a></li>
						<li {if $item == 45} class="active" {/if}><a href="/yogin">Yôgin</a></li>
					</ul>
				</div>
			</div>
		</nav>
-->
