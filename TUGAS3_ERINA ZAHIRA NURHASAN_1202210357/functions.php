<?php

$conn = mysqli_connect("localhost:3308", "root", "", "erinaboutique");

function query($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $picture = $data["picture"];
    $productid = $data["productid"];
    $productname = $data["productname"];
    $price = $data["price"];
    $stok = $data["stok"];

    $query = "INSERT INTO productlist
        VALUES
        ('','$picture', '$productid', '$productname', '$price', '$stok')";
    mysqli_query($conn,$query);
}

function del($no){
    global $conn;
    $no = mysqli_real_escape_string($conn, $no);
    mysqli_query($conn, "DELETE FROM productlist WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $no = $data["no"];
    $picture = $data["picture"];
    $productid = $data["productid"];
    $productname = $data["productname"];
    $price = $data["price"];
    $stok = $data["stok"];

    $query = "UPDATE productlist SET
        picture = '$picture',
        productid = '$productid',
        productname = '$productname',
        price = '$price',
        stok = '$stok'
        WHERE no = $no
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>