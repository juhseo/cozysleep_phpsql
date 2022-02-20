<?php
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $desc = $_POST['desc'];

    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "insert into notice(title,writer,description,date)
        values('{$title}','{$writer}','{$desc}',NOW())";
    
    // $sqlstr = "insert into notice(title,writer,created,description)
    //     values('{$_POST['title']}','{$_POST['writer']}',NOW(),'{$_POST['desc']}')";
    // $result = mysqli_query($conn, $sqlstr);
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo '성공';
    }
    else {
        echo '실패';
        echo mysqli_error($conn);
    }
?>