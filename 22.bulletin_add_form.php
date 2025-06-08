<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start(); // 啟動 session，用來檢查登入狀態

    // 檢查是否登入（session 中是否有 id）
    if (!$_SESSION["id"]) {
        echo "please login first"; // 未登入提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁
    }
    else {
        // 若已登入，顯示新增佈告的表單
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    
                    內    容：<br>
                    <textarea name=content rows=20 cols=20></textarea><br>
                    
                    佈告類型：
                    <input type=radio name=type value=1>系上公告 
                    <input type=radio name=type value=2>獲獎資訊
                    <input type=radio name=type value=3>徵才資訊<br>
                    
                    發布時間：<input type=date name=time><p></p>
                    
                    <input type=submit value=新增佈告> 
                    <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
