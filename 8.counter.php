<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    // 檢查是否已有計數器，如果沒有則設定為 1，否則加 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        $_SESSION["counter"]++;

    // 顯示目前的 counter 值
    echo "counter=" . $_SESSION["counter"];
    
    // 顯示重置 counter 的連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>

<!--
程式總結：
1. 使用 session 來儲存計數器 "counter"，每次頁面重新載入時，計數器會增加 1。
2. 如果 session 中沒有 "counter" 值，則初始化為 1。
3. 顯示當前計數器的值。
4. 提供一個超連結，點擊後會重置計數器。
-->
