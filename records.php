<?php
    $vaccID = $_GET['vaccID'];
    $name = "NAME";
    $address = "address";
    $bdate = "01/01/2003";
    $contact = "09123";
    $healthfac = "MMMH&MC";
    $dose1brand = "pfizer";
    $dose1date = "today";
    $dose2brand = "pfizer";
    $dose2date = "today";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vaccination Card - Vaccine Verification</title>
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
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Vaccination Card</h2>
                    <p>This record includes medical information about the vaccines you have received.</p>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">PERSONAL INFORMATION</h3>
                        <div class="item">
                            <p class="item-description">ID No.</p>
                            <p class="text-uppercase item-name" id="PI_ID"><?php echo $vaccID?></p>
                        </div>
                        <div class="item">
                            <p class="item-description">Name</p>
                            <p class="text-uppercase item-name" id="PI_name"><?php echo $name?></p>
                        </div>
                        <div class="item">
                            <p class="item-description">Address</p>
                            <p class="text-uppercase item-name" id="PI_add"><?php echo $address?></p>
                        </div>
                        <div class="item">
                            <p class="item-description">Birthdate</p>
                            <p class="text-uppercase item-name" id="PI_bday"><?php echo $bdate?></p>
                        </div>
                        <div class="item">
                            <p class="item-description">Contact Number</p>
                            <p class="text-uppercase item-name" id="PI_contact"><?php echo $contact?></p>
                        </div>
                    </div>
                    <div class="products">
                        <h3 class="title">VACCINE DETAILS</h3>
                        <div class="item">
                            <p class="item-description">Health Facility</p>
                            <p class="text-uppercase item-name" id="VD_hf"><?php echo $healthfac?></p>
                        </div>
                        <div class="item">
                            <div class="form-row">
                                <div class="col">
                                    <p class="item-description">1st Dose</p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase item-name" id="VD_first_manu"><?php echo $dose1brand?></p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase item-name" id="VD_first_date"><?php echo $dose1date?></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <p class="item-description">2nd Dose</p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase item-name" id="VD_second_manu"><?php echo $dose2brand?></p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase item-name" id="VD_second_date"><?php echo $dose2date?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item"></div>
                    </div>
                </form>
            </div>
            <div style="text-align: center;margin-top: 15px;"><a class="btn btn-primary" role="button" style="text-align: center;" href="index.php">BACK</a></div>
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