<?php
function dateCompare() : bool {
    if (file_exists('cache.json')) {
        $json = file_get_contents('cache.json');
        $decoded = json_decode($json);
        if ($decoded->date == date("d")) {
            echo "<script> console.info('Cache is up to date and being loaded. No further action required.') </script>";
            $result = true;
        } else {
            echo "<script> console.warn('Cache is outdated. Gathering new data and refreshing cache shortly..') </script>";
            $result = false;
        }
    } else {
        $result = false;
    }
    return $result;
}

function getData()
{

    $bot_token = require_once('config.php');

    $avatar = "https://cdn.discordapp.com/avatars/1021102853915422770/eb255d51dba029547e0fdefeaf6efebe?size=2048";
    $username = "API Failure";

    $json_options = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Bot $bot_token"
        ]
    ];

    $url = 'https://discordapp.com/api/guilds/1041398130677141564/members?limit=100';

    $json_context = stream_context_create($json_options);

    $json_get = file_get_contents($url, false, $json_context);

    $json_decode = json_decode($json_get, true);

    global $teamMembers;
    $teamMembers = array("date" => 00, "users" => []);

    foreach ($json_decode as $user) {
        if (in_array(1112052216812015646, $user['roles'])) {
            //$teamMembers['users'] += array("name" => $user['user']['username'], "avatar" => 'https://cdn.discordapp.com/avatars/' . $user['user']['id'] . '/' . $user['user']['avatar']);
            array_push($teamMembers['users'], array("name" => $user['user']['username'], "avatar" => 'https://cdn.discordapp.com/avatars/' . $user['user']['id'] . '/' . $user['user']['avatar']));
        }
    }
    return $teamMembers;

//    foreach ($json_decode as $user) {
//        if (in_array(1112052216812015646, $user['roles'])) {
//            $username = $user['user']['username'];
//            $avatar = 'https://cdn.discordapp.com/avatars/' . $user['user']['id'] . '/' . $user['user']['avatar'];
//
//            echo <<<EOL
//                <div class="image-text-align mr-50 mb-10">
//                    <img height="100px" class="image-round" src="$avatar" alt="$username">
//                    <div class="ml-10">
//                        <h3>$username</h3>
//                        Lorum Ipsum hipsum
//                    </div>
//                </div>
//EOL;
//        }
//    }
}

if (!dateCompare()) {
    $teamMembers = getData();
    $teamMembers["date"] = $date = date("d");
    $json = json_encode($teamMembers);
    file_put_contents("cache.json", json_encode([]));
    file_put_contents('cache.json', $json);
    echo "<script> console.info('Cache has been updated successfully.') </script>";

}