$(document).ready(function(){
	"use strict";
	// testimonial carousel
	$('.testimonial-slide').owlCarousel({
		loop:true,
		margin:22,
		
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:2
			}
		}
	})
	$('.testimonial-section .header-button a.btn-product').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$('.testimonial-slide button.owl-next').click();
		} else {
			$('.testimonial-slide button.owl-prev').click();
		}
	});
	// logo carousel
	$('.logo-slide').owlCarousel({
		loop:true,
		margin:65,
		
		responsive:{
			0:{
				items:2
			},
			768:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})
	// blog carousel
	$('.blog-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	$('.blog-section .header-button a.btn-product').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$('.blog-carousel button.owl-next').click();
		} else {
			$('.blog-carousel button.owl-prev').click();
		}
	});
	// features-product-carousel
	$('.features-product-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
	$('.Features-Products .header-button a.btn-product').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$('.features-product-carousel button.owl-next').click();
		} else {
			$('.features-product-carousel button.owl-prev').click();
		}
	});
	// new-arrivals-product-carousel
	$('.arrivals-product-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
	$('.arrivals-section .header-button a.btn-product').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$('.arrivals-product-carousel button.owl-next').click();
		} else {
			$('.arrivals-product-carousel button.owl-prev').click();
		}
	});
});
