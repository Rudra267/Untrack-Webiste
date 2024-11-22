<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Site Title -->
    <title>OnTrack Energy</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="https://iark.in/san/ontrack-latest/images/about/ontrack-logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://iark.in/san/ontrack-latest/images/about/ontrack-logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="../css/main.css">

    <style>
        /* Custom styles for the header */
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 200px;
        }

        /* Custom styles for the form and image section */
        .contact-section {
            padding: 50px 0;
        }

        .login-form {
            background-color: #f2f2f2;
            padding: 30px;
            border-radius: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-image {
            text-align: center;
        }

        .contact-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .contact-image {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- START HEADER -->
    <header class="header">
        <img src="https://iark.in/san/ontrack-latest/images/about/ontrack-logo.png" alt="OnTrack Energy Logo">
    </header>
    <!-- END HEADER -->

    <main class="site-content">
        <!-- Contact Section -->
        <div class="contact-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image on the left -->
                    <div class="col-lg-6 contact-image">
                        <img src="https://iark.in/san/ontrack-latest/images/work-1.jpg" alt="Login Image">
                    </div>
                    <!-- Login Form on the right -->
                    <div class="col-lg-6">
                        <div class="login-form">
                            <!-- Login form posts data to login.php -->
                            <form action="login.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" placeholder="Your Password" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Section -->
    </main>

    <!-- JS here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
