<?php

include 'data.php';

if (isset($_SESSION)) {
    session_unset();
  }
  session_start();
  

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
    if (isset($_POST['zurueck'])) {
        if ($_SESSION['fortschritt'] == 1) {
            header('Location: homepage.php'); // Anpassen auf deine Homepage URL
            exit;
        } else {
            $_SESSION['fortschritt']--;
        }
    } elseif (isset($_POST['weiter'])) {
        $_SESSION['fortschritt']++;
    }
}

$aktuelleFrageId = $_SESSION['fortschritt'];

foreach ($fragen as $frage) {
    if ($frage['id'] == $aktuelleFrageId) {
        echo '<form method="post" action="">';
        
        // Slider-Typ Frage
        if ($frage['typ'] == 'slider') {
            echo '<p>' . $frage['frage'] . '</p>';
            echo '<input type="range" min="' . $frage['min'] . '" max="' . $frage['max'] . '" value="' . $frage['wert'] . '" name="' . $frage['name'] . '" id="' . $frage['id'] . '" required>';
        
        // Radio-Typ Frage
        } elseif ($frage['typ'] == 'radio') {
            echo '<p>' . $frage['frage'] . '</p>';
            foreach ($frage['optionen'] as $optionText => $optionValue) {
                echo '<label>';
                echo '<input type="radio" name="' . $frage['name'] . '" value="' . $optionValue . '" required> ' . $optionText;
                echo '</label><br>';
            }
        
        // Number-Typ Frage (vorher Text)
        } elseif ($frage['typ'] == 'text') { // Anpassen auf number falls du text nicht ändern möchtest
            echo '<p>' . $frage['frage'] . '</p>';
            echo '<input type="number" name="' . $frage['name'] . '" value="' . $frage['wert'] . '" min="0" max="5" required>';
        }
        
        // Zurück- und Weiter-Buttons
        echo '<button type="submit" name="zurueck">Zurück</button>';
        echo '<button type="submit" name="weiter">Weiter</button>';
        echo '</form>';
        break; // Beende die Schleife nachdem die passende Frage angezeigt wurde
    }
}
?>
