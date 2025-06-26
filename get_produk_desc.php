<?php
header('Content-Type: application/json');
include 'koneksimysql.php';

// Ambil semua data produk dan urutkan berdasarkan harga jual termurah
$query = "SELECT * FROM tbl_product ORDER BY hargajual ASC LIMIT 6";
$result = $conn->query($query);

$products = array();
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);

$conn->close();
