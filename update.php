<?php
 
require_once 'components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM flats WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $advert_title = $data['advert_title'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $picture = $data['picture'];
        $city = $data['city'];
        $number_of_rooms =$data ['number_of_rooms'];
        $adress =$data  ['adress'];
        $price_reduction = $data['price_reduction'];
        $size =$data['size'];
       
    } else {
        header("location: ../error.php");
    }
    mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Property</title> 
       
        <?php require_once 'components/boot.php' ?>
        <link rel="stylesheet" href="style.css">
         
    </head>
    <body>
    
    <?php require_once 'components/navbar.php' ?>
    
        <div class="container">
            <div class="row text-center justify-content-center">
                 <h3 class="h-text my-5">Update request</h3>
                 <img class="" src='pictures/<?php echo $picture ?>' alt="<?php echo $picture ?>">
                    
            </div>

        
        
        


        <fieldset>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                <tr>
                    <th>Property Type</th>
                    <td><input class='form-control' type="text" name="advert_title" placeholder="Property Type" value="<?php echo $advert_title ?>" /></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><input class='form-control' type="text" name="city" placeholder="City" value="<?php echo $city ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="Photo"/></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>" /></td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td><input class='form-control' type="text" name="size"  placeholder="Property Size" value="<?php echo $size ?>" /></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input class='form-control' type="text" name="adress"  placeholder="Address" value="<?php echo $adress ?>" /></td>
                </tr>
                <tr>
                    <th>Number of rooms</th>
                    <td><input class='form-control' type="number" name="number_of_rooms"  placeholder="Number of Rooms" value="<?php echo $number_of_rooms ?>" /></td>
                </tr>
                <tr>
                    <th>Price reduction</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="price_reduction"  value="<?php echo $price_reduction ?>">
		 		        <option value="true">Yes</option>
		 		        <option value="false">No</option> 
		 	           </select>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>


                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" /> 
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>
        <?php require_once 'components/footer.php' ?>
    </body>
</html>
