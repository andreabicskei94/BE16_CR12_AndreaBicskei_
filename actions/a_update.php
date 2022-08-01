<?php



require_once '../components/db_connect.php';
require_once '../components/file_upload.php';



if ($_POST) {  
    
    $advert_title = $_POST['advert_title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $picture = $_POST['picture'];
    $city = $_POST['city'];
    $number_of_rooms =$_POST ['number_of_rooms'];
    $adress =$_POST  ['adress'];
    $price_reduction = $_POST['price_reduction'];
    $size =$_POST['size'];
    $id =$_POST['id'];
    
    
    $uploadError = '';


    $picture = file_upload($_FILES['picture']);
    if($picture->error===0){
        ($_POST["picture"]=="hero.jpg")?: unlink("../pictures/$_POST[picture]");           
        $sql = "UPDATE flats SET  city = '$city', advert_title = '$advert_title', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude', picture = '$picture->fileName' , size ='$size', number_of_rooms='$number_of_rooms', adress='$adress', price_reduction ='$price_reduction' WHERE id = {$id}";
    }else{
        $sql = "UPDATE flats SET city = '$city', advert_title = '$advert_title', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude', picture = '$picture->fileName' , size ='$size', number_of_rooms='$number_of_rooms', adress='$adress', price_reduction ='$price_reduction' WHERE id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);    
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php require_once "../components/boot.php" ?>
        <link rel="stylesheet" href="./style.css">
        <title>Update</title>
    
        
    </head>
    <body>
    <?php require_once "../components/navbar.php" ?>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
        
        <?php require_once "../components/footer.php" ?> 
    </body>
</html>

