<?php
$servername = "terminal.kkocx.com"; // 資料庫伺服器名稱
$username = "User01"; // 使用者名稱
$password = "Test01"; // 使用者密碼
$dbname = "user01"; // 資料庫名稱

// 建立與資料庫的連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

$serialNumber = "12345678"; // 要插入的序號值

// 構建 INSERT 語句並執行
$sql = "INSERT INTO Win11 (serial_number) VALUES ('$serialNumber')";

if ($conn->query($sql) === TRUE) {
    echo "序號已成功插入";
} else {
    echo "發生錯誤：" . $conn->error;
}

// 關閉資料庫連線
$conn->close();
?>
