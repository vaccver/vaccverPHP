<?php
    if (isset($_GET['verify'])) {
        $vaccID = $_GET['vaccID'];
        $url = "records.php?vaccID=" . $vaccID;
        echo $url;
        header('Location: '.$url);
        exit();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Vaccine Verification</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="icon" href="assets/favicon_io/favicon.ico">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><img src="assets/img/Logo-Mariano-Marcos-Memorial-Hospital-web-300x200.png" style="height: 42px;"><a class="navbar-brand text-uppercase text-dark logo" href="#" style="font-weight: bold;font-size: 19px;" target="_top">MMMH&amp;MC</a></div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(0,128,205,0.97);height: 654px;background: url(&quot;assets/img/154786811_4190503634294190_5821154065316919145_n.jpg&quot;) center / cover;">
            <div class="text">
                <h2>Verify the validity of your vaccination card.</h2>
                <p>Enter your vaccination ID number below.</p>
                <form action="" method="get">
                    <input class="form-control" type="text" style="text-align: center;" name="vaccID" placeholder="XXXX-XXXX">
                    <button class="btn btn-primary" type="submit" style="margin-top: 10px;" name="verify" value="submit">Verify</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>

</body>

</html>