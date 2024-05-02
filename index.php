<?php include 'config/config.php'; ?>
<?php
	if( isset($_GET['Page']) ){ $Page = $_GET['Page']; }
	else{ $Page = 'Início' ;}

	switch($Page){
		case 'About': 
			$ComplementoDescription = " - Conheça sobre nós";
			$PageTitle = "Sobre nós";
		break;
		case 'Jobs': 
			$ComplementoDescription = " - Veja nossos serviços";
			$PageTitle = "Serviços";
		break;
		case 'Projects': 
			$ComplementoDescription = " - Veja nossos projetos atuais";
			$PageTitle = "Projetos";
		break;
		case 'Contact': 
			$ComplementoDescription = " - Entre em contato conosco para um orçamento";
			$PageTitle = "Contato";
		break;
			default: $PageTitle = "Página Inicial"; $ComplementoDescription = " - Seja bem vindo";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="<?= $SiteDescription . $ComplementoDescription ?>" />
	<meta name="author" content="<?= $SiteAuthor ?>" />
	<title><?= $SiteName . " - " . $PageTitle ?></title>
	<!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/site.webmanifest">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Core theme CSS (includes Bootstrap)-->
	<!-- <link href="css/styles.css" rel="stylesheet" /> -->
	<link href="css/siloe.css" rel="stylesheet" />
</head>

<body>

	<?php 
		if( isset($_GET['Page']) ){ $Page = $_GET['Page']; }
		else{ $Page = "Home"; }

		include 'components/nav.php'; 
		include 'components/banner.php';
	?>

	<div class="container-fluid">

		<?php switch( $Page ){ case $Page : include 'Pages/' . $Page . '/index.php';break; } ?>

	</div>

	<?php include 'components/footer.php';?>

	<!-- Social Icons-->
	<!-- <div class="social-icons">
		<div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
			<a class="btn btn-dark m-3" target="_blank" href="https://www.facebook.com/empreireirasiloe"><i class="fab fa-facebook-f"></i></a>
			<a class="btn btn-dark m-3" target="_blank" href="https://www.instagram.com/siloeempreiteira/"><i class="fab fa-instagram"></i></a>
			<a class="btn btn-dark m-3" target="_blank" href="https://api.whatsapp.com/send?phone=5511930007773&text=Oi%20Alex,%20estou%20vindo%20atrav%C3%A9s%20do%20seu%20site."><i class="fab fa-whatsapp"></i></a>
		</div>
	</div> -->

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>

</body>

</html>