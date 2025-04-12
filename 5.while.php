<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "select * from user");

   # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row = mysqli_fetch_array($result)) {
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   } 
?>

<!--
程式總結：
1. 建立與資料庫的連線。
2. 查詢 user 資料表中的所有資料。
3. 使用 while 迴圈搭配 mysqli_fetch_array()，逐筆取出每一列資料。
4. 將每筆資料的 id 與 pwd 欄位內容輸出到畫面上，並換行顯示。
-->
