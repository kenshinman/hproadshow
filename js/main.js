$(function () {
	$('a[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});


$(document).ready(function () {
	$('#arrival_date, #depature_date').pickadate();
	//init parallax
	$('.banner').parallax({
		imageSrc: "images/bg2.jpg"
	});

	$(document).scroll(function () {
		//get banner height
		var bannerHeight = $('.banner').height();
		//console.log(bannerHeight);
		if ($(window).scrollTop() >= (bannerHeight + 5)) {
			$('.navbar').addClass('navbar-fixed-top');
			$('section.container').css({
				"marginTop": "50px"
			})
			//alert('yup')
		} else {
			$('.navbar').removeClass('navbar-fixed-top');
			$('section.container').css({
				"marginTop": "0"
			})
		}
	});

	var navLink = $('#navbar.collapse a');
	navLink.on('click', function () {
		$('.collapse').collapse('hide');
	});

	$('#registration-form').on('submit', function (e) {
		e.preventDefault();
		var overlay = $('.reg-overlay');
		overlay.css({
			display: "flex",
			"justify-content": "center",
			"align-items": "center"
		});
		//return false;

		var formData = {
			fullname: e.target.fullname.value,
			email: e.target.email.value,
			company_name: e.target.company_name.value,
			company_address: e.target.company_address.value,
			passport_number: e.target.passport_number.value,
			passport_issue_date: e.target.passport_issue_date.value,
			passport_expiry_date: e.target.passport_expiry_date.value,
			country: e.target.country.value,
			arrival_date: e.target.arrival_date.value,
			depature_date: e.target.depature_date.value,
			meal_type: e.target.meal_type.value,
			beverage_preference: e.target.beverage_preference.value,
		}


		$.ajax({
			type: "POST",
			url: "process/insert.php",
			data: formData,
			dataType: "json",
			success: function (data) {
				if (data.status == "success") {

					//clear form & close modal
					e.target.fullname.value = "";
					e.target.email.value = "";
					e.target.company_name.value = "";
					e.target.company_address.value = "";
					e.target.passport_number.value = "";
					e.target.arrival_date.value = "";
					e.target.depature_date.value = "";
					e.target.country.value = "";
					e.target.meal_type.value = "";
					e.target.beverage_preference.value = "";
					//console.log('cool');
					//hide bs modal
					$('.bs-example-modal-lg').modal('hide');

					setTimeout(function () {
						//hide overlay
						overlay.hide();

						//show bs notification
						$.notify({
							// options
							icon: 'glyphicon glyphicon-thumbs-up',
							message: '<p><strong>Success</strong></p><p>Your Registration was successful.</p><p>A confirmation mail has been sent to your registered email.</p>'
						}, {
							// settings
							type: 'success',
							delay: 5000
						});
					}, 3000)
				} else if (data.status == 'error') {
					alert('error')
				}

			},
			error: function (data) {
				console.log(data);
				$('.bs-example-modal-lg').modal('hide');

				setTimeout(function () {
					overlay.hide();
					$.notify({
						// options
						icon: 'glyphicon glyphicon-thumbs-up',
						message: '<p><strong>Error</strong></p><p>Something went rong</p><p>Please check your internet connection and try again</p>'
					}, {
						// settings
						type: 'danger',
						delay: 5000
					});
				}, 2500)

				return false;
			}

		});
		//console.log(formData);
		return false;
	})

})
