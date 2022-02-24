<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세보기</title>
    <link rel="stylesheet" href="/cozysleep/css/view.css">
    <link rel="stylesheet" href="/cozysleep/css/header.css">
    <link rel="stylesheet" href="/cozysleep/css/footer.css">
    <script src="/cozysleep/js/submenu.js" defer></script>
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
    <?php include_once '../include/header.php' ?>
    <main>
        <form action="/cozysleep/main/cart.php" method="post">
            <input type="hidden" name="m_no" value='<?=$m_no?>'>
            <div>
                <div id="bedd_subb">
                    <p><a href="/cozysleep/main/main.php">Home</a></p>
                    <p>><p>
                    <p><a href="/cozysleep/main/main.php">베스트셀러</a></p>
                </div>
                <div id="bedd_sub_r">
                    <?php
                        if(isset($_SESSION['userName'])){
                            $session1 = $_SESSION['userName'];
                            if($session1 == "관리자"){
                                echo "<form action='/cozysleep/process/bestseller_delete_process.php' method='post'>";
                                echo "<input class='writebutton' type='hidden' name='no' value='{$_GET['m_no']}'>";
                                echo "<input class='writebutton' type='submit' value='삭제하기' style='width:150px; height:30px; color:#fff; border:none; border-radius:5px; font-weight:bold; background-color:#111; cursor:pointer; float:right'>";
                                echo "</form>";
                                echo "<button  style='width:150px; height:30px; color:#fff; border:none; border-radius:5px; font-weight:bold; background-color:#b7a591; cursor:pointer; float:right; margin-right:5px;'class='writebutton'><a href='/cozysleep/view/edit.php?m_no={$_GET['m_no']}'>수정하기</a></button>";
                            }
                        }
                    ?>
                </div>
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
                            <tr>
                                <td>수량</td>
                                <form name= "form1" method ="post" action="${path}/cozysleep/main/cart.php">
                                    <input type="hidden" name="productId" value="${vo.productId}">
                                    <td>
                                        <select name="count" id="count">
                                            <option value="1">1개</option>
                                            <option value="2">2개</option>
                                            <option value="3">3개</option>
                                            <option value="4">4개</option>
                                            <option value="5">5개</option>
                                            <option value="6">6개</option>
                                            <option value="7">7개</option>
                                            <option value="8">8개</option>
                                            <option value="9">9개</option>
                                            <option value="10">10개</option>
                                        </select>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                    <div id="detail_r_b">
                        <button>구매하기</button>
                        <input type="submit" value="장바구니"/>
                        <div>
                            <img src="/cozysleep/img/view/view/membership.PNG" alt="membership_benefit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <?php include_once '../include/footer.php' ?>
</body>
</html>