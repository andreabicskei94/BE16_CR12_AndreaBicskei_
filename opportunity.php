<?php

require_once 'components/db_connect.php';
$sql = "SELECT * FROM flats WHERE price_reduction = 'true' "; 
$result = mysqli_query($connect, $sql);

$body="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
        
        $body .= '<div class=" mb-5 col col-12 col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch">
        <div class="row g-1 container-fluid card shadow-lg bg-card-color">
        <div class="";">
        <img style="width:100%; height:220px; object-fit: cover;" src=pictures/'.$row["picture"].' class="card-img-top img-fluid" alt="...">
        <div class="card-body">
        <div class="d-flex justify-content-between">

        <h5 class="card-title">'.$row["advert_title"].'</h5>
        <h5 class="card-title">'.$row["city"].'</h5>
        
        </div>
          
          <hr>
          <div class="d-flex justify-content-between"> 

          <p class="card-text d-flex justify-content-between">'.$row["price"].'</p>
          <p class="card-text d-flex justify-content-between">'.$row["size"].'</p>
          <p class="card-text d-flex justify-content-between">Rooms: '.$row["number_of_rooms"].'</p>
          </div>
         
          <a href="update.php?id='.$row["id"].'" class="m-1 btn btn-success">Update</a>
          <a href="delete.php?id='.$row["id"].'" class="m-1 btn btn-danger">Delete</a>
          <a href="details.php?id='.$row["id"].'" class="m-1 btn btn-warning">Details</a>
          
        </div>
        </div>
        </div>
      </div>
      ';
    }
}else {
    $body="
       <tr>
         <td> colspan='5' class='text-center'>No Data </td>
        </tr>
    
    ";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"?>
    <link rel="stylesheet" href="style.css">
   
    <title>Opportunities</title>
    
</head>

<body>

<?php require_once "components/navbar.php" ?>

    <div class="container">
      
     <div class="row justify-content-center text-center">
        <?php echo $body ?>
        <a href= 'index.php'><button class='btn btn-success btn-lg w-25 mb-5 text-center' type='button'>Go Back</button></a>
     </div>
    </div>


<?php require_once "components/footer.php" ?>
</body>
</html>