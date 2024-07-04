

<?php 
session_unset();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">


</head>

<body>
<?php
include "header.php";
?>




<form action="umfrage.php" method="get">
        <button type="submit">Zur Umfragen-Seite</button>
    </form>
 

<?php
include "footer.php";
?>
</body>

</html>
