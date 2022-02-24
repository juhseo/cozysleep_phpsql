<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
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
    <?php include_once '../include/header.php' ?>
    <main>
        <div id="sec01">
            <h2>공지사항</h2>
            <form action="/cozysleep/process/n_update_process.php" method="POST" id="imgForm" enctype="multipart/form-data">
                <input type="hidden" name="no" value="<?=$_GET['n_no']?>">
                <table>
                <?php
                    $conn = mysqli_connect('localhost','root','1234','cozysleep');
                    $sqlstr = "select * from notice where n_no = {$_GET['n_no']}";
                    $result = mysqli_query($conn, $sqlstr);
                    $row = mysqli_fetch_array($result);
                ?>
                    <tr>
                        <td>제목</td>
                        <td>
                            <input 
                            type="text" 
                            name="title" 
                            id="title" 
                            class ="topinp"
                            value="<?=$row['title']?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>글쓴이</td>
                        <td>
                            <input 
                            type="text" 
                            name="writer" 
                            id="writer" 
                            class ="topinp"
                            value="<?=$row['writer']?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea class="form-control" name="desc" cols="80" rows="10" id="desc">
                                <?=$row['description']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="button" onclick="location.href='/cozysleep/notice/notice_list.php'" value="목록" class="writebutton">
                            <input type="reset" value="취소" class="writebutton">
                            <input type="submit" value="수정" id="writebtn" class="writebutton">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <?php include_once '../include/footer.php' ?>                
</body>
</html>