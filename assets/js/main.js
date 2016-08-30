$(document).ready(function() {
	$("#banner .container").addClass('animated fadeIn');
	
	$(window).on("scroll", function() {
		
		if(scrollY >= 530) {
			$(".up-arrow").css('display', 'block');
		} else {
			$(".up-arrow").css('display', 'none');
		}
		//scroll etdikce dinamik olaraq animation classlar elave olunur
		if(scrollY >= $("#clients").innerHeight()) {
			$("#clients li:nth-child(odd) img").addClass('animated fadeInDown');
			$("#clients li:nth-child(even) img").addClass('animated fadeInUp');
		}

		//#about section
		if(scrollY + 730 >= $("#about .col-sm-6:first-child").offset().top) {
			$("#about .col-sm-6:first-child").addClass('animated fadeInLeft').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
			$("#about .col-sm-6:nth-child(2)").addClass('animated fadeInRight').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#process section
		if(scrollY + 730 >= $("#process .col-sm-6:first-child").offset().top) {
			$("#process .col-sm-6:first-child").addClass('animated fadeInRight').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
			$("#process .col-sm-6:nth-child(2)").addClass('animated fadeInLeft').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		if(scrollY + 730 >= $("#process .col-sm-6:nth-child(4)").offset().top) {
			$("#process .col-sm-6:nth-child(4)").addClass('animated fadeInLeft');
			$("#process .col-sm-6:last-child").addClass('animated fadeInRight');
		}

		//#features section macbook image
		if(scrollY + 730 >= $("#home img").offset().top) {
			$("#home img").addClass('animated flipInX').css({
				animationDelay: '0ms',
				animationDuration: '900ms'
			});
		}

		//#features list section
		if(scrollY + 730 >= $("#features-list").offset().top) {
			$("#features-list .clearfix:first-child").addClass('animated fadeInRight').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		if(scrollY + 730 >= $("#features-list .clearfix:first-child").offset().top + 50) {
			$("#features-list .clearfix:last-child").addClass('animated fadeInLeft').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#newsletter section
		if(scrollY + 730 >= $("#newsletter").offset().top + 10) {
			$("#newsletter .col-lg-5").addClass('animated fadeInLeft').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
			$("#newsletter .col-lg-7").addClass('animated fadeInRight').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#product section
		if(scrollY + 730 >= $("#product").offset().top) {
			$("#product").addClass('animated fadeInUp').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#awards section
		if(scrollY + 600 >= $("#awards").offset().top) {
			$("#awards").addClass('animated fadeInDown').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#feedback section
		if(scrollY + 850 >= $("#feedback").offset().top) {
			$("#feedback .container").addClass('animated fadeInDown').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		if(scrollY + 850 >= $("#feedback-controls").offset().top) {
			$("#feedback-controls").addClass('animated fadeInDown').css({
				animationDelay: '0ms',
				animationDuration: '500ms'
			});
		}

		//#team section
		if(scrollY + 770 >= $("#team .section-content").offset().top) {
			$("#team .section-content .col-md-3:nth-child(odd)").addClass('animated fadeInDown').css({
				animationDelay: '350ms',
				animationDuration: '500ms'
			});
			$("#team .section-content .col-md-3:nth-child(even)").addClass('animated fadeInUp').css({
				animationDelay: '500ms',
				animationDuration: '500ms'
			});
		}


		$(".first-tab").click(function(){
		$(".liOne").addClass("active");
		$(".liTwo").removeClass("active");
		$(".liThree").removeClass("active");
		$("#first-tab").removeClass('hidden');
		$("#third-tab").addClass('hidden');
		$("#second-tab").addClass("hidden");
		});
	$(".second-tab").click(function(){
		$(".liOne").removeClass("active");
		$(".liThree").removeClass("active");
		$("#first-tab").addClass('hidden');
		$("#third-tab").addClass('hidden');
		$("#second-tab").removeClass("hidden");
		$(".liTwo").addClass("active");
		});
	$(".third-tab").click(function() {
		$(".liOne").removeClass("active");
		$(".liTwo").removeClass("active");
		$("#first-tab").addClass('hidden');
		$("#second-tab").addClass('hidden');
		$("#third-tab").removeClass("hidden");
		$(".liThree").addClass("active");
	});
	});

});