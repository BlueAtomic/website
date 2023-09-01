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
    <h1>aternos guides privacy policy</h1>
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
    <b>Contact:</b> <a href="mailto:privacy@wolfsvale.tech">privacy@wolfsvale.tech</a>
    <hr>
    <b>DISCLAIMER: We do not knowingly collect data of children under 16. Under article 8 of the GDPR, you are required to have your guardian(s) consent for you before using our products and services if you are under 16.</b>
    <br> <br>
    We are not affiliated with Aternos GmbH or it's products and services. We are a third party without any legal connection to Aternos GmbH. We will not provide suppport for our products and/or services in social media owned by Aternos GmbH.
    <h3>What data we store</h3>
    Upon sign-up, we save your <b>username</b>. This is only used to display and identify the author of articles they wrote.
    <br> <br>
    Upon sign-up, we save your <b>mail address</b>. This is only used when logging in and/or signing up for authentication purposes.
    <br> <br>
    Upon sign-up, we save your <b>password</b>. This is used for a secure login system. Your password gets hashed, and then saved in the database.
    <br> <br>
    Upon login, your <b>user ID</b> is stored in a session until you log out or clear your cookies, this is used to check if, and then who you are logged in as.
    <br> <br>
    Each individual user is paired with a <b>role ID</b> and <b>user ID</b>. These are both only used in the back-end for certain features, and is not vital to your privacy or security.
    <br> <br>
    Upon creating an article, the <b>title</b> is saved. This is for URLs and providing quick access to the correct article.
    <br> <br>
    Upon creating an article, the <b>summary</b> is saved. This is a short description about the article and its contents.
    <br> <br>
    Upon creating an article, the <b>content</b> is saved. This is generally all text in the article.
    <br> <br>
    Upon viewing an article, the <b>views</b> will go up by 1. It is not identifiable what users have seen this. Views will always be set to 0 at article creation. The view count is only displayed in articles to users with role ID 1, which are article authors.
    <h3>Why we collect data</h3>
    We use the account information we collect so that we may assign roles to these accounts to ensure that our article writers and web administrators get the access they need to keep the website running, and articles going.
    Furthermore, we need the data we collect for articles to ensure that they are accessible, identifiable and easy to understand.
    <h3>when we collect data</h3>
    Account data is collected when you register on our website. Article data is collected when the article is published on the website.
    <h3>Who can access this data</h3>
    This data cannot be accessed by anyone but administrators with access to the servers that Aternos Guides is hosted on.
    This does not include anyone but the company's current owner Joshua Slui. There are no external parties that can access this data.

    Your password is not stored on our database in plaintext, but as a hash. We cannot access your plain password.

    Article information is publicly available on our website. This is with exception to views; which are only accessible to article writers and web administrators.
    <br> <br>
    All our websites are routed through cloudflare. You may find their privacy policy <a href="https://www.cloudflare.com/privacypolicy/" target="_blank">here</a>.
</div>

<?php include_once('../src/assets/components/footer.php') ?>

</body>
</html>
