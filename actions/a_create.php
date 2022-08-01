<?php

require_once '../components/db_connect.php';
require_once '../components/file_upload.php';

if ($_POST) {   
    $advert_title = $_POST['advert_title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $city = $_POST['city'];
    $number_of_rooms =$_POST ['number_of_rooms'];
    $adress =$_POST  ['adress'];
    $price_reduction = $_POST['price_reduction'];
    $size =$_POST['size'];
   
   
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
    
        $sql = "INSERT INTO `flats`( `picture`, `advert_title`, `price`, `description`, `longitude`, `latitude`, `city`, `number_of_rooms`, `adress`, `price_reduction`) VALUES ('$picture->fileName','$advert_title','$price','$description','$longitude','$latitude', '$city', '$number_of_rooms', '$adress','$price_reduction')";
   
    

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $advert_title </td>
            <td> $description </td>
            </tr></table><hr>";
            header("url=../index.php");
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>