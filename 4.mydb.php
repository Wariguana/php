<?php
    # mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    # mysqli_query() 從資料庫查詢資料
    $result = mysqli_query($conn, "select * from user");

    # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 

    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>

<!--
程式總結：
1. 建立與遠端資料庫（db4free.net）之連線。
2. 執行 SQL 指令查詢 user 資料表中的所有資料。
3. 使用 mysqli_fetch_array() 依序取出兩筆資料，並印出各筆資料的 id 與 pwd 欄位。
-->
