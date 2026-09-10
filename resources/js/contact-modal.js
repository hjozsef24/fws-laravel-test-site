import $ from "jquery";

const contactModal = () => {
    const modal = $('.js-contact-modal')
    const closeModalButton = $(".js-close-contact-modal");
    const openModalButton = $(".js-open-contact-modal");

    openModalButton.on('click', function (e) {
        e.preventDefault();
        modal.removeClass('hidden').addClass('flex');
    });

    closeModalButton.on('click', function (e) {
        e.preventDefault();
        modal.removeClass('flex').addClass('hidden');
    });
}

export default contactModal;