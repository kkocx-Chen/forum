<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>删除数据</title>
    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>删除数据</h1>

    <form method="post">
        <button type="submit" name="delete" class="btn btn-danger">删除所有数据</button>
    </form>

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

    // 处理删除操作
    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM Win11";
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success">数据删除成功！</div>';
        } else {
            echo '<div class="alert alert-danger">数据删除失败：' . $conn->error . '</div>';
        }
    }

    // 关闭数据库连接
    $conn->close();
    ?>
</div>

<!-- 引入 Bootstrap 的 JS 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
