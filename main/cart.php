<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>장바구니</title>
    <!-- copy -->
    <link rel="stylesheet" href="/cozysleep/css/cart.css">
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
    <?php include_once '../include/header.php' ?>
    <main>
        <section id="sec01" class="bedding_list">
            <h2>장바구니</h2>
            <!-- php에서 받아온 값 가져오기 -->
            <table>
                <tr>
                    <td class="hd">
                        <input type="checkbox" />
                    </td>
                    <td class="hd">제품</td>
                    <td class="hd">수량</td>
                    <td class="hd">적립금</td>
                    <td class="hd">가격</td>
                    <td class="hd">배송비</td>
                    <td class="hd">선택</td>
                </tr>
                <!-- <tr rowspan="4" id="total_price">
                    <td>총 상품금액</td>
                </tr> -->
            </table>
            <form action="/cozysleep/process/n_delete_process.php" method="post">
                <input class='writebutton' type="hidden" name="no" value="<?=$_GET['n_no']?>">
                <input class='writebutton' type="submit" value="선택상품 삭제">
            </form>
            <button class='writebutton'>견적서 출력</button>
            <div>
                <button class='under_btn'>전체상품 주문하기</button>
                <button class='under_btn'>선택상품 주문하기</button>
                <button class='under_btn'>장바구니 비우기</button>
                <button class='under_btn'><a href="/cozysleep/main/main.php">쇼핑 계속하기</a></button>
            </div>
        </section>
    </main>
    <!-- footer -->
    <?php include_once '../include/footer.php' ?>
</body>
</html>