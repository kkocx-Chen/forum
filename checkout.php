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
    // 建立一個 HTML 表格來顯示資料
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>序號</th></tr></thead>';
    echo '<tbody>';

    // 迭代輸出每一筆資料
    while ($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["serial_number"] . '</td></tr>';
    }

    echo '</tbody></table>';
} else {
    echo '沒有資料';
}


// 關閉資料庫連線
$conn->close();
?>
