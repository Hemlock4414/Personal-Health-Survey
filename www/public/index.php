<?php
// $_SESSION initialisieren
session_start();

if (str_contains($_SERVER['SCRIPT_NAME'], "index-session.php")) {
    session_destroy();
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>StartPage</title>
</head>

<body>

   <section>
      <div class="p-5 text-start bg-image rounded-3" style="
        background-image: url('src/img/green-leaf-background.jpg');
        height: 400px; background-size: cover; background-position: center top;">
      
      
        <div class="d-flex justify-content-start align-items-start h-100">
          <div class="text-white">
            <h1 class="mb-3">Insights for your wellness journey</h1>
            <h4 class="mb-3">Answer questions, gain knowledge. Our surveys provide personalized health feedback to guide your path forward.</h4>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Survey</a>
          </div>
        </div>
      
      </div>
  </section>

  <section>
      <div class="container my-5">
          <div class="row gx-5">
              <div class="col-4">
                  
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24">
                  <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z"/>
                  </svg>
                
                  <h5 class="mb-3">Personalized health insights at your fingertips.</h5>
                 
              </div>

              <div class="col-4">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24">
                <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6"/>
                </svg>
                <h5 class="mb-3">Backed by medical expertise, designed for you.</h5>

              </div>

              <div class="col-4">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24">
                <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/>
                </svg>
                <h5 class="mb-3">Track your progress, celebrate your victories. </h5>
              </div>

          </div>

      </div>


  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="text-success">
          <h5 class="mb-3">Why choose our Health Surveys?</h5>
          </div>
              <p>Unlock personalized insights into your well-being with our expertly crafted health surveys.</p>

              <p>Our platform not only provides you with tailored feedback based on your responses but 
              also contributes to advancing medical research. 
              </p>

              <p>By participating, you'll gain valuable knowledge about your health while playing a 
              part in shaping the future of healthcare.
              </p>

          <div class="container">    
            <div class="row">
                <div class="col d-flex align-items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>
                    <p class="mb-0">Gain personalized health insights</p>
                </div>
                </div>
                <div class="col d-flex align-items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>

                <p class="mb-0">Contribute to medical research</p>
              </div>
              <div class="col d-flex align-items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="#0e821f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>

                <p class="mb-0">Quick and user-friendly</p>
              </div>
            </div>
          </div>

          <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Survey</a>

        </div>
        
        <div class="col-4 offset-2">

          <img src="src/img/body-stretching.jpg" class="img-fluid" width= "auto">
        </div>

      </div>
    </div>



  </section>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
