<?php
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "update notice 
            set title = '{$_POST['title']}',
            writer = '{$_POST['writer']}',
            description = '{$_POST['desc']}',
            date =  NOW()
            where n_no = '{$_POST['no']}'";
            //테이블명 = name
    echo $sqlstr;
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        header('Location:/cozysleep/notice/notice_list.php');
    }else{
        echo "실패!!!";

    }
?>
