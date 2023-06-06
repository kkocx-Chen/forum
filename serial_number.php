<?php
// 建立與資料庫的連線
$servername = "terminal.kkocx.com"; // 資料庫伺服器名稱
$username = "User01"; // 使用者名稱
$password = "Test01"; // 使用者密碼
$dbname = "user01"; // 資料庫名稱

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 更新 serial_number 的值
$newSerialNumber = "TFP9Y-VCY3P-VVH3T-8XXCC-MF4YK"; // 新的序號值
$sql = "UPDATE Win11 SET serial_number = '$newSerialNumber'";
if ($conn->query($sql) === TRUE) {
    echo "serial_number 已成功更新";
} else {
    echo "發生錯誤：" . $conn->error;
}

// 關閉資料庫連線
$conn->close();
?>
