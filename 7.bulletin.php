<?php
    error_reporting(0); // 關閉錯誤訊息顯示

    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 查詢 bulletin 資料表中的所有資料
    $result = mysqli_query($conn, "select * from bulletin");

    // 顯示表格標題列
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

    // 逐筆輸出每一筆資料為表格列
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }

    // 結束表格
    echo "</table>";
?>

<!--
程式總結：
1. 關閉錯誤訊息顯示（可避免畫面顯示 PHP 錯誤）。
2. 連接到資料庫並查詢 bulletin 資料表的所有資料。
3. 將每一筆公告資訊用 HTML 表格的方式輸出，欄位包括：
   - 佈告編號（bid）
   - 佈告類別（type）
   - 標題（title）
   - 佈告內容（content）
   - 發佈時間（time）
-->
