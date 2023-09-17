<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Wolfsvale | About</title>
        <link rel="stylesheet" href="src/assets/styling/navbar.css">
        <link rel="stylesheet" href="src/assets/styling/home.css">
        <meta name="viewport" content="width=device-width">
    </head>


    <body>
        <?php include_once('src/assets/components/navbar.php') ?>
        <div style="margin-top: 50px" class="container">
            <div id="about">
                <h1 class="center">About the company</h1>
                <div class="image-text-align">
                    <div>
                        Wolfsvale Software is a company founded and owned by <span class="text-highlight">Joshua Slui</span>,
                        containing a team of a dozen <span class="text-highlight">volunteer developers</span> looking to learn more about development at a reputable company.
                        Our main goal is to create <span class="text-highlight">FOSS software</span> where this is not present. We intend to do this <span class="text-highlight">with as little costs as possible</span>,
                        while maintaining our goal of <span class="text-highlight">user-friendliness</span>, as well as <span class="text-highlight">a feature-rich application</span>.
                        <br><br>
                        Wolfsvale will never charge you for usage of our software. Some of our services offer hosting.
                        We will set this up for you at a third party hosting and charge you for the hosting costs plus additional charges for updates, maintenance and our efforts.
                    </div>
                    <div id="mascotte">
                        <img src="src/assets/images/hazzy_icon.png" alt="our mascotte" height="200px" class="ml-50">
                    </div>
                </div>
            </div>
            <hr>


            <div id="team">
                <h2>Owner</h2>
                <div class="image-text-align">
                    <img height="100px" class="image-round" src="https://avatars.githubusercontent.com/u/34064010?v=4" alt="Josh">
                    <div class="ml-10">
                        <h3>Joshua Slui</h3>
                        <a href="https://github.com/MiataBoy" target="_blank" class="text-highlight">MiataBoy on Github</a>
                    </div>
                </div>

                <h2>Volunteer developers</h2>
                <div id="volunteer">
                    <?php
                        include_once('getUserByRole.php');

                        $json = file_get_contents('cache.json');
                        $decoded = json_decode($json, true);

                        foreach ($decoded['users'] as $user) {
                                $avatar = $user['avatar'];
                                $username = $user['name'];

                                echo <<<EOL
                                    <div class="image-text-align mr-50 mb-10 disableFloat">
                                        <img height="100px" class="image-round" src="$avatar" alt="$username">
                                        <div class="ml-10">
                                            <h3>$username</h3>

                                        </div>
                                    </div>
                    EOL;
                        }

                    ?>
                </div>
            </div>
            <hr>
            <div>
                As we progress into a company, we are working towards providing more services to our users,
                and opening the possibility to sell hosting for our services with third party hosting.
                We currently have the following services and products:
                <ul>
                    <li>Pingernos</li>
                    <li>Nightly ORG
                        <ul>
                            <li>Nightly Bot</li>
                        </ul>
                    </li>
                </ul>
                We are also working on a list of other services, such as the Dragonet support center.
                More about this will be published as we approach a point of stability with Dragonet.
            </div>
        </div>

        <?php include_once('src/assets/components/footer.php') ?>
    </body>
</html>
