<?php
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
    $sqlstr = "update living 
            set name = '{$_POST['p_name']}',
            price = '{$_POST['price']}',
            manufacture = '{$_POST['manufac']}',
            shortDesc = '{$_POST['s_desc']}',
            description = '{$_POST['desc']}',
            imgsrc = '{$resFile}'
            where m_no = '{$_POST['no']}'";
            //테이블명 = name
    echo $sqlstr;
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        header('Location:/cozysleep/subpage/living/living_list.php');
    }else{
        echo "실패!!!";

    }
?>
