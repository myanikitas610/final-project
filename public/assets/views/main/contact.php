<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Contact Me</h1>
    <form id="form-id" method="POST">
        <input type="text" id="fullname" name="fullname" placeholder="Full Name"><br>
        <input type="text" id="email" name="email" placeholder="Email"><br>
        <input type="text" id="phonenum" name="phonenum" placeholder="Phone Number"><br>
        <input type="text" id="message" name="message" placeholder="Message"><br>
        <input type="submit" value="Send">

    </form>

    <div id="response"></div>

    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'http://localhost:8888/contact',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#response').html(response);
                        $('#response').prepend('<p class="success-message">Thank you for contacting me! Your message has been submitted.</p>');
                        $('#response').find('input[type="text"]').val('');
                        window.location.replace("contact");
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting contact form:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
