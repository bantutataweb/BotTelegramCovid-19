<?php 
date_default_timezone_set('Asia/Jakarta');
$token = "your_token";
$path = "https://api.telegram.org/bot".$token;
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatID = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$urlCovid = json_decode(file_get_contents('https://data.covid19.go.id/public/api/prov.json'),true);
$waktu = date("H");
if($waktu > 1 && $waktu < 11){
    $waktuSkrng = "Selamat Pagi";
}else if($waktu > 12 && $waktu < 15){
    $waktuSkrng = "Selamat Siang";
}else if($waktu > 14 && $waktu < 18){
    $waktuSkrng = "Selamat Sore";
}else if($waktu > 18 && $waktu < 24){
    $waktuSkrng = "Selamat Malam";
}

//Muali BOT
$msgStart = $waktuSkrng.", Ini adalah BOT Pantau Covid-19 Yang ada di wilayah Indonesia langsung dari covid19.go.id.%0AUpdate Terakhir Tanggal ". $urlCovid["last_date"] ." %0A%0ASilahkan Pilih Wilayah :%0A /jakrta ( Wilayah JAKRTA )%0A /jabar ( Wilayah JAWA BARAT )%0A /jateng ( Wilayah JAWA TENGAH )%0A /jatim ( Wilayah JAWA TIMUR )%0A /banten ( Wilayah BANTEN )%0A /yogakarta ( Wilayah DAERAH ISTIMEWA YOGYAKARTA )%0A /kaltim ( Wilayah KALIMANTAN TIMUR )%0A /bali ( Wilayah BALI )%0A /sumut ( Wilayah SUMATERA UTARA )%0A /riau ( Wilayah RIAU )%0A /sulsel ( Wilayah SULAWESI SELATAN )%0A /suba ( Wilayah SUMATERA BARAT )%0A /nusa ( Wilayah NUSA TENGGARA TIMUR )%0A /kalsel ( Wilayah KALIMANTAN SELATAN )%0A /sumsel ( Wilayah SUMATERA SELATAN )%0A /lampung ( Wilayah LAMPUNG )%0A /kepriau ( Wilayah KEPULAUAN RIAU )%0A /kepbel ( Wilayah KEPULAUAN BANGKA BELITUNG )%0A /kalba ( Wilayah KALIMANTAN BARAT )%0A /sulteng ( Wilayah SULAWESI TENGAH )%0A /kalteng ( Wilayah KALIMANTAN TENGAH )%0A /sulut ( Wilayah SULAWESI UATARA )";


