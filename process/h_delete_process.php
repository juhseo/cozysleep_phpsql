<?php
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "delete from homewear where m_no={$_POST['no']}";
    $result = mysqli_query($conn,$sqlstr);
    if($result){
?>
    <script>
        alert ("삭제되었습니다.");
        location.href ='/cozysleep/subpage/homewear/homewear_list.php';
    </script>
<?php
    }else {
        echo "실패했습니다.";
        echo mysqli_error($conn);
    }
?>