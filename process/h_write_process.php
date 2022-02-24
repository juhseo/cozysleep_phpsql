<?php
    var_dump($_FILES);
    var_dump($_POST);

    $filetypeArr = explode('/',$_FILES['fileimg']['type']);
    $filetype = $filetypeArr[0];
    $fileExt = $filetypeArr[1];
    $fileCheck = false;


    if($fileExt == "jpg" || $fileExt == "jpeg" || $fileExt == "gif" || $fileExt == "png"){
        $fileCheck = true;
    }
    if($filetype == "image"){
        if($fileCheck){
            $tempFile = $_FILES['fileimg']['tmp_name'];
            $resFile = "images/{$_FILES['fileimg']['name']}";
            $imgUpload = move_uploaded_file($tempFile,$resFile);

            if($imgUpload){
                echo "파일이 업로드 되었습니다.";
            }else {
                echo "파일 업로드에 실패했습니다.";
            }
        }
    }
    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "insert into homewear(name,price,manufacture,imgsrc,shortDesc,description)
                values('{$_POST['p_name']}','{$_POST['price']}','{$_POST['manufac']}','{$resFile}','{$_POST['s_desc']}','{$_POST['desc']}')";
    $result = mysqli_query($conn, $sqlstr);

    if($result){
        echo " mysql 업로드 성공 ✔";
    }else {
        echo " mysql 업로드 실패 ❗❗";
        echo mysqli_error($conn);
    }
?>