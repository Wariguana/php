<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "select * from user");

   # 登入狀態預設為 FALSE
   $login = FALSE;

   # mysqli_fetch_array()：逐筆比對帳號與密碼
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   } 

   # 判斷是否登入成功
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>

<!--
程式總結：
1. 建立與資料庫的連線，並查詢 user 資料表所有使用者資料。
2. 使用 while 迴圈逐筆比對使用者輸入的帳號與密碼是否符合資料庫中任一筆資料。
3. 若符合，設定 $login 為 TRUE。
4. 根據 $login 的結果輸出「登入成功」或「帳號/密碼 錯誤」。
-->
