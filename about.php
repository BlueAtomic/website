<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Wolfsvale | About</title>
        <link rel="stylesheet" href="src/assets/styling/navbar.css">
        <link rel="stylesheet" href="src/assets/styling/home.css">
        <meta name="viewport" content="width=device-width">
    </head>

    <script>
        function updatemenu() {
            if (document.getElementById('responsive-menu').checked == true) {
                document.getElementById('menu').style.borderBottomRightRadius = '0';
                document.getElementById('menu').style.borderBottomLeftRadius = '0';
            }else{
                document.getElementById('menu').style.borderRadius = '50px';
            }
        }
    </script>

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

        <div style="margin-top: 50px">
            <h1 class="center">About the company</h1>
        </div>
    </body>
</html>