<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah ($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahakan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <h1>Add product to list</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="picture">Picture:</label>
                    <input type="text" name="picture" id="picture">
                </li>
                <li>
                    <label for="productid">Product ID:</label>
                    <input type="text" name="productid" id="productid">
                </li>
                <li>
                    <label for="productname">Product Name:</label>
                    <input type="text" name="productname" id="productname">
                </li>
                <li>
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price">
                </li>
                <li>
                    <label for="stok">Stock:</label>
                    <input type="text" name="stok" id="stok">
                </li>
                <li>
                    <button type="submit" name="submit">Add Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>