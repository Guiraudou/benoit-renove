<?php ini_set('default_charset', "utf-8"); define('ACCESS_TOKEN', strtotime('2023-11-15 15:00:00')); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- title / desc / keywords-->
	<title>Benoit Rénove - Bricolage et Rénovation</title>
	<meta name="description" content="Prestation en rénovation intérieur de l'habitat : conception/montage de cuisine, pose de parquet et carrelage, enduit/peinture, création de dressing, rénovation de salle de bain, modifications/installations électriques, création de cloisons, isolation de pièce..." />
	<meta name="keywords" content="renovation maison appartement cuisine béziers isolation placo peinture parquet carrelage électricité plomberie" />

	<!-- robots -->
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />

	<!-- affichage -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->

	<!-- preconnect -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="stylesheet" href="bootstrap_5.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="fancybox/fancybox.css">
	<link rel="stylesheet" href="image-compare-viewer_1.6.2/image-compare-viewer.min.css">
	<link rel="stylesheet" href="style.css?<?php echo ACCESS_TOKEN; ?>">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-DYXR3942GY"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-DYXR3942GY');
	</script>
</head>
<body>

<div class="page_start">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark2 p-1">
		<div class="container">
			<a class="navbar-brand p-0 d-flex align-items-center ms-auto" href="#">
				<img src="images/logo.png" alt="Logo Benoit Rénove" class="img-fluid me-2" width="70px">
				<span class="h4 mb-0">Benoit Rénove</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#services">Prestations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#gallery">Galerie</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="#about">À propos</a>
					</li>-->
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Accueil -->
	<section id="home" class="py-5 text-center">
		<div class="container">
			<img src="images/logo.png" alt="Logo Benoit Rénove" class="img-fluid mb-4" width="150">
			<!--<h1 class="display-4 mb-2">Bienvenue chez Benoit Rénove</h1>-->
			<h1 class="display-4 mb-2">Benoit Rénove - Béziers</h1>
			<p class="lead mb-5"><strong>Votre partenaire pour vos projets de rénovation sur Béziers et alentours.</strong></p>
			<a href="#contact" class="btn btn-primary btn-lg mt-4">Me contacter</a>
		</div>
		<!-- Image d'illustration pour la page principale -->
		<!--<div class="text-center mt-5">
			<img src="chemin/vers/image-principale.jpg" alt="Illustration principale" class="img-fluid">
		</div>-->
	</section>
</div>

<!-- Services -->
<section id="services" class="py-5">
	<div class="container">
		<h2 class="text-center">Prestations</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-utensils fa-3x"></i> <!-- Logo pour Montage de cuisine -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Montage de Cuisine</h5>
						<p class="card-text">Nous sommes spécialisés dans le montage de cuisines sur mesure. Confiez-nous votre projet pour une cuisine fonctionnelle et esthétique.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-paint-roller fa-3x"></i> <!-- Logo pour Enduit/Peinture -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Enduit / Peinture</h5>
						<p class="card-text">Donnez vie à vos murs avec notre expertise en enduit et peinture. Des finitions impeccables pour une ambiance qui vous ressemble.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-th fa-3x"></i> <!-- Logo pour Pose de parquet -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Pose de Parquet / Carrelage</h5>
						<p class="card-text">Apportez chaleur et élégance à vos espaces avec notre expertise en pose de parquet et carrelage. Divers matériaux et motifs disponibles.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-sink fa-3x"></i> <!-- Logo pour Changement lavabo -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Changement Lavabo / Robinetterie</h5>
						<p class="card-text">Modernisez votre salle de bains avec nos services de changement de lavabo et robinetterie. Une solution élégante pour un espace fonctionnel.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-tshirt fa-3x"></i> <!-- Logo pour Création de dressing -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Création de Dressing</h5>
						<p class="card-text">Optimisez l'espace de votre chambre avec notre expertise en création de dressings sur mesure. Organisation et élégance garanties.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-bolt fa-3x"></i> <!-- Logo pour Changement radiateur / prises -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Changement Radiateur / Prises</h5>
						<p class="card-text">Modernisez vos installations électriques en changeant radiateurs, prises de courant et interrupteurs. Sécurité et confort améliorés.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-leaf fa-3x"></i> <!-- Logo pour Jardinage -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Jardinage</h5>
						<p class="card-text">Embellissez vos extérieurs avec notre service de jardinage. Entretien, aménagement et création de jardins sur mesure.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-tools fa-3x"></i> <!-- Logo pour Montage de meubles -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Montage de Meubles</h5>
						<p class="card-text">Profitez de vos nouveaux meubles sans le stress du montage. Nous nous occupons du montage pour vous, rapidement et efficacement.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="text-center mt-3">
						<i class="fas fa-hammer fa-3x"></i> <!-- Logo pour Montage de meubles -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Placo / Isolation</h5>
						<p class="card-text">Ré-agencement de pièces, création de cloison, isolation de mur, création de sous-plafond, ouverture de mur, création de cuisine américaine, etc.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Galerie -->
