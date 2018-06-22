<?PHP
$channelid = $_GET["video_url"];


ini_set("user_agent","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)");
/* gets the data from a URL */
function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)");
    curl_setopt($ch, CURLOPT_REFERER, "http://facebook.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$string = get_data($channelid);
// preg_match_all('/(hlsvp.*m3u8)/',$string,$matches, PREG_PATTERN_ORDER);
// $var1=$matches[1][0];
// $var1 = substr($var1, 8);
// $var1=str_replace("\/", "/", $var1);
#Quality Settings
 // 96=1920x1080, 95=1280x720, 94=854x480, 93=640x360 
// $man = get_data($var1);
// preg_match_all('/(https:\/.*\/95\/.*index.m3u8)/U',$man,$matches, PREG_PATTERN_ORDER);
// $var2=$matches[1][0];
// header("Content-type: application/vnd.apple.mpegurl");
header("Location: $string");
?>