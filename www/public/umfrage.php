<?php
session_start();


function prettyPrint($a){
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

prettyPrint($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
    <!-- Andere Meta-Tags und CSS-Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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