<?php

error_reporting(0); // 關閉錯誤顯示，避免用戶看到錯誤訊息
session_start(); // 啟動 session，讓程式可以使用 session 變數

// 檢查是否有登入（透過 session 中是否有 id）
if (!$_SESSION["id"]) {
    echo "請登入帳號"; // 如果沒登入，顯示提示訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉回登入頁
}
else {
    // 如果已登入，執行以下新增使用者的程式

    // 建立與 MySQL 資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 建立 SQL 新增語法，將表單傳來的帳號密碼插入 user 資料表
    // 注意：此處直接插入 POST 資料存在 SQL Injection 風險，應使用 prepared statement 改進
    $sql = "insert into user(id, pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";

    // 執行 SQL 指令，如果失敗就顯示錯誤訊息
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤"; // 執行失敗
    }
    else {
        // 執行成功，顯示成功訊息並在 3 秒後跳轉回使用者管理頁
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}
?>
