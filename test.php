<?php
$getDate = date("d");

function loadJson() {
    $json = file_get_contents('cache.json');
    $decoded = json_decode($json);
    return $decoded->day;
}

echo "<br>$getDate <- current date | saved date -> ";
echo loadJson();

try {
    if (date("d") == loadJson()) {
        echo "<br>Cached Already<br>";
        print "<script>console.log('Loaded cache')</script>";
        echo loadJson();
    } else {
        echo "<script>console.log('Updating cache from old cache...')</script>";
        echo "<br>updating cache, old cache was on:<br>";
        echo loadJson();
        $json = file_get_contents('cache.json');
        $decoded = json_decode($json, true);
        $decoded = ["day" => $getDate];

        $json = json_encode($decoded);
        file_put_contents("cache.json", json_encode([]));
        file_put_contents('cache.json', $json);

        print "<script>console.log('Updated cache, refer to web page for current cache')</script>";
        echo "<br><br>updated cache, cache is now on:<br>";
        echo loadJson();
    }
} catch (Error $error) {
    echo $error;
}
