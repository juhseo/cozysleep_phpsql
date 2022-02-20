<?php
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $id = $_POST['userId'];
    $pw = $_POST['userPw'];

    $sqlstr = "select * from member where id ='{$id}' AND pw ='{$pw}'";
    $result = mysqli_query($conn, $sqlstr);
    $row = mysqli_fetch_array($result);
    if($row){
        session_start();
        $_SESSION['userName'] = $row['name'];
        if(isset($_SESSION['userName'])){
?>
    <script>
        alert('로그인 되었습니다.');
        location.href ='/cozysleep/main/main.php';
    </script>
<?php
       }
    }else{
?>
    <script>
        alert('아이디 혹은 비밀번호가 틀렸습니다.');
        location.href="/cozysleep/login/login.php";
    </script>
<?php
    }
?>