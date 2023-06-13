<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>刪除數據</title>
    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>刪除數據</h1>

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

    // 刪除所有數據
    $sql = "DELETE FROM Win11";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">已刪除所有數據！</div>';
    } else {
        echo '<div class="alert alert-danger">數據刪除失敗：' . $conn->error . '</div>';
    }

    // 關閉資料庫連線
    $conn->close();
    ?>
</div>

<!-- 引入 Bootstrap 的 JS 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
