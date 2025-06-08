<?php

    error_reporting(0); // 關閉錯誤訊息
    session_start(); // 啟動 session 檢查登入狀態

    // 如果尚未登入，提示並跳轉到登入頁
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 已登入，準備執行修改密碼動作

        // 建立與資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 指令：更新指定使用者的密碼
        // ⚠️ 注意：這裡直接使用 POST 值進入 SQL，有 SQL Injection 風險
        $sql = "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'";

        // 檢查執行結果
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤"; // 如果執行失敗
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        } else {
            echo "修改成功，三秒鐘後回到網頁"; // 執行成功提示
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
