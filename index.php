<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            background-color: white;
            color: black;

        }   
    </style>
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Online Shope</h2>
                <img src="photo.png" alt="logo" width="300">
                <br>
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">chose image for product</label>
                <button name="upload">Upload Product </button>
                <br><br>
                <a href="products.php">Show All Product</a>
            </form>
        </div>
        <p>Developer by Mahmoud</p>
    </center>
</body>

</html>