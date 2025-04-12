<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    unset($_SESSION["counter"]); // 清除 session 中的 "counter" 變數

    echo "counter重置成功...."; // 顯示重置成功訊息

    // 2 秒後自動跳轉回 8.counter.php 頁面
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>

<!--
程式總結：
1. 啟動 session 並清除 "counter" 變數，達到重置計數器的目的。
2. 顯示「counter重置成功....」訊息。
3. 使用 meta 標籤設定 2 秒後自動導向回 `8.counter.php` 頁面。
-->
