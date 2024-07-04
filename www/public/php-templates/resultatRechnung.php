
<?php
session_start();


foreach ($_SESSION['antworten'] as $frage => $antwort) {
    // Erstelle eine Variable mit dem Namen des Schlüssels ($frage)
    ${'antwort_' . str_replace(' ', '_', strtolower($frage))} = $antwort;
}

$antwort_frage_1= $antwort_frage_1/ 5;
$antwort_frage_3= $antwort_frage_3/5;

if($antwort_frage_5== 1){
    $antwort_frage_5= 0;
}elseif($antwort_frage_5== 2){
    $antwort_frage_5= 0.5;
}elseif($antwort_frage_5== 3){
    $antwort_frage_5= 1;
}elseif($antwort_frage_5== 4){
    $antwort_frage_5= 0.5;
}elseif($antwort_frage_5== 5){
    $antwort_frage_5= 0;
}

if($antwort_frage_6 <= 2){
    $antwort_frage_6= 1;
}else{
    $antwort_frage_6= 0;
}

if($antwort_frage_7 <= 2){
    $antwort_frage_7= 1;
}else{
    $antwort_frage_7= 0;
}

if($antwort_frage_8 <= 1){
    $antwort_frage_8= 1;
}else{
    $antwort_frage_8= 0;
}

if($antwort_frage_9 <= 1){
    $antwort_frage_9= 1;
}else{
    $antwort_frage_9= 0;
}

if($antwort_frage_10 >= 1){
    $antwort_frage_9= 0;
}else{
    $antwort_frage_10= 1;
}

$resultat= $antwort_frage_1+ $antwort_frage_2+ $antwort_frage_3+ $antwort_frage_4+ $antwort_frage_5+ $antwort_frage_6+ $antwort_frage_7+ $antwort_frage_8+ $antwort_frage_9+ $antwort_frage_10;


if($resultat <=3){
    echo '<p>unhealthy</p>';
  }elseif($resultat<=7){
    echo '<p>healthy</p>';
  }else{
    echo '<p>very healthy</p>';
  }

  

  



?>

