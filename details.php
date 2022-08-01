<?php

require_once "components/db_connect.php";

//Get destination details 
if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $sql ="SELECT * FROM flats WHERE id = $_GET[id]";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
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
   
    <title>Details</title>
    <style>
        #map {
            height: 90%;
        }
       html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

<?php require_once "components/navbar.php" ?>

    <div class="container">
        <h1 class="text-center mt-5 mb-5 p-3 h-text my-5"><?=$row["advert_title"]?></h1>

        <div class="row justify-content-center mb-5">

        <div class="card col-lg-8 p-0 shadow border-0 details-card">
            
                <img src="pictures/<?=$row["picture"]?>" class="card-img-top rounded-0 mt-2">
                <h5 class="card-title p-3 text-center"><?=$row["price"]?></h5>
                <div class="card-body">
                    <p class="card-text text-center"><?=$row["description"]?></p>
                    <div class="d-flex justify-content-around">
                    <p class="card-text text-center"><b>City: </b><?=$row["city"]?></p>
                    <p class="card-text text-center"><b>Address: </b><?=$row["adress"]?></p>
                    <p class="card-text text-center"><b>Rooms: </b><?=$row["number_of_rooms"]?></p>
                    <p class="card-text text-center"><b>Size: </b><?=$row["size"]?></p>
                    </div>
                    <a href="index.php" class="btn ">Go Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5" id="map"></div>

<script>
      var map;
    function initMap() {
        var location = {
            lat: <?=$row["latitude"]?>,
            lng: <?=$row["longitude"]?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 10
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

<?php require_once "components/footer.php" ?>
</body>
</html>