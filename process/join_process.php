<?php
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "insert into member(name,id,pw,email,Hn,Pn)
            values(
                '{$_POST['userName']}',
                '{$_POST['userId']}',
                '{$_POST['userPw']}',
                '{$_POST['userEmail']}',
                '{$_POST['userHn']}',
                '{$_POST['userPn']}')
                ";
    echo $sqlstr;
    $result = mysqli_query($conn,$sqlstr);
    if($result){
?>       
    <script>
        alert('회원가입이 완료되었습니다.');
        location.href ='/cozysleep/main/main.php';
    </script>
<?php    
}else{
    echo "🚫 관리자에게 문의 바랍니다.";
    echo mysqli_error($conn);
}
?> 