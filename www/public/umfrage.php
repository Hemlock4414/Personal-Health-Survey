<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



  <?php
    include 'includes/fragenTemplate.php';

    function prettyPrint($a){
      echo '<pre>';
      print_r($a);
      echo '</pre>';
  }
  prettyPrint($_SESSION);



  ?>
    
</body>
</html>