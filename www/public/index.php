
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

<?php

function prettyPrint($a){
  echo '<pre>';
  print_r($a);
  echo '</pre>';
}


?>

  <?php

    include 'php-templates/fragenTemplate.php';

    prettyPrint($_SESSION);

  ?>

</body>

</html>
