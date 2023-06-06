<?php
// checkout.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 取得產品 ID
    $productId = $_POST['product_id'];

    // 在這裡處理購買邏輯，包括生成序號和儲存到資料庫中
    $serialNumber = generateSerialNumber(); // 假設有一個函式生成序號

    // 將序號儲存到資料庫或其他儲存方式中

    // 重導向到包含序號的頁面
    header('Location: serial_number.php?serial=' . urlencode($serialNumber));
    exit();
}
?>