<!DOCTYPE html>

<html lang="en">
    <head>
        <title>About Blue Atomic</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/team.css">
        <script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>
    </head>

    <?php include 'getusers.php';?>

    <body>
        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='about.php'>About</a></li>
                <li><a href='support.php'>Support</a></li>
                <li><a href='privacy.php'>Privacy</a></li>
            </ul>
        </nav>
    </body>
</html>
