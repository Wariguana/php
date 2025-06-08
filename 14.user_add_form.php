<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); // 關閉錯誤報告（不顯示任何錯誤訊息）
    session_start(); // 啟動 Session，以便取得登入狀態

    // 檢查使用者是否已登入（判斷是否有 session 中的 id）
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; // 若未登入，顯示提示訊息
        // 3 秒後重新導向至登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {    
        // 若已登入，顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
