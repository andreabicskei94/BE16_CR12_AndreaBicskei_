<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php require_once 'boot.php' ?>
    <title>La casa mia</title>
</head>
<body>
    
<div class="bg-image shadow mb-4">

    <nav class=" navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><h2>La casa mia</h2> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"></a>
              </li>
              
              
            </ul>
            <div class="left-buttons justify-content-space-between">
              <a href= "displayAll.php" class="btn btn-outline-light">Get the API</a>
            <a href= "opportunity.php" class="btn btn-outline-light">Opportunities</a>
            <a href="create.php" class="btn btn-outline-light">Add new flat</a>
             </div>
            
           
          </div>
        </div>
      </nav>
       
       <div class="text-center text-align-center align-items-center text-white text">
       <h2 class="mt-4">Welcome to La casa mia</h2>
       <br>
      
       <p class="fs-6" style="margin: 0 25% 0 25%;">It's called HOME where your heart is.<br>

</p>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
