
<?php
function getAv($id)
{

    $bot_token = ''; // Do not add your discord bot token here, make a new environment.php file with this variable

    include 'environment.php';
    $json_options = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Bot $bot_token"
        ]
    ];

    $url = 'https://discordapp.com/api/users/';
    $url .= $id;

    $json_context = stream_context_create($json_options);

    $json_get = file_get_contents($url, false, $json_context);

    $json_decode = json_decode($json_get, true);

    $avatar = 'eb255d51dba029547e0fdefeaf6efebe';

    if (!$json_decode['avatar']) {
        $id = '1021102853915422770';
        echo "<script> console.error('Failed to connect to API for avatars. The user might not have an avatar set. Otherwise, if all users have the same avatar; please inform my developers that the API key may be expired.') </script>";
    } else {
        $avatar = $json_decode['avatar'];
    }
    return 'https://cdn.discordapp.com/avatars/'.$id.'/'.$avatar.'?size=2048';
}



function getName($id)
{

    $bot_token = '';

    include 'environment.php';
    $json_options = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Bot $bot_token"
        ]
    ];

    $url = 'https://discordapp.com/api/users/';
    $url .= $id;

    $json_context = stream_context_create($json_options);

    $json_get = file_get_contents($url, false, $json_context);

    $json_decode = json_decode($json_get, true);

    if (!$json_decode['username']) {
        $a = "404";
        echo "<script> console.error('Failed to connect to API for usernames. Please confirm that the key is not expired.') </script>";
        return $a;
    } else {
        $a = $json_decode['username'];
        $a .= '#';
        $a .= $json_decode['discriminator'];
        return $a;
    }

    //echo $a;
}
?>

<!-- EXAMPLE OF HOW TO USE THIS
<img src="<?php getAv(511590780834545664) ?>" alt="" height="500px">
<p><?php getName(511590780834545664) ?></p>

Bestand maken, kijken of datum erin ouder is dan x tijd,
haal nieuwe op en anders dat bestandje gebruiken

json_get dus opslaan in dat bestand (data.json)
-->