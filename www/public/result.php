
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- MDBootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
  <!-- Andere Meta-Tags und CSS-Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="src/css/style.css">
  <link rel="stylesheet" type="text/css" href="src/css/header.css">
  <link rel="stylesheet" type="text/css" href="src/css/result.css">
  <title>result</title>
</head>
<body>



<?php include 'includes/header.php';?>

<div class="grats-text">
    <h1>Congratulations on completing the health survey! </h1>
    <h5>Based on our state-of-the-art health assessment algorithm, developed by 
      leading medical experts and data scientists, we have analyzed the information 
      you provided. Considering multiple health factors, we have generated a deeply 
      complex personalized evaluation of your current health status. As a result of 
      this comprehensive analysis, you have achieved the following result:
    </h5>
</div>


<div class="result-page">

<?php include 'includes/resultatRechnung.php';?>

  <div class="score-text">
  <p>Your score:</p>&emsp;
  <?php echo $totalPunkte; ?>
  </div>

</div> 
<?php include 'includes/footer.php';?>    

   
</body>
</html>