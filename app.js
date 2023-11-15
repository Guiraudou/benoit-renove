$(function() {
	// ---------- Galerie ----------

	// Images de la galerie
	const photos = [
		['IMG_20230822_150621.jpg', 'IMG_20230922_153119.jpg'], // Cuisine Chateau Paul Mas (Septembre 2023)
		'IMG_20230312_181221.jpg', // Cuisine Le-Plessis-Bouchard (Mars 2023)
		['IMG_20230610_183215.jpg', 'IMG_20231115_190624.jpg'], // Buanderie Montady (Juillet 2023)
		'IMG_20220813_184818b.jpg', // Cuisine Béziers rue Louis Blanc (Août 2022)
		'IMG_20230807_122448.jpg', // Cuisine Bouafle (Août 2023)
		'IMG_20230821_124810.jpg', // Salle d'eau Domancy (Août 2023)
		'IMG_20201210_191517.jpg', // Dressing Auvers-sur-Oise (Décembre 2020)
		'IMG_20211114_173724.jpg', // Appartement Béziers av Président Wilson (Novembre 2021)
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
	photos.forEach((photoFileName) => {
		let htmlContent;
		if (Array.isArray(photoFileName)) {
			let photoUrl1 = 'images/gallery/'+photoFileName[0]+'';
			let photoUrl2 = 'images/gallery/'+photoFileName[1]+'';
			htmlContent = '' +
				'<div class=" img-thumbnail rounded">' +
					'<div class="image_compare">' +
						'<img class="" src="'+photoUrl1+'" alt="" />' +
						'<img class="" src="'+photoUrl2+'" alt="" />' +
					'</div>'+
				'</div>'
			;
		}
		else {
			let photoUrl = 'images/gallery/'+photoFileName+'';
			htmlContent = '<a class="image-popup-vertical-fit" href="'+photoUrl+'" data-fancybox="gallery" title=""><img src="'+photoUrl+'" class="img-thumbnail rounded" alt=""></a>';
		}

		galleryDiv.find('.gallery_content').append('<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 photo mb-4">'+htmlContent+'</div>');
	});

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
	//const element = document.getElementById("image-compare");
	$('.image_compare').each((idx, el) => new ImageCompare($(el)[0], options).mount())

	Fancybox.bind("[data-fancybox]", {
		// Your options go here
	});
});