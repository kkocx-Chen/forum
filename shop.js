// 獲取下拉選單元素
const dropdownMenu = document.getElementById('dropdownMenuButton1');
// 獲取價格元素
const priceElement = document.getElementById('price');
// 獲取立即購買按鈕元素
const purchaseBtn = document.getElementById('purchaseBtn');

// 監聽下拉選單選擇事件
dropdownMenu.addEventListener('click', function(event) {
    // 阻止默認事件
    event.preventDefault();
    // 獲取選擇的值
    const selectedValue = event.target.getAttribute('data-value');
    // 根據選擇的值更新價格
    if (selectedValue === '1') {
        priceElement.textContent = '價格: $99';
    } else if (selectedValue === '2') {
        priceElement.textContent = '價格: $199';
    } else if (selectedValue === '3') {
        priceElement.textContent = '價格: $299';
    }
});

// 監聽立即購買按鈕點擊事件
purchaseBtn.addEventListener('click', function() {
    // 在此處執行立即購買的相應操作
    console.log('立即購買');
});
