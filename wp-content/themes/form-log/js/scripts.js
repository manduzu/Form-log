jQuery(document).ready(function ($) {
$('#form-log-form').on('submit', function (e) {
    e.preventDefault(); // Prevent the default form submission

    // Serialize the form data
    var formData = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: themeSlug.ajaxurl,
        data: {
            action: 'save_form_log', // AJAX action name
            formData: formData
        },
        success: function (response) {
            
            console.log(response);

            // Reload the page after a successful submission
            location.reload();
        }
    });
});
});
