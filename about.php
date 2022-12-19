<!DOCTYPE html>

<html lang="en">

    <head>
        <title>About BlackFur Studios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>
    </head>

    <?php include 'assets/scripts/cachehandler.php';?>

    <body>
        <div>
            <h1>About Us</h1>
            <p>We are a dedicated team of college students, with a dream to serve people with fun, minimalistic games whether on roblox, terminal or other means. We want to provide people with useful products that adhere to the FOSS initiative, allowing everyone to see the code that we apply, as well as allowing them to see that our products are not malicious. Additionally, we always love to receive contributions to our products by our users in our repositories.</p>
            <!-- <img src="<?php getAv(1052129761285132419) ?>" alt="" height="500px">
            <p> <?php getUser("zen", true) ?> </p> -->
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo getUser("zen", false) ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </body>
</html>