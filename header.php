<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dio-End</title>
	<meta name="description" content="portifolio Dio-end ">
	<meta name="keywords" content="Html5, php, css3">
	<meta name="robots" content="index, follow">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" href="img/icone.png">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
</head>
<body>
     <?php include('include/organisms/menu-mobile.php'); ?>
	<header><!-- == Cabeçalho da pagina == -->
	    
		<div class="logo wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s"><!-- == div que vai armazenar o logo == -->
			<a href="index.html" alt="linca para o inicio do site">
				<img src="img/logo-topo.png" alt="foto do logo no topo da pagina">
			</a>
		</div><!-- fim da div logo -->
		<div class="links">
			<?php include('include/organisms/menu.php'); ?>

			<button class="btn-menu wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" ><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
			<ul class="social"><!-- esta ul vai armazenar as redes sociais  -->
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="https://github.com/diovaneNunes" alt="github" title="Git Hub"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s"><a href="https://www.linkedin.com/in/diovane-pacheti-118589142/" alt="linkedin" title="Linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul><!-- fim da ul das redes sociais  -->
		</div>
		<!-- tag "H1" e "P" que vao ser tituloe subtitulo da pagina -->
		<h1><?php echo $chamada; ?></h1>
		<p>// Desenvolvedor Web // </p>
	</header><!-- fim do cabeçalho -->
	<!-- ======== inicio da tag main comteudo principal ============ -->
		<main>