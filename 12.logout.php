<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    unset($_SESSION["id"]); // 清除 session 中的 "id" 變數，達到登出目的

    echo "登出成功...."; // 顯示登出成功訊息

    // 3 秒後自動跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>

<!--
程式總結：
1. 啟動 session 並清除 "id" 變數，讓使用者登出。
2. 顯示「登出成功....」訊息。
3. 使用 meta 標籤設定 3 秒後自動跳轉回 `2.login.html` 登入頁面。
-->
