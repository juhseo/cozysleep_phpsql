<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homewear write</title>
    <link rel="stylesheet" href="/cozysleep/css/write.css">
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
        $sql = "select * from homewear";
        $result = mysqli_query($conn, $sql);
    ?>
        <?php include_once '../../include/header.php' ?>
    <main>
        <div id="sec01">
            <h2>상품등록하기</h2>
            <h3>- 홈웨어</h3>
            <form action="/cozysleep/process/h_write_process.php" method="POST" id="imgForm" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>이름</td>
                        <td><input type="text" name="p_name" id="p_name" class ="topinp" ></td>
                    </tr>
                    <tr>
                        <td>금액</td>
                        <td><input type="text" name="price" id="price" class ="topinp" ></td>
                    </tr>
                    <tr>
                        <td>제조국</td>
                        <td><input type="text" name="manufac" id="manufac" class ="topinp"></td>
                    </tr>
                    <tr>
                        <td>이미지 등록</td>
                        <td><input type="file" name="fileimg" id="fileimg" ></td>
                    </tr>
                    <tr>
                        <td>간략설명</td>
                        <td>
                            <textarea name="s_desc" cols="80" rows="5" id="s_desc">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea name="desc" cols="80" rows="10" id="desc">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="button" onclick="location.href='/cozysleep/main/main.php'" value="목록" class="writebutton">
                            <input type="reset" value="취소" class="writebutton">
                            <input type="submit" value="업로드" id="writebtn" class="writebutton">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <?php include_once '../../include/footer.php' ?>
</body>
</html>