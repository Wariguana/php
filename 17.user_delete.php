<?php
    error_reporting(0); // 關閉錯誤顯示，防止錯誤訊息洩露給使用者
    session_start(); // 啟動 Session，確認使用者登入狀態

    // 檢查是否有登入（session 中是否有 id）
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; // 如果未登入，顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁面
    }
    else {
        // 若已登入，開始執行刪除操作

        // 建立與 MySQL 的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 構造 SQL 刪除指令，從 GET 參數取得要刪除的使用者帳號
        $sql = "delete from user where id='{$_GET["id"]}'";

        // debug 用（可用來查看 SQL 語法）：
        // echo $sql;

        // 執行 SQL，如果失敗則顯示錯誤訊息
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤";
        } else {
            echo "使用者刪除成功";
        }

        // 3 秒後跳轉回使用者管理頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
