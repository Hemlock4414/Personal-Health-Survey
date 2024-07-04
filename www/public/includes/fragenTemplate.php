


<?php

session_start(); // Starte die Session, um darauf zugreifen zu können

include 'data.php'; // Annahme, dass hier $fragen definiert wird

// Initialisierung des Fortschritts, falls nicht gesetzt
if (!isset($_SESSION['fortschritt'])) {
    $_SESSION['fortschritt'] = 1;
}

// Initialisieren des Antwort-Arrays in der Session, falls noch nicht vorhanden
if (!isset($_SESSION['antworten'])) {
    $_SESSION['antworten'] = [];
}

// Verarbeiten der Formularübermittlung
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aktuelleFrageId = $_SESSION['fortschritt'];

    // Antworten speichern
    foreach ($fragen as $frage) {
        if ($frage['id'] == $aktuelleFrageId) {
            // Überprüfen und speichern des Werts der Antwort basierend auf dem Fragetyp
            if ($frage['typ'] == 'slider' || $frage['typ'] == 'text') {
                if (isset($_POST[$frage['name']])) {
                    $_SESSION['antworten']["Frage $aktuelleFrageId"] = $_POST[$frage['name']];
                }
            } elseif ($frage['typ'] == 'radio' && isset($_POST[$frage['name']])) {
                $_SESSION['antworten']["Frage $aktuelleFrageId"] = $_POST[$frage['name']];
            }
            break;
        }
    }

    // Navigation
    if (isset($_POST['back'])) {
        if ($_SESSION['fortschritt'] == 1) {
            session_unset(); // Zurücksetzen der gesamten Session, falls auf erster Seite und 'Back' gedrückt wurde
            header('Location: index.php');
            exit;
        } else {
            $_SESSION['fortschritt']--;
        }
    } elseif (isset($_POST['next'])) {
        $_SESSION['fortschritt']++;
    } elseif (isset($_POST['send'])) {
        header('Location: result.php');
        exit;
    }
}

$aktuelleFrageId = $_SESSION['fortschritt'];

foreach ($fragen as $frage) {
    if ($frage['id'] == $aktuelleFrageId) {
        echo '<div id= "formContainer"> <form method="post" action="">';
        
        // Je nach Fragetyp das entsprechende HTML ausgeben
        if ($frage['typ'] == 'slider') {
            echo '<p class= "textFrage">' . $frage['frage'] . '</p>';
            echo '<input class= "classSlider" type="range" min="' . $frage['min'] . '" max="' . $frage['max'] . '" value="' . $frage['wert'] . '" name="' . $frage['name'] . '" id="' . $frage['id'] . '" >';
        } elseif ($frage['typ'] == 'radio') {
            echo '<p class= "textFrage">' . $frage['frage'] . '</p>';
            foreach ($frage['optionen'] as $optionText => $optionValue) {
                echo '<label class= "classRadio">';
                echo '<input  type="radio" name="' . $frage['name'] . '" value="' . $optionValue . '" > ' . $optionText;
                echo '</label><br>';
            }
        } elseif ($frage['typ'] == 'text') {
            echo '<p class= "textFrage">' . $frage['frage'] . '</p>';
            echo '<input class= "classNumber" type="number" name="' . $frage['name'] . '" value="' . $frage['wert'] . '" min="0" max="5" >';
        }
        
        // Zurück- und Weiter-Buttons
        echo '<div class="buttons"> <button class="back-button" type="submit" name="back"><span class="button-text">BACK</Back</span></button>';
        if ($aktuelleFrageId != 10) { // Annahme, dass hier die maximale Anzahl an Fragen festgelegt ist
            echo '<button type="submit" name="next"><span class="button-text">Next</span></button> </div>';
        } else {
            echo '<button type="submit" name="send"><span class="button-text">Send</span></button> </div>';
        }
        
        echo '</form> </div>';
        break; // Beende die Schleife nachdem die passende Frage angezeigt wurde
    }
}


