<?php
// 建立與資料庫的連線
$servername = "localhost"; // 資料庫伺服器名稱
$username = "your_username"; // 使用者名稱
$password = "your_password"; // 使用者密碼
$dbname = "your_database"; // 資料庫名稱

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 從資料庫中取得資料
$sql = "SELECT * FROM your_table"; // 資料表名稱
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 迭代輸出每一筆資料
    while ($row = $result->fetch_assoc()) {
        echo "序號：" . $row["serial_number"] . "<br>";
    }
} else {
    echo "沒有資料";
}

// 關閉資料庫連線
$conn->close();
?>
