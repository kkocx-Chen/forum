<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>輸入序號</title>
    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h1>輸入序號</h1>

            <form method="post">
                <div class="mb-3">
                    <label for="serialNumberInput" class="form-label">請輸入序號：</label>
                    <input type="text" class="form-control" id="serialNumberInput" name="serialNumberInput" placeholder="輸入序號" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">提交</button>
            </form>

            <?php
            // 建立與資料庫的連線
            $servername = "terminal.kkocx.com"; // 資料庫伺服器名稱
            $username = "User01"; // 使用者名稱
            $password = "Test01"; // 使用者密碼
            $dbname = "user01"; // 資料庫名稱

            // 檢查是否有提交表單
            if (isset($_POST['submit'])) {
                // 建立與資料庫的連線
                $conn = new mysqli($servername, $username, $password, $dbname);

                // 檢查連線是否成功
                if ($conn->connect_error) {
                    die("連線失敗：" . $conn->connect_error);
                }

                $serialNumber = $_POST['serialNumberInput']; // 從表單中獲取序號值

                // 構建 INSERT 語句並執行
                $sql = "INSERT INTO Win11 (serial_number) VALUES ('$serialNumber')";

                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">序號已成功插入</div>';
                } else {
                    echo '<div class="alert alert-danger">發生錯誤：' . $conn->error . '</div>';
                }

                // 關閉資料庫連線
                $conn->close();
            }
            ?>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php
                    // 建立與資料庫的連線
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // 檢查連線是否成功
                    if ($conn->connect_error) {
                        die("連線失敗：" . $conn->connect_error);
                    }

                    $sql = "SELECT COUNT(*) AS total FROM Win11";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $totalRecords = $row["total"];

                        echo "<h5 class='card-title'>資料庫中的記錄數量：</h5>";
                        echo "<p class='card-text'>$totalRecords 筆資料</p>";

                        echo "<h5 class='card-title'>資料庫中的內容：</h5>";
                        $sql = "SELECT * FROM Win11";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<ul class='list-group'>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<li class='list-group-item'>" . $row['serial_number'] . "</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "<p class='card-text'>目前沒有資料</p>";
                        }
                    } else {
                        echo "<p class='card-text'>目前沒有資料</p>";
                    }

                    // 關閉資料庫連線
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 引入 Bootstrap 的 JS 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
