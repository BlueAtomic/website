<!DOCTYPE html>

<html lang="en">

    <head>
        <title>About BlackFur Studios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/team.css">
        <script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>
    </head>

    <?php include 'cachehandler.php';?>

    <body>
        <div class="text-center">
            <a class="btn btn-warning" href="index.html">
                <i class="fa-solid fa-home"></i>
                Back to home
            </a>
            <h1>About Us</h1>
            <p>We are a dedicated team of college students, with a dream to serve people with fun, minimalistic games whether on roblox, terminal or other means. We want to provide people with useful products that adhere to the FOSS initiative, allowing everyone to see the code that we apply, as well as allowing them to see that our products are not malicious. Additionally, we always love to receive contributions to our products by our users in our repositories.</p>
            <hr>
            <h2>Our team</h2>

            <section class="text-center py-5 justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("zen", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Zenith avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("zen", true) ?></h4>
                                    <p class="text-muted">Owner</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("storm", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Stormsnuitje avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("storm", true) ?></h4>
                                    <p class="text-muted">Owner</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("sith", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Sith avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("sith", true) ?></h4>
                                    <p class="text-muted">Developer</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("dino", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Dino avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("dino", true) ?></h4>
                                    <p class="text-muted">avatarless Developer</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("ndua", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Ndua avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("ndua", true) ?></h4>
                                    <p class="text-muted">avatarless Developer</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="img-block mb-5">
                                <img src="<?php echo getUser("yil", false) ?>" class="img-fluid  img-thumbnail rounded-circle" alt="Yil avatar">
                                <div class="content mt-2">
                                    <h4><?php echo getUser("yil", true) ?></h4>
                                    <p class="text-muted">avatarless Developer</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </body>
</html>
