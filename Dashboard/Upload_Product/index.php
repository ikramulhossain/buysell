<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload</title>
</head>
<body>
    <?php

    if(isset($_POST['submit'])){
        $product_name=$_POST['product_name'];
        
    }
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
     <div class="product_Name">
     Product Name: <br>
     <input type="text" name="product_name"><br><br>
     </div>
     
     <div class="Prize">
     Prize: <br>
     <input type="text" name="Prize"><br><br>
     </div>

     <div class="Product Description">
     Product Description: <br>
     <textarea name="Product Description" id="Product Description" cols="30" rows="10">
     </div>
 
     <div class="Size">
     Size: <br>
     <input type="text" name="Size"><br><br>
     </div>

     <div class="Stock">
     Stock: <br>
     <input type="text" name="Stock"><br><br>
     </div>

     <div class="Product Color">
     Product Color: <br>
     <input type="text" name="Product Color"><br><br>
     </div>

     <div class="product_Name">
     Product Name: <br>
     <input type="text" name=""><br><br>
     </div>

     <div class="Image">
     Image: <br>
     <input type="file" name="image"><br><br>
     <input type="submit" name="submit" value="insert">
     </div>


    
</form>
</body>
</html>