$msg1 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["0"]['key']."%0AKasus :".number_format($urlCovid['list_data'][0]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][0]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][0]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][0]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg2 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["1"]['key']."%0AKasus :".number_format($urlCovid['list_data'][1]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][1]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][1]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][1]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg3 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["2"]['key']."%0AKasus :".number_format($urlCovid['list_data'][2]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][2]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][2]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][2]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg4 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["3"]['key']."%0AKasus :".number_format($urlCovid['list_data'][3]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][3]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][3]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][3]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg5 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["4"]['key']."%0AKasus :".number_format($urlCovid['list_data'][4]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][4]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][4]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][4]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg6 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["5"]['key']."%0AKasus :".number_format($urlCovid['list_data'][5]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][5]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][5]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][5]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg7 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["6"]['key']."%0AKasus :".number_format($urlCovid['list_data'][6]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][6]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][6]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][6]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg8 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["7"]['key']."%0AKasus :".number_format($urlCovid['list_data'][7]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][7]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][7]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][7]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg9 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["8"]['key']."%0AKasus :".number_format($urlCovid['list_data'][8]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][8]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][8]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][8]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg10 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["9"]['key']."%0AKasus :".number_format($urlCovid['list_data'][9]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][9]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][9]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][9]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg11 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["10"]['key']."%0AKasus :".number_format($urlCovid['list_data'][10]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][10]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][10]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][10]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg12 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["11"]['key']."%0AKasus :".number_format($urlCovid['list_data'][11]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][11]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][11]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][11]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg13 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["12"]['key']."%0AKasus :".number_format($urlCovid['list_data'][12]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][12]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][12]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][12]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg14 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["13"]['key']."%0AKasus :".number_format($urlCovid['list_data'][13]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][13]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][13]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][13]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg15 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["14"]['key']."%0AKasus :".number_format($urlCovid['list_data'][14]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][14]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][14]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][14]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg16 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["15"]['key']."%0AKasus :".number_format($urlCovid['list_data'][15]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][15]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][15]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][15]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg17 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["16"]['key']."%0AKasus :".number_format($urlCovid['list_data'][16]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][16]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][16]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][17]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg18 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["17"]['key']."%0AKasus :".number_format($urlCovid['list_data'][17]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][17]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][17]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][18]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg19 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["18"]['key']."%0AKasus :".number_format($urlCovid['list_data'][18]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][18]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][18]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][19]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg20 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["19"]['key']."%0AKasus :".number_format($urlCovid['list_data'][19]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][19]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][19]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][20]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg21 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["20"]['key']."%0AKasus :".number_format($urlCovid['list_data'][20]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][20]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][20]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][21]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg22 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["21"]['key']."%0AKasus :".number_format($urlCovid['list_data'][21]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][21]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][21]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][21]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg23 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["22"]['key']."%0AKasus :".number_format($urlCovid['list_data'][22]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][22]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][22]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][22]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg24 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["23"]['key']."%0AKasus :".number_format($urlCovid['list_data'][23]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][23]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][23]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][23]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg25 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["24"]['key']."%0AKasus :".number_format($urlCovid['list_data'][24]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][24]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][24]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][24]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg26 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["25"]['key']."%0AKasus :".number_format($urlCovid['list_data'][25]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][25]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][25]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][25]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg27 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["26"]['key']."%0AKasus :".number_format($urlCovid['list_data'][26]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][26]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][26]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][26]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg28 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["27"]['key']."%0AKasus :".number_format($urlCovid['list_data'][27]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][27]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][27]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][27]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg29 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["28"]['key']."%0AKasus :".number_format($urlCovid['list_data'][28]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][28]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][28]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][28]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg30 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["29"]['key']."%0AKasus :".number_format($urlCovid['list_data'][29]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][29]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][29]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][29]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg31 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["30"]['key']."%0AKasus :".number_format($urlCovid['list_data'][30]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][30]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][30]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][30]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg32 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["31"]['key']."%0AKasus :".number_format($urlCovid['list_data'][31]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][31]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][31]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][31]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg33 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["32"]['key']."%0AKasus :".number_format($urlCovid['list_data'][32]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][32]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][32]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][32]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";
$msg34 = "Jumlah Covid-19 untuk Wilayah ".$urlCovid['list_data']["33"]['key']."%0AKasus :".number_format($urlCovid['list_data'][33]["jumlah_kasus"])."%0ASembuh :".number_format($urlCovid['list_data'][33]["jumlah_sembuh"])."%0AMeninggal :".number_format($urlCovid['list_data'][33]["jumlah_meninggal"])."%0ADirawat :".number_format($urlCovid['list_data'][33]["jumlah_dirawat"])."%0A%0AKembali Ke Menu Awal /start";

if(strpos($message, "/start") === 0){
    file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msgStart); 
}else if(strpos($message, "/jakrta") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg1);
}else if(strpos($message, "/jabar") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg2);
}else if(strpos($message, "/jateng") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg3);
}else if(strpos($message, "/jatim") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg4);
}else if(strpos($message, "/banten") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg5);
}else if(strpos($message, "/yogakarta") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg6);
}else if(strpos($message, "/kaltim") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg7);
}else if(strpos($message, "/bali") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg8);
}else if(strpos($message, "/sumut") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg9);
}else if(strpos($message, "/riau") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg10);
}else if(strpos($message, "/sumsel") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg11);
}else if(strpos($message, "/suba") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg12);
}else if(strpos($message, "/nusa") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg13);
}else if(strpos($message, "/kalsel") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg14);
}else if(strpos($message, "/sumsel") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg15);
}else if(strpos($message, "/lampung") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg16);
}else if(strpos($message, "/kepriau") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg17);
}else if(strpos($message, "/kepbel") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg18);
}else if(strpos($message, "/kalba") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg19);
}else if(strpos($message, "/sulteng") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg20);
}else if(strpos($message, "/kalteng") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg21);
}else if(strpos($message, "/sulut") === 0) {
     file_get_contents($path."/sendmessage?chat_id=".$chatID."&text=".$msg22);
}