<section id="gallery" class="py-5 bg-light">
	<div class="container">
		<h2 class="text-center mb-4" style="font-family: 'Montserrat', sans-serif;">Galerie</h2>

		<?php /* <div class="before_after_container">
			<div class="img background-img"><img src="https://i.imgur.com/s08MkXC.jpg" alt=""></div>
			<div class="img foreground-img"><img src="https://i.imgur.com/PfIWek4.jpg" alt=""></div>
			<input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
			<div class='slider-button'></div>
		</div> */ ?>

		<div class="row gallery_content">
			<!--<div class="col-md-8 mx-auto">
				<div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
					</div>
					<a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Précédent</span>
					</a>
					<a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Suivant</span>
					</a>
				</div>
			</div>-->
		</div>
	</div>
</section>

<!-- À propos -->
<!--<section id="about" class="py-5">
	<div class="container">
		<h2 class="text-center">À Propos</h2>
		<p>Benoit Rénove est une entreprise spécialisée dans le bricolage et la rénovation. Nous proposons une large gamme de services, allant du montage de cuisine à la pose de parquet en passant par la création de dressing. Basés à Béziers, nous intervenons sur Béziers et ses alentours pour vous accompagner dans tous vos projets.</p>
	</div>
</section>-->

<!-- Contact -->
<section id="contact" class="py-5">
	<div class="container">
		<h2 class="text-center">Contact</h2>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card p-4">
					<div class="card-body">
						<h5 class="text-center mb-3">Contactez-moi pour toute question, pour expliquer votre projet ou pour obtenir un devis gratuitement.</h5>
						<table class="table table-borderless m-0">
							<tr>
								<td class="text-end"><strong>Email :</strong></td>
								<td class="text-center"><a href="mailto:contact@benoit-renove.fr" class="contact-link">contact@benoit-renove.fr</a></td>
							</tr>
							<tr>
								<td class="text-end"><strong>Téléphone :</strong></td>
								<td class="text-center"><a href="tel:+33689386801" class="contact-link">06 89 38 68 01</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal Mentions Légales -->
<div class="modal fade" id="legal_modal" tabindex="-1" aria-labelledby="legal_modal_label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="legal_modal_label">Mentions Légales et Politique de Confidentialité</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php include(__DIR__.'/mention_legales.inc.php'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="d-flex align-items-center fs-4 mb-2">
					<div class="logo-circle">
						<img src="images/logo.png" alt="Logo Benoit Rénove" class="img-fluid me-2" width="30">
					</div>
					Benoit Rénove
				</div>
				<div class="copyright">
					<span>&copy; 2023 Benoit Rénove. Tous droits réservés.</span><br>
					<a href="#legal_modal" data-bs-toggle="modal" class="text-light">Mentions Légales</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="align-items-center justify-content-end">
					<div class="mb-2"><span><i class="fas fa-map-marker-alt me-2 mb-2"></i>Secteur d'intervention : Béziers & alentours</span></div>
					<div class="mb-2"><span class="me-4"><i class="fas fa-phone me-2"></i><a href="tel:+33689386801" class="text-light">06 89 38 68 01</a></span></div>
					<div class="mb-2"><span><i class="fas fa-envelope me-2"></i><a href="mailto:contact@benoit-renove.fr" class="text-light">contact@benoit-renove.fr</a></span></div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
	var locale = 'fr-FR';
	var timeZone = 'Europe/Paris';
	var currency = 'EUR';
</script>

<!-- Liens vers les fichiers JavaScript de Bootstrap et jQuery -->
<script src="bootstrap_5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="jquery_3.7.0/jquery-3.7.0.min.js"></script>
<script src="fancybox/fancybox.umd.js"></script>
<script src="image-compare-viewer_1.6.2/image-compare-viewer.min.js"></script>

<script src="app.js?<?php echo ACCESS_TOKEN; ?>"></script>

</body>
</html>
