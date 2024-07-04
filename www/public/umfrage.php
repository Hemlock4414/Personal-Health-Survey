<?php
// Am Anfang Ihrer Skripte, vor session_start()
ini_set('session.gc_maxlifetime', 3600); // Setzt die Lebensdauer auf 1 Stunde
session_set_cookie_params(3600); // Setzt die Cookie-Lebensdauer auf 1 Stunde
session_start();
?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/fragen.css">

<title>Document</title>
</head>
<body>
<?php
include 'includes/header.php';
?>

<div class="fragen-container">
    <h1>Survey</h1>
  
<?php
include 'includes/fragenTemplate.php';
?>
    
</div>

<?php
include 'includes/footer.php';
?>


    
</body>
</html>