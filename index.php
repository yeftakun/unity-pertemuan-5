<?php

// $url = 'https://animechan.xyz/api/random';
$url2 = 'https://api.waifu.pics/sfw/neko';
// $response = file_get_contents($url);
$response2 = file_get_contents($url2);
// $data = json_decode($response, true);
$data2 = json_decode($response2, true);

// $quote = $data['quote'];
// $anime = $data['anime'];
// $character = $data['character'];
$waifu = $data2['url'];

// echo "<p>\"$quote\"</p>";
// echo "<p>\"$character, $anime\"</p>";
echo "<img src=\"$waifu\" width=\"500px\" alt=\"neko\">";