<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); // 關閉錯誤訊息顯示
        session_start(); // 啟動 session 功能

        // 檢查是否登入（session 中是否有 id）
        if (!$_SESSION["id"]) {
            echo "請登入帳號"; // 未登入提示
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁面
        }
        else {   
            // 已登入顯示使用者管理畫面

            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] 
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";

            // 建立資料庫連線
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

            // 從 user 資料表查詢所有使用者
            $result = mysqli_query($conn, "select * from user");

            // 一筆一筆取出資料並顯示在表格中
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>
                            <a href=19.user_edit_form.php?id={$row['id']}>修改</a> ||
                            <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                        </td>
                        <td>{$row['id']}</td>
                        <td>{$row['pwd']}</td>
                      </tr>";
            }

            echo "</table>";
        }
    ?> 
    </body>
</html>
