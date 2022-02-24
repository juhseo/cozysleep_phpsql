<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homewear</title>
    <!-- copy -->
    <link rel="stylesheet" href="/cozysleep/css/bedding_list.css">
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
    <?php
        $conn = mysqli_connect('localhost','root','1234','cozysleep');
        $sql = "select * from homewear";
        $result = mysqli_query($conn, $sql);
        function showlist(){
            global $result;
            while($row = mysqli_fetch_array($result)){
                echo "<div style='width:23%; padding-bottom:80px'>";
                echo "<div><a href='/cozysleep/subpage/homewear/homewear_view.php?m_no={$row['m_no']}'><img src=\"/cozysleep/process/{$row['imgsrc']}\" width='100%',height='auto'></a></div>";
                echo "<div style='padding-top:10px'>";
                echo "<p style='font-weight:bold;color:#5d5d5d;padding-bottom:10px'>{$row['name']}</p>";
                echo "<p style='font-weight:bold;padding-bottom:10px'>{$row['price']}</p>";
                echo "<p style='font-size:11px;color:#6d6d6d'>{$row['shortDesc']}</p>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
    <?php include_once '../../include/header.php' ?>
    <main>
        <div id="bann_img">
                <img src="/cozysleep/img/homewear/h_hd_img.jpg" alt="배너이미지">
            </div>
        <section id="sec01" class="bedding_list">
            <h2>Homewear</h2>
            <?php
                if(isset($_SESSION['userName'])){
                    $session1 = $_SESSION['userName'];
                    if($session1 == "관리자"){
                        echo 
                            "<button 
                                style='
                                    width:150px; 
                                    height:30px; 
                                    background-color:#b7a591; 
                                    color:#fff; 
                                    border:none; 
                                    border-radius:5px; 
                                    font-weight:bold; 
                                    float:right; 
                                    margin-bottom:20px;
                                    '>
                                        <a href='/cozysleep/subpage/homewear/homewear_w.php'>
                                            글쓰기
                                        </a>
                                </button>";
                    }  
                }
            ?>
            <div id="hd">
                <div id="hd_l">
                    <?php
                        $total_pd = mysqli_num_rows($result);
                        echo "<p>$total_pd<p><p>개의 상품이 있습니다.</p>";
                    ?>
                </div>
                <div id="hd_r">
                    <p>인기순</p>
                    <p>신상품순</p>
                    <p>낮은가격순</p>
                    <p>높은가격순</p>
                </div>
            </div>
            <div id="line01" class="lines">
                <?php showlist();?>
            </div>
            <div id="line02" class="lines">

            </div>
            <div id="line03" class="lines">

            </div>
        </section>
    </main>
    <!-- footer -->
    <?php include_once '../../include/footer.php' ?>
</body>
</html>