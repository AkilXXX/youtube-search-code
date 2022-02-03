<?php
$keyword = "  ";
$key_api="google_api_key";
$limit=4;
$search1= $keyword;
$order="relevance";
$url = "https://www.googleapis.com/youtube/v3/search?key=".$key_api."&part=snippet&type=video&maxResults=".$limit."&order=".$order."&q=".$search1;
//echo $url;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($curl);
curl_close($curl);
$resultYoutube = json_decode($return, true);
$tit1 = $resultYoutube["items"][0]["snippet"]["title"];
$tit2 = $resultYoutube["items"][1]["snippet"]["title"];
$tit3 = $resultYoutube["items"][2]["snippet"]["title"];
$tit4 = $resultYoutube["items"][3]["snippet"]["title"];
$tit1x = $resultYoutube["items"][0]["id"]["videoId"];
$tit2x = $resultYoutube["items"][1]["id"]["videoId"];
$tit3x = $resultYoutube["items"][2]["id"]["videoId"];
$tit4x = $resultYoutube["items"][3]["id"]["videoId"];



