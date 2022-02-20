<?php
    // $no = $_POST['n_no'];
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "delete from notice where n_no='{$_POST['no']}'";
    $result = mysqli_query($conn,$sqlstr);

    header('Location:/cozysleep/notice/notice_list.php');
?>