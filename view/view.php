<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세보기</title>
    <link rel="stylesheet" href="/cozysleep/css/main.css">
    <link rel="stylesheet" href="/cozysleep/css/view.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '1234', 'cozysleep');
        $sqlstr = "select * from bestseller where m_no = {$_GET['m_no']}";
        $result = mysqli_query($conn, $sqlstr);
        $row = mysqli_fetch_array($result);
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
        <div id="bedd_subb">
            <p><a href="/cozysleep/main/main.php">Home</a></p>
            <p>><p>
            <p><a href="/cozysleep/main/bedding_list.php">침구</a></p>
        </div>
        <div id="b_detail">
            <div id="detail_l">
                <!-- table img 불러오기 -->
                <img src="../process/<?= $row['imgsrc']?>" alt="예시 이미지"/>
                <!-- <img src="/cozysleep/img/view/view/ex.jpg" alt="예시 이미지"/> -->
            </div>
            <div id="detail_r">
                <div id="detail_r_t">
                    <h4>
                        <!-- table name 불러오기 -->
                        <?=$row['name']?>
                        <!-- [애착이불] 말랑쫀득 슈크림 차렵이불-녹차크림(SS/Q/K) -->
                    </h4>
                    <p>
                        <!-- table s_desc 불러오기 -->
                        <?=$row['shortDesc']?>
                        <!-- 오랫동안 함께 했던 나만의 애착이불, 말로 표현할 수 없는 부드러움과 편안함을 느낄 수 있습니다. -->
                    </p>
                </div>
                <div id="detail_r_m01">
                    <table id="tb01">
                        <colgroup>
                            <col style="width:80px;">
                            <col style="width:auto;">
                        </colgroup>
                        <tr>
                            <td>금액</td>
                            <td>
                                <!-- table price 불러오기 -->
                                <?=$row['price']?>
                                <!-- 35,900원 -->
                            </td>
                        </tr>
                        <tr>
                            <td>제조국</td>
                            <td>
                                <!-- table manufacture 불러오기 -->
                                <?=$row['manufacture']?>
                                <!-- 대한민국 -->
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="detail_r_m02">
                    <p>
                        제품설명
                    </p>
                    <p>
                        <!-- table l_desc 불러오기 -->
                        <?=$row['description']?>
                        <!-- 이불의 밀착성을 높이는건 내장된 솜이라는 사실, 아시나요?<br/>
                        몸에 들뜨지 않고 유연하게 몸을 감싸 안아주는</br>
                        솜을 사용하여 밀착감을 높였습니다.<br/>
                        내몸에 맞게 맞춤 제작된 듯 착 붙는 특별한 밀착이불을 사용해보세요. -->
                    </p>
                </div>
                <div id="detail_r_m03">
                    <table id="tb02">
                        <colgroup>
                            <col style="width:80px;">
                            <col style="width:auto;">
                        </colgroup>
                        <tr>
                            <td>추가 옵션</td>
                        </tr>
                        <tr>
                            <td>베개</td>
                            <td>
                                <select name="pillow" id="pillow">
                                    <option value="추가 안함">추가 안함</option>
                                    <option value="베개 추가(+9,900)">베개 추가(+9,900)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>침대패드</td>
                            <td>
                                <select name="cover" id="cover">
                                    <option value="추가 안함">추가 안함</option>
                                    <option value="싱글S(+19,900)">싱글(+19,900)</option>
                                    <option value="슈퍼싱글SS(+25,900)">슈퍼싱글(+25,900)</option>
                                    <option value="더블D(+29,900)">더블(+29,900)</option>
                                    <option value="퀸Q(+39,900)">퀸(+39,900)</option>
                                    <option value="킹K(+49,900)">킹(+49,900)</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="detail_r_b">
                    <button>구매하기</button>
                    <button id="show">장바구니</button>
                    <div>
                        <img src="/cozysleep/img/view/view/membership.PNG" alt="membership_benefit">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="popup">
            <p class="close">X</p>
            <p>
                1개의 상품이 장바구니에 담겼습니다.<br/>
                지금 확인하시겠습니까?
            </p>
            <button>장바구니 바로가기</button>
            <button class="close">쇼핑 계속하기</button>
        </div> -->
    </main>
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