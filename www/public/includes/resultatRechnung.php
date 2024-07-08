
<?php

foreach ($_SESSION['antworten'] as $key => $value) {
    ${$key} = $value;
}




$totalPunkte = prozentFrage1($punkte1);
$totalPunkte += prozentFrage2($punkte2);
$totalPunkte += prozentFrage3($punkte3);
$totalPunkte += prozentFrage4($punkte4);
$totalPunkte += prozentFrage5($punkte5);
$totalPunkte += prozentFrage6($punkte6);
$totalPunkte += prozentFrage7($punkte7);
$totalPunkte += prozentFrage8($punkte8);
$totalPunkte += prozentFrage9($punkte9);
$totalPunkte += prozentFrage10($punkte10);




if ($totalPunkte<= 3){
    echo '<p>unhealthy</p>';
  }elseif($totalPunkte<= 7){
    echo '<p>healthy</p>';
  }else{
    echo '<p>very healthy</p>';
  }

// Auswertungsfunktionen Punkte -> Prozent ---------------------

function prozentFrage1($punkte1) {
    return $punkte1 / 5;
}

function prozentFrage2($punkte2){
    return $punkte2;
}

function prozentFrage3($punkte3){
    return $punkte3/ 5;
}

function prozentFrage4($punkte4){
    return $punkte4;
}

function prozentFrage5($punkte5){

    if($punkte5== 1){
        $punkte5= 0;
    }elseif($punkte5== 2){
        $punkte5= 0.5;
    }elseif($punkte5== 3){
        $punkte5= 1;
    }elseif($punkte5== 4){
        $punkte5= 0.5;
    }elseif($punkte5== 5){
        $punkte5= 0;
    }
    return $punkte5;
}

function prozentFrage6($punkte6){
    if($punkte6 >= 2){
        $punkte6= 1;
    }else{
        $punkte6= 0;
    }

    return $punkte6;

}

function prozentFrage7($punkte7){
    if($punkte7 >= 2){
        $punkte7= 1;
    }else{
        $punkte7= 0;
    }

    return $punkte7;

}

function prozentFrage8($punkte8){
    if($punkte8 >= 1){
        $punkte8= 1;
    }else{
        $punkte8= 0;
    }

    return $punkte8;

}


function prozentFrage9($punkte9){
    if($punkte9 >= 1){
        $punkte9= 1;
    }else{
        $punkte9= 0;
    }

    return $punkte9;

}

function prozentFrage10($punkte10){
    if($punkte10 >= 1){
        $punkte10= 0;
    }else{
        $punkte10= 1;
    }

    return $punkte10;

}




