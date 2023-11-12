<?php
require 'functions.php';
$no = $_GET["no"];
$prd = query("SELECT * FROM productlist WHERE no =$no")[0];

if (isset($_POST["submit"])){
    if (edit($_POST)> 0){
        echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<DOCTYPE html>
    <html lang="en">
        <head>
            <title>Edit Product List</title>
        </head>
        <body>
            <h1>Edit Product List</h1>
            <form action="" method="post">
            <input type="hidden" name="no" value="<?= $prd["no"];?>">
                <ul>
                    <li>
                        <label for="picture">Picture: </label>
                        <input type="text" name="picture" id="picture" required
                        value="<?= $prd["picture"];?>">
                    </li>
                    <li>
                        <label for="productid">Product ID: </label>
                        <input type="text" name="productid" id="productid" required
                        value="<?= $prd["productid"];?>">
                    </li>
                    <li>
                        <label for="productname">Product Name: </label>
                        <input type="text" name="productname" id="productname" required
                        value="<?= $prd["productname"];?>">
                    </li>
                    <li>
                        <label for="price">Price: </label>
                        <input type="text" name="price" id="price" required
                        value="<?= $prd["price"];?>">
                    </li>
                    <li>
                        <label for="stok">Stock: </label>
                        <input type="text" name="stok" id="stok" required
                        value="<?= $prd["stok"];?>">
                    </li>
                    <li>
                        <button type="submit" name="submit">Edit Data</button>
                    </li>
                </ul>
            </form>
        </body>
    </html>