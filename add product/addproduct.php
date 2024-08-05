<?php
    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
    include('addproductbackend.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload Form</title>
    <link rel="stylesheet" href="addproduct.css">
</head>
<body>
   
    <form method="post" enctype="multipart/form-data">
        <h2>Upload  Information</h2>
        <div class="Product_name">
            <label for="prod_name">Product Name:</label>
            <input type="text" id="prod_name" name="prod_name" required>
        </div>
        <div class="Price">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div class="image">
            <label for="prod_image">Product Image:</label>
            <input type="file" id="prod_image" name="prod_image" accept="image/*" required>
        </div>
        <div class="Category">
            <label for="prod_category">Product Category:</label>
            <!-- <input type="text" id="prod_category" name="prod_category" required> -->
            <select class="Radio-Catogary" name="prod_category" id="prod_category">
                <option>Choose The Product Category</option>           
                <option value="Chair">Chair</option>
                <option vlaue="Table">Table</option>
                <option value="Bed">Bed</option>
                <option value="Marble">Marble</option>
                <option value="Bricks">Bricks</option>
                <option value="Cement">Cement</option>
                <option value="Sofa">Sofa</option>
                <span id=category_error></span>
            </select>
        </div>
        <div class="button-div">
            <button class="button" onclick="prodvalidity()" type="submit" id="btn"> Submit</button>
        </div>
    </form>
    <script>
        prodvalidity(){
            var category=document.getElementById("prod_category").value;
            if(catogory==""){
                document.getElementById("category_error").innerHTML="Please choose a category for product";
            }
        }
    </script>
</body>
</html>