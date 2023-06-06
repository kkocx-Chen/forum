<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>顯示資料</title>
    <!-- 引入 Bootstrap 的 CSS 檔案 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>
<body>

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

// 從資料庫中取得資料
$sql = "SELECT * FROM Win11"; // 資料表名稱
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<div class="row">';

    // 迭代輸出每一筆資料
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4">';
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">序號</h5>';
        echo '<p class="card-text">' . $row["serial_number"] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
} else {
    echo '沒有資料';
}



// 關閉資料庫連線
$conn->close();
?>
</body>
</html>