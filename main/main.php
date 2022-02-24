<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cozysleep</title>
    <!-- copy -->
    <link rel="stylesheet" href="/cozysleep/css/main.css">
    <link rel="stylesheet" href="/cozysleep/css/header.css">
    <link rel="stylesheet" href="/cozysleep/css/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@500&display=swap" rel="stylesheet">
    <script src="/cozysleep/js/movebanner.js" defer></script>
    <script src="/cozysleep/js/submenu.js" defer></script>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','1234','cozysleep');
        $sql = "select * from bestseller";
        $result = mysqli_query($conn, $sql);
        function showlist(){
            global $result;
            while($row = mysqli_fetch_array($result)){
                echo "<div style='width:23%'>";
                echo "<p style='font-size:19px;font-weight:bold;padding-bottom:5px'>{$row['m_no']}</p>";
                echo "<div><a href='/cozysleep/view/view.php?m_no={$row['m_no']}'><img src=\"../process/{$row['imgsrc']}\" width='100%',height='auto'></a></div>";
                echo "<div style='padding-top:10px'>";
                echo "<p style='font-weight:bold;color:#5d5d5d;padding-bottom:10px'>{$row['name']}</p>";
                echo "<p style='font-weight:bold;padding-bottom:10px'>{$row['price']}</p>";
                echo "<p style='font-size:11px;color:#6d6d6d'>{$row['shortDesc']}</p>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
    <?php include_once '../include/header.php' ?>
    <main>
        <section id="sec01" class="slide_wrap">
            <div id="wrap">
                <div id="slides">
                    <div class="slide">
                        <img src="/cozysleep/img/main/ban01.jpg" alt="img01" class="slide_img"/>
                    </div>
                    <div class="slide">
                        <img src="/cozysleep/img/main/ban02.jpg" alt="img02" class="slide_img"/>
                    </div>
                    <div class="slide">
                        <img src="/cozysleep/img/main/ban03.jpg" alt="img03" class="slide_img"/>
                    </div>
                    <div class="slide">
                        <img src="/cozysleep/img/main/ban04.jpg" alt="img04" class="slide_img"/>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec03">
            <div id="sec03_wrap">
                <div id="sec03_left">
                    <img src="/cozysleep/img/main/sec03_01.jpg" alt="left_img">
                </div>
                <div id="sec03_rig">
                    <img src="/cozysleep/img/main/sec03_02.jpg" alt="rig_img_01">
                    <img src="/cozysleep/img/main/sec03_03.jpg" alt="rig_img_02">
                </div>
            </div>
        </section>
        <section id="sec02" class="bestseller">
            <h2>BEST PRODUCT</h2>
            <?php
                if(isset($_SESSION['userName'])){
                    $session1 = $_SESSION['userName'];
                    if($session1 == "관리자"){
                        echo "<button style='width:150px; height:30px; background-color:#b7a591; color:#fff; border:none; border-radius:5px; font-weight:bold; float:right;'><a href='/cozysleep/view/write.php'>글쓰기</a></button>";
                    }  
                }
            ?>
            <div id="line01" class="lines">
                <?php showlist();?>
            </div>
        </section>
        <section id="sec05">
            <div id="sec05_wrap">
                <div id="sec05_left">
                    <img src="/cozysleep/img/main/sec05.jpg" alt="left_img20">
                </div>
                <div id="sec05_rig">
                    <h1>Brand Story</h1>
                    <p>
                        코지슬립은 자연을 모티브로 <br/>
                        <br/>
                        유니크한 컬러감을 담은 감성리빙 디자인브랜드 입니다.
                    </p>
                    <button>READ MORE</button>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <?php include_once '../include/footer.php' ?>
</body>
</html>