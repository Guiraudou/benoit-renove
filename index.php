<?php ini_set('default_charset', "utf-8"); define('ACCESS_TOKEN', strtotime('2023-08-25 15:00:00')); ?>
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
		<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Galerie</h2>
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
						<h5 class="text-center mb-3">Contactez moi pour toute question, pour expliquer votre projet ou pour obtenir un devis gratuitement.</h5>
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
				<!-- Contenu des Mentions Légales -->
				<div class="row mb-3">
					<div class="col-6 text-center">
						<div class="card">
							<div class="card-body">
								<i class="fas fa-info-circle fa-2x"></i>
								<h5>Informations légales</h5>
								<div><span class="fw-bold">Directeur de la publication :</span> Benoit Guiraudou</div>
								<div><span class="fw-bold">Adresse :</span> 24 avenue des Platanes - 34310 Montady - France</div>
								<div><span class="fw-bold">SIRET :</span> 809 644 941 00027</div>
								<div><span class="fw-bold">Email :</span> <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a></div>
								<div><span class="fw-bold">Téléphone :</span> <a href="tel:+33689386801">06 89 38 68 01</a></div>
							</div>
						</div>
					</div>
					<div class="col-6 text-center">
						<div class="card">
							<div class="card-body">
								<i class="fas fa-cloud fa-2x"></i>
								<h5>Hébergement</h5>
								<div><span class="fw-bold">Hébergeur :</span> OVH</div>
								<div><span class="fw-bold">Adresse :</span> 2 rue Kellermann - BP 80157 - 59053 ROUBAIX CEDEX 1 - France</div>
							</div>
						</div>
					</div>
				</div>

				<p>L'entreprise individuelle Benoit Guiraudou, soucieuse des droits des individus, notamment au regard des traitements automatisés et dans une volonté de transparence avec ses clients, a mis en place une politique reprenant l’ensemble de ces traitements, des finalités poursuivies par ces derniers ainsi que des moyens d’actions à la disposition des individus afin qu’ils puissent au mieux exercer leurs droits.</p>
				<p>Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : <a href="https://www.cnil.fr">www.cnil.fr</a></p>
				<p>La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d'utilisation qui suivent.</p>
				<p>La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la durée d'utilisation du site et jusqu'à ce qu'une nouvelle version la remplace.</p>

				<h5>Article 1 - Mentions légales</h5>
				<p class="subtitle">1.1 Site (ci-après « le site ») :</p>
				<p>Benoit Rénove</p>

				<p class="subtitle">1.2 Éditeur (ci-après « l'éditeur ») :</p>
				<p>L'entreprise indivuduelle <strong>Benoit Guiraudou</strong></p>
				<p>située : 24 Avenue des Platanes, 34310 Montady, France</p>
				<p>SIRET : 809 644 941</p>
				<p>n° de téléphone : <a href="tel:+33689386801">+33689386801</a></p>
				<p>adresse email : <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a></p>

				<p class="subtitle">1.3 Hébergeur (ci-après « l'hébergeur ») :</p>
				<p>Benoit Rénove est hébergé par OVH, dont le siège social est situé : 2 rue Kellermann, BP 80157, 59053 ROUBAIX CEDEX 1.</p>

				<h5>Article 2 - Accès au site</h5>
				<p>L'accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation commerciale et notamment l'envoi de courriers électroniques non sollicités.</p>

				<h5>Article 3 - Contenu du site</h5>
				<p>Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.</p>
				<p>Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.</p>
				
				<h5>Article 4 - Gestion du site</h5>
				<p>Pour la bonne gestion du site, l'éditeur pourra à tout moment :</p>
				<ul>
					<li>suspendre, interrompre ou limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internautes ;</li>
					<li>supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales ;</li>
					<li>suspendre le site afin de procéder à des mises à jour.</li>
				</ul>
				
				<h5>Article 5 - Responsabilités</h5>
				<p>La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au site ou à une de ses fonctionnalités.</p>
				<p>Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par ailleurs seul responsable des sites et données que vous consultez.</p>
				<p>L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :</p>
				<ul>
					<li>du fait de l'usage du site ou de tout service accessible via Internet ;</li>
					<li>du fait du non-respect par vous des présentes conditions générales.</li>
				</ul>
				<p>L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.</p>
				<p>Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner contre vous pour obtenir l'indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.</p>
				
				<h5>Article 6 - Liens hypertextes</h5>
				<p>La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est autorisée par l'éditeur. Tout lien devra être retiré sur simple demande de l'éditeur.</p>
				<p>Toute information accessible via un lien vers d'autres sites n'est pas publiée par l'éditeur. L'éditeur ne dispose d'aucun droit sur le contenu présent dans ledit lien.</p>
				
				<h5>Article 7 - Collecte et protection des données</h5>
				<p>Vos données sont collectées par l'entreprise individuelle Benoit Guiraudou.</p>
				<p>Une donnée à caractère personnel désigne toute information concernant une personne physique identifiée ou identifiable (personne concernée) ; est réputée identifiable une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un nom, un numéro d'identification ou à un ou plusieurs éléments spécifiques, propres à son identité physique, physiologique, génétique, psychique, économique, culturelle ou sociale.</p>
				<p>Les informations personnelles pouvant être recueillies sur le site sont principalement utilisées par l'éditeur pour la gestion des relations avec vous, et le cas échéant pour le traitement de vos commandes.</p>
				<p>Les données personnelles collectées sont les suivantes :</p>
				<ul>
					<li>nom et prénom</li>
					<li>adresse mail</li>
					<li>numéro de téléphone</li>
				</ul>
				
				<h5>Article 8 - Droit d’accès, de rectification et de déréférencement de vos données</h5>
				<p>En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants :</p>
				<ul>
					<li>le droit d’accès : ils peuvent exercer leur droit d'accès, pour connaître les données personnelles les concernant, en écrivant à l'adresse électronique ci-dessous mentionnée. Dans ce cas, avant la mise en œuvre de ce droit, la Plateforme peut demander une preuve de l'identité de l'utilisateur afin d'en vérifier l'exactitude ;</li>
					<li>le droit de rectification : si les données à caractère personnel détenues par la Plateforme sont inexactes, ils peuvent demander la mise à jour des informations ;</li>
					<li>le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données ;</li>
					<li>le droit à la limitation du traitement : les utilisateurs peuvent de demander à la Plateforme de limiter le traitement des données personnelles conformément aux hypothèses prévues par le RGPD ;</li>
					<li>le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux hypothèses prévues par le RGPD ;</li>
					<li>le droit à la portabilité : ils peuvent réclamer que la Plateforme leur remette les données personnelles qu'ils ont fournies pour les transmettre à une nouvelle Plateforme.</li>
				</ul>
				
				<p>Vous pouvez exercer ce droit en nous contactant, à l’adresse suivante : 24 Avenue des Platanes - 34310 Montady - France</p>
				<p>Ou par email, à l’adresse : <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a></p>
				
				<p>Toute demande doit être accompagnée de la photocopie d’un titre d’identité en cours de validité signé et faire mention de l’adresse à laquelle l'éditeur pourra contacter le demandeur. La réponse sera adressée dans le mois suivant la réception de la demande. Ce délai d'un mois peut être prolongé de deux mois si la complexité de la demande et/ou le nombre de demandes l'exigent.</p>
				<p>De plus, et depuis la loi n°2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilité d’organiser le sort de leurs données après leur décès. Pour plus d’information sur le sujet, vous pouvez consulter le site Internet de la CNIL : <a href="https://www.cnil.fr">www.cnil.fr</a>.</p>
				<p>Les utilisateurs peuvent aussi introduire une réclamation auprès de la CNIL sur le site de la CNIL : <a href="https://www.cnil.fr">www.cnil.fr</a>.</p>
				<p>Nous vous recommandons de nous contacter dans un premier temps avant de déposer une réclamation auprès de la CNIL, car nous sommes à votre entière disposition pour régler votre problème.</p>
				
				<h5>Article 9 - Utilisation des données</h5>
				<p>Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services de la Plateforme, leur amélioration et le maintien d'un environnement sécurisé. La base légale des traitements est  l’exécution du contrat entre l’utilisateur et la Plateforme. Plus précisément, les utilisations sont les suivantes :</p>
				<ul>
					<li>accès et utilisation de la Plateforme par l'utilisateur ;</li>
					<li>gestion du fonctionnement et optimisation de la Plateforme ;</li>
					<li>mise en œuvre d'une assistance utilisateurs ;</li>
					<li>vérification, identification et authentification des données transmises par l'utilisateur ;</li>
					<li>personnalisation des services en affichant des publicités en fonction de l'historique de navigation de l'utilisateur, selon ses préférences ;</li>
					<li>prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ;</li>
					<li>gestion des éventuels litiges avec les utilisateurs ;</li>
					<li>envoi d'informations commerciales et publicitaires, en fonction des préférences de l'utilisateur ;</li>
				</ul>

				<h5>Article 10 - Politique de conservation des données</h5>
				<p>La Plateforme conserve vos données pour la durée nécessaire pour vous fournir ses services ou son assistance.</p>
				<p>Dans la mesure raisonnablement nécessaire ou requise pour satisfaire aux obligations légales ou réglementaires, régler des litiges, empêcher les fraudes et abus ou appliquer nos modalités et conditions, nous pouvons également conserver certaines de vos informations si nécessaire, même après que vous ayez fermé votre compte ou que nous n'ayons plus besoin pour vous fournir nos services.</p>

				<h5>Article 11- Partage des données personnelles avec des tiers</h5>
				<p>Les données personnelles peuvent être partagées avec des sociétés tierces exclusivement dans l’Union européenne, dans les cas suivants :</p>
				<ul>
					<li>lorsque l'utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ;</li>
					<li>quand l'utilisateur autorise le site web d'un tiers à accéder à ses données ;</li>
					<li>quand la Plateforme recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicité et les services de paiement. Ces prestataires disposent d'un accès limité aux données de l'utilisateur, dans le cadre de l'exécution de ces prestations, et ont l'obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère personnel ;</li>
					<li>si la loi l'exige, la Plateforme peut effectuer la transmission de données pour donner suite aux réclamations présentées contre la Plateforme et se conformer aux procédures administratives et judiciaires.</li>
				</ul>

				<h5>Article 12 - Offres commerciales</h5>
				<p>Vous êtes susceptible de recevoir des offres commerciales de l'éditeur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a>.</p>
				<p>Vos données sont susceptibles d’être utilisées par les partenaires de l'éditeur à des fins de prospection commerciale, si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a>.</p>
				<p>Si, lors de la consultation du site, vous accédez à des données à caractère personnel, vous devez vous abstenir de toute collecte, de toute utilisation non autorisée et de tout acte pouvant constituer une atteinte à la vie privée ou à la réputation des personnes. L'éditeur décline toute responsabilité à cet égard.</p>
				<p>Les données sont conservées et utilisées pour une durée conforme à la législation en vigueur.</p>

				<h5>Article 13 - Cookies</h5>

				<p>Qu’est-ce qu’un « cookie » ?</p>
				<p>Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone,…) et lu par exemple lors de la consultation d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisé (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi).</p>
				<p>Le site peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.</p>
				<p>Le cas échéant, des « cookies » émanant de l'éditeur du site et/ou des sociétés tiers pourront être déposés sur votre terminal, avec votre accord. Dans ce cas, lors de la première navigation sur ce site, une bannière explicative sur l’utilisation des « cookies » apparaîtra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l’utilisation desdits « cookies ». Le consentement donné sera valable pour une période de treize (13) mois. L'utilisateur a la possibilité de désactiver les cookies à tout moment.</p>

				<p>Les cookies suivants sont présents sur ce site :</p>

				<p class="subtitle">Cookies Google :</p>
				<ul>
					<li>Google analytics : permet de mesurer l'audience du site ;</li>
					<li>Google tag manager : facilite l’implémentation des tags sur les pages et permet de gérer les balises Google ;</li>
					<li>Google Adsense : régie publicitaire de Google utilisant les sites web ou les vidéos YouTube comme support pour ses annonces ;</li>
					<li>Google Dynamic Remarketing : permet de vous proposer de la publicité dynamique en fonction des précédentes recherches ;</li>
					<li>Google Adwords Conversion : outil de suivi des campagnes publicitaires adwords ;</li>
					<li>DoubleClick : cookies publicitaires de Google pour diffuser des bannières.</li>
				</ul>

				<p>La durée de vie de ces cookies est de treize mois.</p>

				<h5>Article 14 - Photographies et représentation des produits</h5>
				<p>Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.</p>

				<h5>Article 15 - Loi applicable</h5>
				<p>Les présentes conditions d'utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège social de l'éditeur, sous réserve d'une attribution de compétence spécifique découlant d'un texte de loi ou réglementaire particulier.</p>

				<h5>Article 16 - Contactez-nous</h5>
				<p>Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un message à l'adresse suivante : <a href="mailto:contact@benoit-renove.fr">contact@benoit-renove.fr</a>.</p>
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

<script src="app.js?<?php echo ACCESS_TOKEN; ?>"></script>

</body>
</html>