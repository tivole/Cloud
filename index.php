<?php require "latin_kirill.php"; ?>
<?php require "kirill_latin.php"; ?>

<?php

function print_array($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        echo '['.$i.'] => '.$arr[$i].'<br>';
    }
}

$word = "Hesenov Kamran";

// $n = strlen(utf8_decode($word));

// // echo my_mb_substr("əəədəəin", 1, 1);
// echo $n;

$kirill = L_To_K($word);

print_array($kirill);


/*
Soltanov Asif Elməddin
Səmədov Pərviz Alim 
Kərimov Aqash Heydər
Salahzadə Saləh Vagif
Babaşov Sahib Edqar


Солтанов Асиф Елмәдин
Сәмәдов Пәрвиз Алим
Салахзадә Салех Вагиф
Бабашов Сахиб еддар
*/

?>

