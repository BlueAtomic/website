<!DOCTYPE html>

<html lang="en">
<head>
    <title>Wolfsvale | About</title>
    <link rel="stylesheet" href="../src/assets/styling/navbar.css">
    <link rel="stylesheet" href="../src/assets/styling/home.css">
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
            <li><a href='../index.php'>Home</a></li>
            <li><a href='../about.php'>About</a></li>
            <li><a href='../support.php'>Support</a></li>
            <li><a href='../privacy.php'>Privacy</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Pingernos privacy policy</h1>
        Your privacy is our first priority. This is why we only store what is absolutely necessary,
        while providing transparency, as well as clear and comprehensible information and privacy policies.
        <h2>Information provided</h2>
        <ul>
            <li>which data we collect</li>
            <li>why we collect data</li>
            <li>when we collect data</li>
            <li>Who can access this data</li>
        </ul>
        <span class="text-highlight">Wolfsvale Software</span> is responsible for protection of your data, we are a Dutch company, and follow the GDPR.
        <br><br>
        <b>Representative and owner:</b> Joshua Slui<br>
        <b>Contact:</b> <a href="mailto:joshuaslui0203@gmail.com">joshuaslui0203@gmail.com</a>
        <hr>
        <b>DISCLAIMER: We do not knowingly collect data of children under 16. Under article 8 of the GDPR, you are required to have your guardian(s) consent for you before using our products and services if you are under 16.</b>
        <br> <br>
        We are not affiliated with Aternos GmbH or it's products and services. We are a third party without any legal connection to Aternos GmbH. We will not provide suppport for our products and/or services in social media owned by Aternos GmbH.
        <h3>What data we store</h3>
        We store your <b>guild ID</b> so that we can store data per guild, allowing us to target each guild separately with features where this is needed. We also store this so that we may automatically check if a new server is blacklisted.
        <br> <br>
        We store your <b>server IP</b> to automatically get the server's status without specifying the IP in the status command if set with the <code>setserver</code> command.
        <br> <br>
        If your guild is blacklisted on Pingernos, we collect the <b>guild ID</b> but also the <b>reason</b> behind the blacklist. Blacklisted guilds always encompass guilds that break our terms of service.
        <br> <br>
        Upon adding Pingernos to your guild, it will log the guild join event to a permanent channel. This includes <b>the guild name</b>, <b>guild ID</b> and <b>Guild member count</b>. We also display how many servers Pingernos is in at that time.
        <h3>Why we collect data</h3>
        We store this data so that we can keep the bot functional and ease up the experience that our users may have with Pingernos. By storing data such as guild IDs and server IPs, we allow shortcuts and additional customization.
        Additionally, saving the guild ID and reasons in our blacklist allows us to enforce our Terms of Service, ensuring that our bot is not at risk of issues caused by abuse from other users.
        <h3>when we collect data</h3>
        None of this data is collected instantly, but all through commands executed by the user. The <code>setserver</code> command collects the guild ID and server IP and is only accessible with the <code>MANAGE_SERVERS</code> permission,
        the <code>blacklist</code> command collects the guild ID and the reason for the blacklist. This command can NOT be used by anyone but the discord application owners.
        <h3>Who can access this data</h3>
        This data cannot be accessed by anyone but administrators with access to the servers that Pingernos is hosted on.
        This does not include anyone but the company's current owner Joshua Slui. There are no external parties that can access this data.
        <br> <br>
        If a server is set through <code>setserver</code>, this server will be displayed if the <code>status</code> command is not provided with another IP.
        This is set per guild, and all guild members may see this server on the status command.
    </div>

    <?php include_once('../src/assets/components/footer.php') ?>

    </body>
</html>