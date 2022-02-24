<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="/cozysleep/css/notice_list.css">
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
        $sql = "select * from notice";
        $result = mysqli_query($conn, $sql);

        function show_n_list(){
            global $result;
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td style='text-align:center;font-size:14px'>{$row['n_no']}</td>";
                echo "<td style='text-align:center;font-size:14px'>
                        <a href='/cozysleep/notice/notice_view.php?n_no={$row['n_no']}'>
                            {$row['title']}
                        </a>
                     </td>";
                echo "<td style='text-align:center;font-size:14px'>{$row['writer']}</td>";
                echo "<td style='text-align:center;font-size:14px'>{$row['date']}</td>";
                echo "</tr>";
            }
        }
    ?>
    <?php include_once '../include/header.php' ?>
    <main>
        <div id="sec01">
            <h2>공지사항</h2>
            <table>
                <tr>
                    <td class="hd">No</td>
                    <td class="hd">제목</td>
                    <td class="hd">글쓴이</td>
                    <td class="hd">작성일자</td>
                </tr>
                <!-- php넣기 -->
                <?php show_n_list(); ?>
            </table>
            <?php
                if(isset($_SESSION['userName'])){
                    $session1 = $_SESSION['userName'];
                    if($session1 == "관리자"){
                        echo "<button style='width:150px; height:30px; background-color:#b7a591; color:#fff; border:none; border-radius:5px; font-weight:bold; float:right;'><a href='/cozysleep/notice/notice_write.php'>글쓰기</a></button>";
                    }  
                }
            ?>
        </div>
    </main>
    <?php include_once '../include/footer.php' ?>  
</body>
</html>