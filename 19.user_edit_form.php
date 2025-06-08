<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start(); // 啟動 session，用來檢查登入狀態

    // 如果尚未登入（session 中沒有 id）
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; // 顯示提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉至登入頁
    }
    else {   
        // 已登入，開始執行修改使用者流程

        // 連接到 MySQL 資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從 GET 取得的 id 查詢該使用者資料
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");

        // 取得結果資料列
        $row = mysqli_fetch_array($result);

        // 顯示修改表單（帳號固定不可修改，只能改密碼）
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}> <!-- 隱藏傳送 id -->
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
