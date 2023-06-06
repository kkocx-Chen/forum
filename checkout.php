<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>顯示資料</title>
    <!-- 引入 Bootstrap 的 CSS 檔案 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-columns {
            margin: 0 auto;
        }

        .align-self-center {
            align-self: center;
            margin-top: -200px; /* 自定义上边距 */
        }

        .custom-card {
            position: relative;
            width: 500px; /* 自定义卡片宽度 */
            
        }

        .custom-card .card-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <?php
    // 建立与数据库的连接
    $servername = "terminal.kkocx.com"; // 数据库服务器名称
    $username = "User01"; // 用户名
    $password = "Test01"; // 密码
    $dbname = "user01"; // 数据库名称

    $conn = new mysqli($servername, $username, $password, $dbname);

    // 检查连接是否成功
    if ($conn->connect_error) {
        die("连接失败：" . $conn->connect_error);
    }

    $sql = "SELECT * FROM Win11"; // 数据表名称
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container mt-4">';
        echo '<div class="card-columns align-self-center">';

        // 迭代输出每一笔数据
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card mb-3 text-center custom-card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">這是您的序號</h5>';
            echo '<p class="card-text">' . $row["serial_number"] . '</p>';
            echo '<a href="index.html" class="btn btn-primary card-btn">回首頁</a>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo '没有数据';
    }

    // 关闭数据库连接
    $conn->close();
    ?>
</body>
</html>
