// Wait for the document to be ready
$(document).ready(function () {
    // Add custom client-side validation for the registration form
    $('form[name="registration-form"]').submit(function (event) {
        var password = $('#password').val();
        var confirmPassword = $('#password-confirm').val();

        if (password !== confirmPassword) {
            // Prevent the form submission and show an error message
            event.preventDefault();
            $('#password-mismatch-error').show();
        }
    });

    // Hide password mismatch error initially
    $('#password-mismatch-error').hide();

    // Add interactivity to hide the error when user updates the fields
    $('#password, #password-confirm').on('input', function () {
        $('#password-mismatch-error').hide();
    });
});
