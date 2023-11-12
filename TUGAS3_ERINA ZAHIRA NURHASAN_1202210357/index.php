<?php

require 'functions.php';

$prd = query("SELECT * FROM productlist");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Erina Boutique Admin</title>
    </head>
    <body>
        <h1>Product List</h1>

        <a href="add.php">Add Product to List</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Action</th>
                <th>Picture</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <?php $i=1; ?>
            <?php foreach ($prd as $row) : ?>
            <tr>
                <td><?= $i?></td>
                <td>
                    <a href="edit.php?no=<?= $row["no"]; ?>">Edit</a>
                    <a href="delete.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah anda ingin menghapus data?');">Delete</a>
                </td>
                <td><img src="img/<?= $row["picture"]; ?>" width="50"></td>
                <td><?= $row["productid"]; ?></td>
                <td><?= $row["productname"]; ?></td>
                <td><?= $row["price"]; ?></td>
                <td><?= $row["stok"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>