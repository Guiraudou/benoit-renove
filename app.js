$(function() {
	// ---------- Galerie ----------

	// Images de la galerie
	const photos = ['IMG_20171111_110549.jpg', 'IMG_20201210_191517.jpg', 'IMG_20211114_173724.jpg', 'IMG_20230312_181221.jpg'];
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
		let photoUrl = 'images/gallery/'+photoFileName+'';
		galleryDiv.find('.gallery_content').append('<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 photo"><a class="image-popup-vertical-fit" href="'+photoUrl+'" data-fancybox="gallery" title=""><img src="'+photoUrl+'" class="img-thumbnail rounded" alt=""></a></div>');
	});

	Fancybox.bind("[data-fancybox]", {
		// Your options go here
	});
});