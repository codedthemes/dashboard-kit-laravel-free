'use strict';
$(document).ready(function() {
    // [ lightbox ]
    $(document).on('click', '[data-bs-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
});
