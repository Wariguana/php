<?php
    error_reporting(0);        // 關閉錯誤訊息顯示
    session_start();           // 啟用 session

    // 檢查使用者是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";    // 未登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉到登入頁面
    }
    else {   
        // 連接 MySQL 資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 組 SQL 指令，根據表單送出的資料更新 bulletin 資料表
        $sql = "
            update bulletin set 
                title='{$_POST['title']}',
                content='{$_POST['content']}',
                time='{$_POST['time']}',
                type={$_POST['type']}
            where bid='{$_POST['bid']}'
        ";

        // 執行 SQL 指令，檢查是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 三秒後回佈告欄頁面
        } else {
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
