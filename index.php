<?php
require './admin/config/database.php';

$query = "SELECT * FROM content ORDER BY id desc";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <meta name="description" content="TownyGamingMC is a brand new upcoming space themed Minecraft server. We aim to offer a safe, welcoming &amp; secure environment for you all. I hope you consider joining our Minecraft server!">
    <meta property="og:image" content="https://townygamingmc.cc/assets/img/stryker.png">
    <meta name="twitter:image" content="https://townygamingmc.cc/assets/img/stryker.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <!-- Start: Navbar Centered Links -->
    <nav class="navbar navbar-dark navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav" style="background: rgb(45, 44, 56);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/stryker.png" style="width: 100px;height: 80px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="https://map.townygamingmc.cc" target="_blank">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://store.townygamingmc.cc" target="_blank">Store</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="staff.php">Staff</a></li>
                    <li class="nav-item"><a class="nav-link" href="rules.html">Rules</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href=" https://discord.gg/FG3Yh7dGpU" target="_blank">Join Us</a>
            </div>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <?php while ($content = mysqli_fetch_assoc($result)) : ?>
    <header class="bg-dark">
        <!-- Start: Hero Clean Reverse -->
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2"><?= $content['title'] ?></p>
                        <h1 class="fw-bold"><?= $content['description'] ?></h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8" src="assets/img/products/<?= $content['first_content_image'] ?>"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4" src="assets/img/products/<?= $content['second_content_image'] ?>"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.25" src="assets/img/products/<?= $content['third_content_image'] ?>"></div>
                    </div>
                </div>
            </div>
        </div><!-- End: Hero Clean Reverse -->
    </header><!-- Start: Brands -->
    <?php endwhile ?>
    <section class="py-5">
        <div class="container text-center py-5">
            <div class="card text-white bg-primary" style="border-radius: -1px;">
                <div class="card-body p-4" style="background: linear-gradient(90deg, rgb(55,99,244), rgb(3,9,28) 100%);border-radius: 10px 0px 0px;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="fw-bold text-white mb-0" style="padding-top: 7px;width: 351px;">Join&nbsp;TownyGamingMC&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                </svg></h3>
                        </div><a class="btn btn-primary shadow" role="button" href=" https://discord.gg/FG3Yh7dGpU" target="_blank" style="display: inline;">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Brands -->
    <!-- Start: Contact Details -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Contacts</p>
                    <h2 class="fw-bold">How you can reach us</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" action="contact-logic.php" method="contact-logic.php">
                            <!-- Start: Success Example -->
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div><!-- End: Success Example -->
                            <!-- Start: Error Example -->
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div><!-- End: Error Example -->
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary shadow d-block w-100" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                        <div class="d-flex align-items-center p-3" style="padding-top: 15px;padding-bottom: 30px;margin-top: 103px;margin-left: 0px;">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-discord">
                                    <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Join Us</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Email</h6>
                                <p class="text-muted mb-0">support@townygamingmc.cc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Contact Details -->
    <!-- Start: Footer Multi Column -->
    <footer class="bg-dark">
        <div class="container py-4 py-lg-5">
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2023 TownyGamingMC Discord</p>
                <p class="mb-0" style="font-size: 11px;">Made By&nbsp;<a href="https://aetherisme.xyz" target="_blank">Aether</a></p>
                <p class="mb-0" style="font-size: 11px;">Modefied By&nbsp;<a href="https://bencrissmp.tk" target="_blank">bencris</a></p>
            </div>
        </div>
    </footer><!-- End: Footer Multi Column -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>