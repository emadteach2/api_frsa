<?php

// دالة لإضافة رؤوس CORS
function add_cors_headers() {
    // السماح بالوصول من أي مصدر
    header("Access-Control-Allow-Origin: *");
    // السماح بطرق HTTP محددة
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    // السماح برؤوس HTTP محددة
    header("Access-Control-Allow-Headers: Content-Type");
}

// استدعاء الدالة لإضافة الرؤوس
add_cors_headers();

// باقي السكربت الخاص بك
$req = file_get_contents("https://kalemtayeb.com/");
$doaa = explode('دعـــاء', $req)[1];
$doaa = explode('<p>', $doaa)[1];
$doaa = explode('</p>', $doaa)[0];

$hkma = explode('حكمــة', $req)[1];
$hkma = explode('<p>', $hkma)[1];
$hkma = explode('</p>', $hkma)[0];

$frsa = explode('فرصـــة', $req)[1];
$frsa = explode('<p>', $frsa)[1];
$frsa = explode('</p>', $frsa)[0];

$data = array(
    "الدعاء" => $doaa,
    "الحكمة" => $hkma,
    "الفرصة" => $frsa
);

$json_data = json_encode($data);

echo $json_data;
?>
