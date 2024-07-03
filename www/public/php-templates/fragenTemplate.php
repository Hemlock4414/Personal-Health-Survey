<?php
session_start();

include 'data.php';

if (!isset($_SESSION['fortschritt'])) {
    $_SESSION['fortschritt'] = 1;
}

/* $aktuelleFrage= $_SESSION['fortschritt']; */

$aktuelleFrage= 2;

foreach ($fragen as $frage) {
 if ($frage['id']== $aktuelleFrage){
    if ($frage)
        if ($frage['typ']== 'slider'){
            echo '<p>';
            echo $frage['frage'];
            echo '</p>';

            echo '<input class="slider" type="range" min="'. $frage['min'] . '" max= "'. $frage['max']. '" value="'. $frage['wert']. '" name="'. $frage['name']. '" id="'. $frage['id']. '">';

            echo '<button type="button">Zurück</button>';
            echo '<button type="submit">Weiter</button>';
        }elseif ($frage['typ']== 'radio'){

            echo '<p>';
            echo $frage['frage'];
            echo '</p>';

            foreach ($frage['optionen'] as $optionText => $optionValue) {
                echo '<label>';
                echo '<input class= "radio" type="radio" name="' . $frage['name'] . '" value="' . $optionValue . '"> ' . $optionText;
                echo '</label><br>';
            }
            echo '<button type="button">Zurück</button>';
            echo '<button type="submit">Weiter</button>';

        }elseif ($frage['typ']== 'text'){

            echo '<p>';
            echo $frage['frage'];
            echo '</p>';

            echo '<input class= "text" type="text" name="' . $frage['name'] . '" value="' . $frage['wert'] . '">';
            echo '<button type="button">Zurück</button>';
            echo '<button type="submit">Weiter</button>';

        }

        
    }
    }


?>