$(document).ready(function () {
    $('.wishlist-form').submit(function (event) {
        event.preventDefault();

        var $form = $(this);
        var status = $form.find('.wishlist-button').data('status');

        // Add your logic to handle the status (add or remove from wishlist)

        // Change the heart icon based on the status
        if (status === 'add') {
            $form.find('i').removeClass('far fa-heart').addClass('fas fa-heart');
            $form.find('.wishlist-button').data('status', 'remove');
        } else {
            $form.find('i').removeClass('fas fa-heart').addClass('far fa-heart');
            $form.find('.wishlist-button').data('status', 'add');
        }

        // Add additional logic here, such as making an AJAX request to update the wishlist
    });
});