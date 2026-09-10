import $ from "jquery";

const contactModal = () => {
	const form = $('.js-contact-form');
	const modal = $('.js-contact-modal');

	if (!form.length || !modal.length) return;

	const closeModalButton = $(".js-close-contact-modal");
	const openModalButton = $(".js-open-contact-modal");
	const submitButton = form.find('button[type="submit"]');
	const formMessage = form.find('.js-form-message');

	openModalButton.on('click', function (e) {
		e.preventDefault();
		modal.removeClass('hidden').addClass('flex');
	});

	closeModalButton.on('click', function (e) {
		e.preventDefault();
		modal.removeClass('flex').addClass('hidden');
	});

	form.on('submit', function (e) {
		e.preventDefault();

		submitButton.prop('disabled', true);

		$('.js-form-error').addClass('hidden').text('');
		formMessage.addClass('hidden').removeClass('text-red-600 text-green-600').text('');

		const serializedData = form.serialize();

		$.ajax({
			url: '/contact',
			method: 'POST',
			data: serializedData,
			success: function (response) {
				form[0].reset();

				formMessage
					.removeClass('hidden')
					.addClass('text-green-600')
					.text(response.message);
			},
			error: function (xhr) {
				submitButton.prop('disabled', false);

				if (xhr.status === 422) {
					const errors = xhr.responseJSON.errors;

					$.each(errors, function (field, messages) {
						form
							.find(`.js-form-error[data-field="${field}"]`)
							.removeClass('hidden')
							.text(messages[0]);
					});

					return;
				}


				formMessage.removeClass('hidden')
					.addClass('text-red-600')
					.text('A beküldés során hiba történt. Kérjük, próbáld újra.');
			},
			complete: function () {
				submitButton.prop('disabled', false);
			}
		});
	});
}

export default contactModal;