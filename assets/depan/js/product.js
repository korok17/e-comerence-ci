/* JS Document */



$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');

	initMenu();
	initSvg();
	initProductSlider();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var hamburger = $('.hamburger');
			var header = $('.header');
			var superContainerInner = $('.super_container_inner');
			var superOverlay = $('.super_overlay');
			var headerOverlay = $('.header_overlay');
			var menu = $('.menu');
			var isActive = false;

			hamburger.on('click', function()
			{
				superContainerInner.toggleClass('active');
				menu.toggleClass('active');
				header.toggleClass('active');
				isActive = true;
			});

			superOverlay.on('click', function()
			{
				if(isActive)
				{
					superContainerInner.toggleClass('active');
					menu.toggleClass('active');
					header.toggleClass('active');
					isActive = false;
				}
			});

			headerOverlay.on('click', function()
			{
				if(isActive)
				{
					superContainerInner.toggleClass('active');
					menu.toggleClass('active');
					header.toggleClass('active');
					isActive = false;
				}
			});
		}
	}

	/* 

	4. Init SVG

	*/

	function initSvg()
	{
		if($('img.svg').length)
		{
			jQuery('img.svg').each(function()
			{
				var $img = jQuery(this);
				var imgID = $img.attr('id');
				var imgClass = $img.attr('class');
				var imgURL = $img.attr('src');

				jQuery.get(imgURL, function(data)
				{
					
					var $svg = jQuery(data).find('svg');

					
					if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
					}
					
					if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
					}

					
					$svg = $svg.removeAttr('xmlns:a');

					
					$img.replaceWith($svg);
				}, 'xml');
			});
		}	
	}

	/* 

	5. Init Product Slider

	*/

	function initProductSlider()
	{
		var carousel = $('#carousel');
		var prev = $('.fs_prev');
		var next = $('.fs_next');
		var slideCount = $('#carousel .slides > li').length;
		carousel.flexslider(
		{
			animation: "slide",
			direction:'vertical',
			reverse: false,
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			animationSpeed: 300,
			after: function(slider)
			{
				var i = slider.currentSlide;
				console.log(i);
				if(i === 0)
				{
					prev.addClass('disabled');
				}
				else
				{
					prev.removeClass('disabled');
				}

				if(i < (slideCount - 3))
				{
					next.removeClass('disabled');
				}
				else
				{
					next.addClass('disabled');
				}
			}
		});

		$('#slider').flexslider(
		{
			animation: "slide",
			direction:'vertical',
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false
		});

		var thumbs = $('#carousel .slides > li');
		thumbs.each(function()
		{
			var thumb = $(this);
			thumb.on('click', function()
			{
				var selectedIndex = thumbs.index(thumb);
				$('#slider').flexslider(selectedIndex);
			});
		});

		// Custom Navigation
		if(prev.length)
		{
			prev.on('click', function()
			{
				if(!prev.hasClass('disabled'))
				{
					$('#carousel').flexslider('prev');
				}
			});
		}

		if(next.length)
		{
			var next = $('.fs_next');
			next.on('click', function()
			{
				if(!next.hasClass('disabled'))
				{
					$('#carousel').flexslider('next');
				}
			});
		}
	}

});