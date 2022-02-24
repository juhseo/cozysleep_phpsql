<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보</title>
    <link rel="stylesheet" href="/cozysleep/css/members.css">
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
    <?php
        if(isset($_SESSION['userName'])){
            // session_start();중복
            $conn = mysqli_connect('localhost','root','1234','cozysleep');
            $sql = "select * from member where m_no = {$_GET['m_no']}";
            $result = mysqli_query($conn, $sql);  
            global $result;
            while($row = mysqli_fetch_array($result)){
                echo "<table style='margin:0 auto'>";

                    echo "<tr>";
                    echo "<td>가입번호</td>";
                    echo "<td>{$row['m_no']}</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>이름</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
        
                    echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>{$row['id']}</td>";
                    echo "</tr>";
        
                    echo "<tr>";
                    echo "<td>비밀번호</td>";
                    echo "<td>{$row['pw']}</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo "<td>이메일</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "</tr>";
        
                    echo "<tr>";
                    echo "<td>집번호</td>";
                    echo "<td>{$row['Pn']}</td>";
                    echo "</tr>";
        
                    echo "<tr>";
                    echo "<td>핸드폰번호</td>";
                    echo "<td>{$row['Pn']}</td>";
                    echo "</tr>";
        
                echo "</table>";}
        }else {
            echo "<p>로그인 해주세요 !</p>";
        }
    ?>
        <!-- <table>
            <tr id="m_name">
                <td>
                    이름
                </td>
                <td>
                    <?=$row['name']?>
                </td>
            </tr>
            <tr id="m_id">
                <td>
                    ID
                </td>
                <td>
                    <?=$row['id']?>
                </td>
            </tr>
            <tr id="m_pw">
                <td>
                    Password
                </td>
                <td>
                    <?=$row['pw']?>
                </td>
            </tr>
            <tr id="m_email">
                <td>
                    Email
                </td>
                <td>
                    <?=$row['email']?>
                </td>
            </tr>
            <tr id="m_hn">
                <td>
                    집 번호
                </td>
                <td>
                    <?=$row['Hn']?>
                </td>
            </tr>
            <tr id="m_pn">
                <td>
                    핸드폰 번호
                </td>
                <td>
                    <?=$row['Pn']?>
                </td>
            </tr>
        </table> -->
    </main>
    <?php include_once '../include/footer.php' ?>
</body>
</html>