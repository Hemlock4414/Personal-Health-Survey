<?php

include 'data.php'; // Annahme, dass hier $fragen definiert wird


// Initialisierung des Fortschritts, und $aktuelleFrageId
if (!isset($_SESSION['fortschritt'])) {
    echo "Fortschritt = 1; <br>";
    $_SESSION['fortschritt'] = 1;
}

$letzteFrageId = $_SESSION['fortschritt'];

if (isset($_POST['next'])) {
    $aktuelleFrageId = $letzteFrageId + 1;
}
else if (isset($_POST['back'])) {
    $aktuelleFrageId = $letzteFrageId - 1;
}
else {
    $aktuelleFrageId = $letzteFrageId;
}

$_SESSION['fortschritt'] = $aktuelleFrageId;
$letzteFrageName = 'inputFrage' . $letzteFrageId;

// Fragedaten und punkte id
$frage = $fragen[$aktuelleFrageId];
$punkteId = 'punkte' . $letzteFrageId;

// Initialisieren des Antwort-Arrays in der Session, falls noch nicht vorhanden
if (!isset($_SESSION['antworten'])) {
    $_SESSION['antworten'] = [];
}

echo "\$letzteFrageId = $letzteFrageId; <br>";
echo "\$aktuelleFrageId = $aktuelleFrageId; <br>";
echo "\$letzteFrageName = $letzteFrageName; <br>";
prettyPrint($frage);
prettyPrint($_POST);

// Setze die erreichte Punktzahl in die Session, 
// abhängig von 'back', 'next' oder 'send'. 
if (isset($_POST['back'])) {
    // Es werden beim Zurückgehen keine Punkte registriert.
    echo "BACK<br>";

} elseif (isset($_POST['next'])) {
    // Punkte registrieren
    echo "NEXT<br>";

    // $antwort = $_POST[$frage['name']];
    $_SESSION['antworten'][$punkteId] = $_POST[$letzteFrageName];
} elseif (isset($_POST['send'])) {
    // Punkte registrieren und auf result.php weiterleiten.
    echo "SEND<br>";
    
    // $antwort = $_POST[$frage['name']];
    $_SESSION['antworten'][$punkteId] = $_POST[$letzteFrageName];

    header('Location: result.php');
    exit;
}

    echo "\n<form method='post' action='umfrage.php'>";
        
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
        echo "\n
        <div class= 'button'>
            <button type='submit' 
                    name='back'>
                    Back</button>";
        if ($aktuelleFrageId != 10) { // Annahme, dass hier die maximale Anzahl an Fragen festgelegt ist
            echo "\n
            <button type='submit'
                    name='next'>
                    Next</button>
        </div>";
        } 
        else {
            echo "\n
            <button type='submit'
                    name='send'>
                    Send</button>
        </div>";
        }
        echo "\n</form>";

        echo "\n<script src='scripts/vali.js'></script>";

