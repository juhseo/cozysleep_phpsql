<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- copy -->
    <link rel="stylesheet" href="/cozysleep/css/bedding_list.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','1234','cozysleep');
        $sql = "select * from bestseller";
        $result = mysqli_query($conn, $sql);
        function showlist(){
            global $result;
            while($row = mysqli_fetch_array($result)){
                echo "<div style='width:23%'>";
                echo "<div><a href='/cozysleep/view/view.php?m_no={$row['m_no']}'><img src=\"../process/{$row['imgsrc']}\" width='100%',height='auto'></a></div>";
                echo "<div style='padding-top:10px'>";
                echo "<p style='font-weight:bold;color:#5d5d5d;padding-bottom:10px'>{$row['name']}</p>";
                echo "<p style='font-weight:bold;padding-bottom:10px'>{$row['price']}</p>";
                echo "<p style='font-size:11px;color:#6d6d6d'>{$row['shortDesc']}</p>";
                echo "</div>";
                echo "</div>";
            }
        }
        // session_start();
        // if(isset($_SESSION['username'])){
        //     echo $_SESSION['username'].
        //     "님<button onclick='location.href=\"/cozysleep/logout_process.php\"'>로그아웃</button>";
        // }else{
        //     echo "<a href='/cozysleep/login/login.php'>로그인</a>";
        // }

    ?>
    <header>
        <div id="hd_left">
            <span class="material-icons">
                menu
            </span>
        </div>
        <h1><a href="/cozysleep/main/main.php">cozysleep</a></h1>
        <div id="hd_rig" class="icons">
            <span class="material-icons">
                search
            </span>
            <span class="material-icons">
                account_circle
            </span>
            <span class="material-icons">
                local_mall
            </span>
        </div>
    </header>
    <main>
        <section id="sec01" class="bedding_list">
            <h2>침구</h2>
            <!-- php에서 받아온 값 가져오기 -->
            <div id="hd">
                <div id="hd_l">
                    <p>158</p><p>개의 상품이 있습니다.</p>
                </div>
                <div id="hd_r">
                    <p>인기순</p>
                    <p>신상품순</p>
                    <p>낮은가격순</p>
                    <p>높은가격순</p>
                </div>
            </div>
            <div id="line01" class="lines">
                <?php showlist();?>
            </div>
            <div id="line02" class="lines">

            </div>
            <div id="line03" class="lines">

            </div>
        </section>
    </main>
    <!-- footer -->
    <footer>
        <div id="ft_wrap">
            <div id="ft_top">
                <div id="f_top_01" class="ft_top_div">
                    <h4>CS CENTER</h4>
                    <p>02-123-1234</p>
                    <p>평일 MONDAY - FRIDAY 9AM - 6PM</p>
                    <p>점심시간 LUNCH 12PM - 1PM</p>
                    <p>토·일요일, 공휴일은 휴무로 문의 게시판을 이용해주세요</p>
                </div>
                <span></span>
                <div id="f_top_02" class="ft_top_div">
                    <h4>HEAD OFFICE</h4>
                    <p>본사 : 부산광역시 동래구</p>
                    <p>TEL 02-123-1234, FAX 02-456-7890</p>
                    <p>E-MAIL  juhh@cozysleep.co.kr (입점/제휴문의)</p>
                    <p>juss@cozysleep.co.kr (도매/수출/광고문의)</p>
                </div>
                <span></span>
                <div id="f_top_03" class="ft_top_div">
                    <h4>DELIVERY ADDRESS</h4>
                    <p>· 빠른배송상품 반품주소지 : 대구시 달서구 갈산동 100-48</p>
                    <p>· 맞춤제작상품 반품주소지 : 부산광역시 동래구 [물류센터]<br/>
                            반품접수는 우체국택배를 이용해주세요</p>
                </div>
                <span></span>
                <div id="f_top_04" class="ft_top_div">
                    <h4>BANKING ACCOUNT</h4>
                    <p>· 국민은행 123456-78-654321</p>
                    <p>· 국민은행 123456-78-910112</p>
                    <p>· 예금주 : 코지슬립</p>
                </div>
            </div>
        </div>
        
        <div id="ft_bottom">
            <p>주식회사 코지슬립 <span></span> 사업자등록번호 : 123-45-78910[사업자정보확인]</p>
            <p>대표자 : 김슬립 <span></span> 개인정보 관리 책임자 : 김슬립 <span></span> 통신판매업 신고번호 : 2021-부산동래-12345</p>
            <p>회사소개 <span></span> 이용안내 <span></span> 이용약관 <span></span>개인정보처리방침</p>
            <p>Copyright. 2020 by 코지슬립 all rights reserved.</p>
        </div>
    </footer>
</body>
</html>