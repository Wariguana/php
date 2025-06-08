<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start(); // 啟用 session，檢查登入狀態

    // 如果使用者未登入
    if (!$_SESSION["id"]) {
        echo "please login first"; // 顯示提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後導向登入頁
    }
    else {
        // 使用者已登入，執行新增佈告的動作

        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 SQL 指令，將表單送來的資料寫入 bulletin 資料表
        $sql = "insert into bulletin(title, content, type, time) 
                values('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 嘗試執行 SQL 指令
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤"; // 若執行失敗，顯示錯誤訊息
        } else {
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 成功後跳轉
        }
    }
?>
