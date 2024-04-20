<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        body {
            background-color: #f3d9e5; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .contact-form-container {
            background-color: #ffffff; 
            border-radius: 20px; 
            padding: 20px; 
            max-width: 800px; 
            width: 80%; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
        }

        .contact-form-container h1 {
            text-align: center;
            color: #ff69b4; 
        }

        .contact-form-container input[type="text"],
        .contact-form-container textarea,
        .contact-form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form-container textarea {
            height: 150px; 
        }

        .contact-form-container input[type="submit"] {
            background-color: #ff69b4; 
            color: #ffffff; 
            cursor: pointer;
        }

        .contact-form-container input[type="submit"]:hover {
            background-color: #e64a8e; 
        }

        .success-message,
        .error-message {
            text-align: center;
            margin-top: 10px;
        }

        .success-message {
            color: #008000; 
        }

        .error-message {
            color: #ff0000; 
        }

        .w3-text-pink {
            color: #ff69b4; 
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="contact-form-container">
        <h1 class="w3-text-pink">Contact Me</h1>
        <form id="form-id" method="POST">
            <input type="text" id="fullname" name="fullname" placeholder="Full Name"><br>
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <input type="text" id="phonenum" name="phonenum" placeholder="Phone Number"><br>
            <textarea id="message" name="message" placeholder="Message"></textarea><br>
            <input type="submit" value="Send">
        </form>
        <div id="success-message" class="w3-text-pink"></div>
        <button onclick="window.location.href = 'http://localhost:8888';" style="background-color: #ff69b4; color: #ffffff; border: none; border-radius: 5px; padding: 10px; cursor: pointer; margin-top: 20px;">Go back to homepage</button>
    </div>

    <script>
        $(document).ready(function() {
            $('#form-id').on('submit', function (e) {
                e.preventDefault();
                const fullname = $('#fullname').val();
                const email = $('#email').val();
                const phonenum = $('#phonenum').val();
                const message = $('#message').val();
                const data = {
                    fullname: fullname,
                    email: email,
                    phonenum: phonenum,
                    message: message,
                };
                $.ajax({
                    url: `http://localhost:8888/contact`,
                    type: "POST",
                    data: data,
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('#success-message').html('<p class="success-message w3-text-pink">Thank you for contacting me! </p>');
                        $('#form-id')[0].reset();
                    },
                    error: function (error) {
                        console.log(error);
                        $('#form-id').prepend('<p class="error-message w3-text-pink">Error. Please try again.</p>');
                    },
                });
            });
        });
    </script>
</body>
</html>
