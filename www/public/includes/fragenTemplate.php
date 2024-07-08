<?php

include 'data.php'; // Annahme, dass hier $fragen definiert wird


// Initialisierung des Fortschritts, falls nicht gesetzt
if (!isset($_SESSION['fortschritt'])) {
    $_SESSION['fortschritt'] = 1;
}

// Initialisieren des Antwort-Arrays in der Session, falls noch nicht vorhanden
if (!isset($_SESSION['antworten'])) {
    $_SESSION['antworten'] = [];
}

$aktuelleFrageId = $_SESSION['fortschritt'];
$frage = $fragen[$aktuelleFrageId];
$punkteId = 'punkte' . $aktuelleFrageId;

// Navigation
if (isset($_POST['back'])) {
    if ($_SESSION['fortschritt'] == 1) {
        session_unset(); // Zurücksetzen der gesamten Session, falls auf erster Seite und 'Back' gedrückt wurde
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['fortschritt']--;
        $aktuelleFrageId = $_SESSION['fortschritt'];
        $frage = $fragen[$aktuelleFrageId];
    }
} elseif (isset($_POST['next'])) {
    $antwort = $_POST[$frage['name']];

    
    $_SESSION['antworten'][$punkteId] = $antwort;

    /* $_SESSION['antworten'][$frage['id']] = $antwort; */
    $_SESSION['fortschritt']++;
    $aktuelleFrageId = $_SESSION['fortschritt'];
    $frage = $fragen[$aktuelleFrageId];
} elseif (isset($_POST['send'])) {
    $antwort = $_POST[$frage['name']];
    $_SESSION['antworten'][$punkteId] = $antwort;
    header('Location: result.php');
    exit;
}

    echo '<form method="post" action="">';
        
        if ($frage['typ'] == 'slider') {
            printSlider(
                $frage['frage'], 
                $frage['name'], 
                $frage['id'], 
                $frage['min'], 
                $frage['max'], 
                $frage['wert']
            );
        } elseif ($frage['typ'] == 'radio') {
            printRadio(
                $frage['frage'], 
                $frage['name'], 
                $frage['id'],
                $frage['optionen'], 
            );
        } elseif ($frage['typ'] == 'number') {
            printNumber(
                $frage['frage'], 
                $frage['name'], 
                $frage['id'], 
                $frage['min'], 
                $frage['max'], 
                $frage['wert']
            );
        }

  // aktuelleFrageId im Post hinterlegen.
        /* echo "<input type='hidden' 
                     name='letzteFrageId' value='$aktuelleFrageId'>"; */

        // Zurück- und Weiter-Buttons
        echo'<div class= "button"><button class="back-button" type="submit" name="back"><p class="button-text">BACK</p></button>';
        if ($aktuelleFrageId != 10) { // Annahme, dass hier die maximale Anzahl an Fragen festgelegt ist
            echo '<button type="submit" name="next"><p class="button-text">NEXT</button></p></div>';
        } else {
            echo '<button  type="submit" name="send"><p class="button-text">SEND</button></p></div>';
        }
        
        echo '</form>';

