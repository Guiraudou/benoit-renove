$(function() {

	let PHOTO_PATH = 'images/gallery/';

	// ---------- Fonctions ----------

	String.prototype.capitalize = String.prototype.capitalize || function() {
		return this.charAt(0).toUpperCase() + this.slice(1);
	}

	function getMonthName(jsDate, locale="fr-FR") {
		return jsDate.toLocaleDateString(locale, {month: 'long'});
	}

	function formatPhoneNumberNational(phoneNumber, localCountryIsoCode='FR') {
		try {
			const number = libphonenumber.parsePhoneNumber(phoneNumber, localCountryIsoCode.toUpperCase());
			return number != null ? number.formatNational() : '';
		} catch (error) {
			console.error(error);
		}
		return '';
	}

	function getHostOfUrl(url, withProtocol=true) {
		url = new URL(url);
		return (withProtocol ? url.protocol + '//' : '') + url.host;
	}

	// ---------- Formatage ----------

	$('.phone_number').each((idx, el) => $(el).text(formatPhoneNumberNational($(el).text())));
	$('.website_url').each((idx, el) => $(el).text(getHostOfUrl($(el).text())));

	// ---------- Galerie ----------

	// Images de la galerie
	const photos = [
		{photo: ['IMG_20230822_150621.jpg', 'IMG_20230922_153119.jpg'], desc: 'Rénovation d’une cuisine', date: '2023-09-01'}, // Cuisine Chateau Paul Mas (Septembre 2023)
		{photo: ['IMG_20230822_150545.jpg', 'IMG_20230922_153132.jpg'], desc: 'Rénovation d’une salle de bain', date: '2023-09-01'}, // Salle d'eau Chateau Paul Mas (Septembre 2023)
		{photo: 'IMG_20230821_124810.jpg', desc: 'Rénovation d’une salle d’eau', date: '2023-08-01'}, // Salle d'eau Domancy (Août 2023)
		{photo: ['IMG_20230610_183215.jpg', 'IMG_20231115_190624.jpg'], desc: 'Rénovation d’une buanderie', date: '2023-07-01'}, // Buanderie Montady (Juillet 2023)
		{photo: 'IMG_20230807_122448.jpg', desc: 'Pose d’une cuisine', date: '2023-06-01'}, // Cuisine Bouafle (Août 2023)
		{photo: 'IMG_20230312_181221.jpg', desc: 'Pose d’une cuisine', date: '2023-03-01'}, // Cuisine Le-Plessis-Bouchard (Mars 2023)
		{photo: 'IMG_20201210_191517.jpg', desc: 'Création d’un dressing', date: '2022-12-01'}, // Dressing Auvers-sur-Oise (Décembre 2020)
		{photo: 'IMG_20220813_184818b.jpg', desc: 'Rénovation d’un T1', date: '2022-08-01'}, // Cuisine Béziers rue Louis Blanc (Août 2022)
		{photo: 'IMG_20211114_173724.jpg', desc: 'Rénovation d’un T2', date: '2021-11-01'}, // Appartement Béziers av Président Wilson (Novembre 2021)
	]; // 'IMG_20171111_110549.jpg'
	const galleryDiv = $('#gallery');

	// Méthode carousel
	/*photos.forEach((photoFileName) => {
		galleryDiv.find('.carousel-inner').append('' +
			'<div class="carousel-item">' +
			'<div class="image-frame">' +
			'<img src="images/gallery/'+photoFileName+'" class="d-block w-10 img-thumbnail" alt="Image 1">' +
			'</div>' +
			'</div>'
		);
	});
	galleryDiv.find('.carousel-item:first').addClass('active');*/

	// Méthode fancybox
	photos.forEach(({photo: photoFileName, desc, date: sqlDate}) => {
		let htmlContent;
		if (Array.isArray(photoFileName)) {
			htmlContent = '' +
				'<div class="image_compare">' +
					'<img class="" src="'+PHOTO_PATH+photoFileName[0]+'" alt="" />' +
					'<img class="" src="'+PHOTO_PATH+photoFileName[1]+'" alt="" />' +
				'</div>'
			;
		}
		else {
			let photoUrl = PHOTO_PATH+photoFileName+'';
			htmlContent = '<a class="image-popup-vertical-fit" href="'+photoUrl+'" data-fancybox="gallery" title=""><img src="'+photoUrl+'" class="figure-img2 img-fluid" alt=""></a>';
		}

		const date = new Date(sqlDate+' 00:00:00');

		galleryDiv.find('.gallery_content').append(
			'<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 photo mb-4">'+
				'<div class=" img-thumbnail rounded">' +
					htmlContent+
					'<div class="figure-caption text-center mt-1">'+desc+' — '+getMonthName(date, locale).capitalize()+' '+date.getFullYear()+'</div>' +
				'</div>' +
			'</div>'
		);
	});

	Fancybox.bind("[data-fancybox]", {
		// Your options go here
	});

	// Init photo avant/apres
	const options = {
		// UI Theme Defaults
		controlColor: "#FFFFFF",
		controlShadow: true,
		addCircle: true,
		addCircleBlur: true,

		// Smoothing
		smoothing: false,
		smoothingAmount: 100,

		// Other options
		hoverStart: false,
		verticalMode: false,
		startingPoint: 50
	};
	$('.image_compare').each((idx, el) => new ImageCompare($(el)[0], options).mount())
});