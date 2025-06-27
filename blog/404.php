<?php
include 'partial/header.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            user-select: none;
            font-family: "montserrat", sans-serif;
            color: var(--color-gray-300);
            background: var(--color-bg);
        }



        .error-code {
            font-size: 10rem;
            font-weight: 900;
            color: #dc3545;
        }

        .message {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #dc3545;
            border: none;
            padding: 12px 30px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="error-code">404</div>
                <div class="message">Oops! Page not found</div>
                <a href="<?= ROOT_url ?>" class="btn btn-custom">Back to Home</a>
            </div>
        </div>
    </div>
</body>

</html>