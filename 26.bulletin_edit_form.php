<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();     // 啟動 session

    // 檢查是否已登入
    if (!$_SESSION["id"]) {
        echo "please login first"; // 沒登入的提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒跳轉到登入頁
    }
    else {
        // 已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從 URL 的 GET 參數取得佈告編號 bid，查詢該筆資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row = mysqli_fetch_array($result); // 取得資料列

        // 根據佈告類型(type)，設定 radio button 預設選取狀態
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";

        // 顯示表單，帶入該筆佈告的資料作為預設值
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}
                    <input type=hidden name=bid value={$row['bid']}><br>

                    標    題：
                    <input type=text name=title value={$row['title']}><br>

                    內    容：<br>
                    <textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>

                    佈告類型：
                    <input type=radio name=type value=1 {$checked1}>系上公告 
                    <input type=radio name=type value=2 {$checked2}>獲獎資訊
                    <input type=radio name=type value=3 {$checked3}>徵才資訊<br>

                    發布時間：
                    <input type=date name=time value={$row['time']}><p></p>

                    <input type=submit value=修改佈告> 
                    <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
