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
<!--                 <li><a href='support.php'>Support</a></li> Temporarily replaced with discord support link until page finished-->
                <li><a href='https://discord.gg/Ukr89GrMBk' target="_blank">Support</a></li>
                <li><a href='privacy.php'>Privacy</a></li>
            </ul>
        </nav>

        <div class="container">
            <h1>Wolfsvale privacy policy</h1>
            Your privacy is our first priority. This is why we only store what is absolutely necessary,
            while providing transparency, as well as clear and comprehensible information and privacy policies.
            <h2>Information provided</h2>
            <ul>
                <li>how we collect data</li>
                <li>why we collect data</li>
                <li>when we collect data</li>
                <li>which data we collect</li>
                <li>Who can access this data</li>
            </ul>
            <span class="text-highlight">Wolfsvale Software</span> is responsible for protection of your data, we are a Dutch company, and follow the GDPR.
            <br><br>
            <b>Representative and owner:</b> Joshua Slui<br>
            <b>Contact:</b> <a href="mailto:privacy@wolfsvale.tech">privacy@wolfsvale.tech</a>
            <hr>
            <h2>Wolfsvale website privacy policy</h2>
            The wolfsvale website (as you are currently on) does not collect data itself.<br>
            All our websites are routed through cloudflare. You may find their privacy policy <a href="https://www.cloudflare.com/privacypolicy/" target="_blank">here</a>.
            <hr>
            <h2>Product privacy policies</h2>
            All our products have their own privacy policy page.<br>
            You may find them all listed below here with their last updated date.

            <ul>
                <li> <a href="privacy/pingernos.php">Pingernos Bot - 22-06-2023</a></li>
                <li> <a href="privacy/aterguides.php">Aternos Guides - 22-06-2023</a></li>
<!--                <li> <a href="privacy/dragonet.php">Dragonet - 22-06-2023</a></li>-->
            </ul>
        </div>

        <?php include_once('src/assets/components/footer.php') ?>
    </body>
</html>
