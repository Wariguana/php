<html>
    <head>
        <title>明新科技大學資訊管理系</title>
        <meta charset="utf-8">
        <!-- 引入Flexslider的CSS -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 引入jQuery庫 -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 引入Flexslider的JS -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
        <script>
            // 頁面載入完成後初始化Flexslider，設定動畫為slide，且為從右至左(rtl)
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    rtl: true
                });
            });
        </script>
        <style>
            /* 全局設定：去除外距，字體顏色為灰色，文字置中 */
            *{
                margin:0;
                color:gray;
                text-align:center;
            }
            /* 頁首區塊背景白色 */
            .top{
                 background-color: white;
            }
            /* 頁首容器，使用flex排版，左右分散排列並垂直置中 */
            .top .container{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding:10px;
            }
            /* logo區字體大小與粗體 */
            .top .logo{
                /*border:1px solid red;*/
                font-size: 35px;
                font-weight: bold;
            }
            /* logo中圖片寬度與垂直對齊 */
            .top .logo img{
                width: 100px;
                vertical-align: middle;
            }
            /* 頁首導覽列文字大小與粗體 */
            .top .top-nav{
                /*border:1px solid red;*/
                font-size: 25px;
                font-weight: bold;       
            }
            /* 頁首導覽列的連結移除底線 */
            .top .top-nav a{
                text-decoration: none;
            }
            /* 主導航背景色為深灰，內容置中 */
            .nav {
                background-color:#333;
                display: flex;
                justify-content: center;
            }
            /* 導航列表移除預設清單樣式及內外距，背景色深灰 */
            .nav ul {
                list-style-type: none;  
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                background-color: #333; 
            }
            /* 導航列表項目浮動至左 */
            .nav li {
                float: left; 
            }
            /* 導航連結樣式：塊狀顯示、白字、置中、內距 */
            .nav li a {    
                display: block;  
                color: white;  
                text-align: center;  
                padding: 14px 16px;  
                text-decoration: none;  
            }
            /* 導航連結滑鼠懸停變深色背景 */
            .nav li a:hover {
                background-color: #111; 
            }
            /* 下拉選單顯示條件，滑鼠移至dropdown項目時顯示內容 */
            .dropdown:hover .dropdown-content {
                display: block;   /*使用block呈現上下排列*/
            }
            /* 下拉選單項目滑鼠移入時背景維持深灰 */
            li.dropdown:hover{
                background-color: #333;  /*設定背景顏色*/
            }
            /* 下拉選單內容區塊樣式：預設不顯示，絕對定位，背景深灰，最小寬度160px，層級較高 */
            .dropdown-content {  /*設定下拉選單內容格式*/
                display: none;
                position: absolute;
                background-color: #333;
                min-width: 160px;
                z-index: 1;
            }
            /* 下拉選單連結樣式：黑字、內距、無底線、塊狀顯示、文字靠左 */
            .dropdown-content a {/*設定下拉選單連結內容格式*/
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            /* 輪播區背景黑色 */
            .slider{
                background-color: black;
            }
            /* 橫幅區漸層背景與內距 */
            .banner{
                background-image: linear-gradient(#ABDCFF,#0396FF);
                padding:30px;
            }
            /* 橫幅標題內距 */
            .banner h1{
                padding: 20px;
            }        
            /* 師資介紹區塊樣式 */
            .faculty {
                display: block;
                justify-content: center;
                background-color:white;
                padding:40px;
            }
            /* 師資介紹標題字型大小與顏色 */
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            /* 師資介紹容器使用flex排版，項目間距平均，垂直置中 */
            .faculty .container {
                /*border:1px solid red;*/
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            /* 單位教師區塊 */
            .faculty .teacher{
                /*border:1px solid blue;*/
                display:block;
                text-decoration: none;
            }
            /* 教師照片尺寸固定 */
            .faculty .teacher img{
                height: 200px;
                width: 200px;
            }
            /* 教師姓名標題白字，半透明深色背景，文字置中 */
            .faculty .teacher h3{
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;           
            }
            /* 聯絡資訊區塊 */
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;                
            }
            /* 聯絡資訊標題字體大小與顏色 */
            .contact h2{
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            /* 聯絡資訊內文使用flex排版，置中 */
            .contact .infos{
                display:flex;
                margin-top: 30px; 
                justify-content: center;
            }
            /* 左邊聯絡資訊文字靠左，右邊距 */
            .contact .infos .left{
                display:block;
                text-align: left;
                margin-right: 30px;
            }
            /* 左邊標題文字樣式 */
            .contact .infos .left b{
                display:block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: Gray;
                font-size: 18px;
                line-height: 18px;
            }
            /* 左邊內容文字樣式，顏色透明度較低，有左內距 */
            .contact .infos .left span{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            /* 右邊地圖區高度 */
            .contact .infos .right{
                height: 200px;               
            }
            /* 地圖iframe寬高100%，有邊框 */
            .contact .infos .right iframe{
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39,40,34,0.50);
            }
            /* 頁尾區塊，flex置中，深色背景與上下內距 */
            .footer{
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30);
                padding: 30px 0;
            }
            /* 登入視窗樣式，預設隱藏，固定定位，置頂，半透明白底，內距 */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                right: 50;
                top: 50;
                width: 20%; /* Full width */
                height: 20%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgba(255,255,255,0.9); /* White w/ opacity */
                padding-top: 50px;
            }
            /* 佈告欄區塊，背景色橘色，內外距 */
            .bulletin{
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153);
                padding: 30px 0;
            }
            /* 佈告欄標題內距 */
            .bulletin h1{
                padding:10px;
            }
            /* 佈告欄表格樣式，字體、大小、邊框 */
            .bulletin table{
                border-collapse:collapse;
                font-family: 微軟正黑體;
                font-size:16px; 
                border:1px solid #000;
            }
            /* 表頭底色藍色，字白色 */
            .bulletin table th{
                background-color: #abdcff;
                color: #ffffff;
            }
            /* 表格資料底色白色，文字藍色 */
            .bulletin table td{
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    </head>
    <body>
        <!-- 頁首區塊 -->
        <div class="top">
            <div class="container">
                <!-- Logo與校名 -->
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <!-- 頁首右側導覽 -->
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!-- 登入按鈕，點擊顯示登入視窗 -->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入視窗內容 -->
                  <div id="login" class="modal">
                    <!-- 關閉登入視窗 -->
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                </div>
              </div>
        </div>

        <!-- 主導覽列 -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <!-- 下拉選單項目 -->
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>

        <!-- 輪播區塊 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>

        <!-- 佈告欄 -->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                // 連接資料庫
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                // 執行查詢公告資料
                $result=mysqli_query($conn, "select * from bulletin");
                // 輸出表格標頭
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                // 逐行讀取資料並輸出表格資料列
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    // 根據類別代碼顯示中文類別名稱
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>

        <!-- 系所簡介區塊 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>

        <!-- 師資介紹區塊 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>

        <!-- 聯絡資訊區塊 -->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <!-- Google地圖嵌入 -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>

        <!-- 頁尾 -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
