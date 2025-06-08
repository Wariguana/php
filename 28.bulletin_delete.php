<?php
    error_reporting(0);         // 關閉錯誤訊息顯示
    session_start();            // 啟用 session

    // 檢查使用者是否已登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";     // 未登入提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  // 3 秒後跳轉登入頁
    }
    else {   
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 組成刪除資料的 SQL 指令，根據 GET 傳入的 bid 刪除對應佈告
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'";

        // 執行 SQL 指令
        if (!mysqli_query($conn, $sql)) {
            echo "佈告刪除錯誤";  // 執行失敗顯示錯誤訊息
        } else {
            echo "佈告刪除成功";  // 執行成功顯示成功訊息
        }

        // 三秒後跳轉回佈告欄列表頁
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
