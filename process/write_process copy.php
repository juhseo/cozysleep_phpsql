<!-- <?php
    $name = $_POST['p_name'];
    $price = $_POST['price'];
    $manufac = $_POST['manufac'];
    $fileimg = $_POST['fileimg'];
    $s_desc = $_POST['s_desc'];
    $desc = $_POST['desc'];

    $conn = mysqli_connect('localhost','root','1234','cozysleep');
    $sqlstr = "insert into bestseller(p_name, price, manufac, fileimg, s_desc, desc)
                values(
                    '{$name}',
                    '{$price}',
                    '{$manufac}',
                    '{$fileimg}',
                    '{$s_desc}',
                    '{$desc}'
                )";


    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo '성공';
    }else{
        echo '실패';
        echo mysqli_error($conn);
    }
?> -->