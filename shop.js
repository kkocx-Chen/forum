$(document).ready(function() {
    // 監聽購買按鈕的點擊事件
    $('#purchaseBtn').click(function() {
        // 使用 AJAX 傳送資料到後端
        $.ajax({
            url: 'purchase.php',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                // 處理後端回應
                if (response.status === 'success') {
                    alert(response.message + ' 您已成功購買 ' + response.product);
                } else {
                    alert('購買失敗！');
                }
            },
            error: function() {
                alert('購買失敗！');
            }
        });
    });
});
