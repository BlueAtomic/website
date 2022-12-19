<?php
$getDate = date("d");

include 'assets/scripts/users.php';

function dayNr() {
    $json = file_get_contents('cache.json');
    $decoded = json_decode($json);
    return $decoded->day;
}

function getUser(string $user, bool $name) : string {
    $json = file_get_contents('cache.json');
    $decoding = json_decode($json);

    if ($name) {
        return $decoding->team->$user->name;
    } else {
        return $decoding->team->$user->avatar;
    }
}

try {
    if ($getDate == dayNr()) {
        echo "<script>console.log('Loaded cache')</script>";
    } else {
        echo "<script>console.warn('Outdated cache, updating now.')</script>";
        $json = file_get_contents('cache.json');
        $decoded = json_decode($json, true);
        $decoded = ["day" => $getDate];

        $array = Array (
            "day" => $getDate,
            "team" => Array (
                "zen" => Array (
                    "name" => getName(682609654504882186),
                    "avatar" => getAv(682609654504882186)
                ),
                "storm" => Array (
                    "name" => getName(1052129761285132419),
                    "avatar" => getAv(1052129761285132419)
                ),
                "sith" => Array (
                    "name" => getName(572058099507265556),
                    "avatar" => getAv(572058099507265556)
                ),
                "dino" => Array (
                    "name" => getName(1015217462561738822),
                    "avatar" => getAv(1015217462561738822)
                ),
                "ndua" => Array (
                    "name" => getName(1045674575540781146),
                    "avatar" => getAv(1045674575540781146)
                ),
                "yil" => Array (
                    "name" => getName(792837571670966342),
                    "avatar" => getAv(792837571670966342)
                )
            )
        );

        $json = json_encode($array);
        file_put_contents("cache.json", json_encode([]));
        file_put_contents('cache.json', $json);



        print "<script>console.log('Updated cache successfully')</script>";
    }
} catch (Error $error) {
    echo "<script>console.error('$error')</script>";
}
