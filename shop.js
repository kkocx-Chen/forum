document.addEventListener("DOMContentLoaded", function() {
    // 獲取下拉選單元素
    var dropdownMenu = document.getElementById("dropdownMenu");

    // 確認 dropdownMenu 存在後再執行後續操作
    if (dropdownMenu) {
        // 獲取下拉選單中所有選項的 <a> 元素
        var dropdownItems = dropdownMenu.querySelectorAll("a.dropdown-item");

        // 確認 dropdownItems 存在後再執行後續操作
        if (dropdownItems.length > 0) {
            // 為每個選項添加點擊事件處理程序
            dropdownItems.forEach(function (item) {
                item.addEventListener("click", function (event) {
                    event.preventDefault(); // 阻止點擊事件的預設行為
                    var selectedValue = item.getAttribute("data-value"); // 獲取選項的值
                    console.log(selectedValue); // 印出選擇的值，可根據需要進行後續操作
                });
            });
        }
    }
});
