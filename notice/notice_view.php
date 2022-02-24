<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="/cozysleep/css/header.css">
    <link rel="stylesheet" href="/cozysleep/css/footer.css">
    <script src="/cozysleep/js/submenu.js" defer></script>
    <link rel="stylesheet" href="/cozysleep/css/notice_view.css">
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
        $sqlstr = "select * from notice where n_no = {$_GET['n_no']}";
        $result = mysqli_query($conn, $sqlstr);
        $row = mysqli_fetch_array($result);
    ?>
    <?php include_once '../include/header.php' ?>
    <main>
        <div id="sec01">
            <table>
                <tr>
                    <td id="t_title">
                        <?= $row['title']?>
                    </td>
                </tr>
                <tr>
                    <td id="t_date">
                        <?= $row['date']?>
                        <?= $row['writer']?>
                    </td>
                </tr>
                <tr>
                    <td id="t_desc">
                        <?= nl2br($row['description'])?>
                    </td>
                </tr>
            </table>
            <?php
            //재검토하기.
                // session_start(); 
            if(isset($_SESSION['userName'])){
                $session1 = $_SESSION['userName'];
                if($session1 == "관리자"){
                    echo "<form action='/cozysleep/process/n_delete_process.php' method='post'>";
                    echo "<input class='writebutton' type='hidden' name='no' value='{$_GET['n_no']}'>";
                    echo "<input class='writebutton' type='submit' value='삭제하기'>";
                    echo "</form>";
                    echo "<button class='writebutton'><a href='/cozysleep/notice/notice_edit.php?n_no={$_GET['n_no']}'>수정하기</a></button>";
                }
            }
            ?>
            <!-- <form action="/cozysleep/process/n_delete_process.php" method="post">
                <input class='writebutton' type="hidden" name="no" value="<?=$_GET['n_no']?>">
                <input class='writebutton' type="submit" value="삭제하기">
            </form>
            <button class='writebutton'><a href="/cozysleep/notice/notice_edit.php?n_no=<?=$_GET['n_no']?>">수정하기</a></button> -->
        </div>
    </main>
    <?php include_once '../include/footer.php' ?>
</body>
</html>