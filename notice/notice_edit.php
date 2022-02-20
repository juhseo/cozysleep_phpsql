<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="/cozysleep/css/main.css">
    <link rel="stylesheet" href="/cozysleep/css/write.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@500&display=swap" rel="stylesheet">

    
    <!-- 썸머노트 링크 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
    <header>
        <div id="hd_left">
            <span class="material-icons">
                menu
            </span>
        </div>
        <h1><a href="/cozysleep/main/main.php">cozysleep</a></h1>
        <div id="hd_rig" class="icons">
            <span class="material-icons">
                search
            </span>
            <span class="material-icons">
                account_circle
            </span>
            <span class="material-icons">
                local_mall
            </span>
        </div>
    </header>
    <main>
        <div id="sec01">
            <h2>공지사항</h2>
            <form action="/cozysleep/process/n_update_process.php" method="POST" id="imgForm" enctype="multipart/form-data">
                <input type="hidden" name="no" value="<?=$_GET['n_no']?>">
                <table>
                <?php
                    // echo $_GET['n_no'];
                    $conn = mysqli_connect('localhost','root','1234','cozysleep');
                    $sqlstr = "select * from notice where n_no = {$_GET['n_no']}";
                    $result = mysqli_query($conn, $sqlstr);
                    $row = mysqli_fetch_array($result);
                ?>
                    <tr>
                        <td>제목</td>
                        <td>
                            <input 
                            type="text" 
                            name="title" 
                            id="title" 
                            class ="topinp"
                            value="<?=$row['title']?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>글쓴이</td>
                        <td>
                            <input 
                            type="text" 
                            name="writer" 
                            id="writer" 
                            class ="topinp"
                            value="<?=$row['writer']?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea id="summernote" class="form-control" name="desc" cols="80" rows="10" id="desc">
                                <?=$row['description']?>
                            </textarea>
                        </td>
                        <!-- <script>
                            $('#summernote').summernote({
                                placeholder: '내용을 입력하세요',
                                tabsize: 2,s
                                height: 300
                            });
                        </script> -->
                        <!-- <td>
                            <textarea name="desc" cols="80" rows="10" id="desc">
                            </textarea>
                        </td> -->
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="button" onclick="location.href='/cozysleep/notice/notice_list.php'" value="목록" class="writebutton">
                            <input type="reset" value="취소" class="writebutton">
                            <input type="submit" value="수정" id="writebtn" class="writebutton">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <footer>
        <div id="ft_wrap">
            <div id="ft_top">
                <div id="f_top_01" class="ft_top_div">
                    <h4>CS CENTER</h4>
                    <p>02-123-1234</p>
                    <p>평일 MONDAY - FRIDAY 9AM - 6PM</p>
                    <p>점심시간 LUNCH 12PM - 1PM</p>
                    <p>토·일요일, 공휴일은 휴무로 문의 게시판을 이용해주세요</p>
                </div>
                <span></span>
                <div id="f_top_02" class="ft_top_div">
                    <h4>HEAD OFFICE</h4>
                    <p>본사 : 부산광역시 동래구</p>
                    <p>TEL 02-123-1234, FAX 02-456-7890</p>
                    <p>E-MAIL  juhh@cozysleep.co.kr (입점/제휴문의)</p>
                    <p>juss@cozysleep.co.kr (도매/수출/광고문의)</p>
                </div>
                <span></span>
                <div id="f_top_03" class="ft_top_div">
                    <h4>DELIVERY ADDRESS</h4>
                    <p>· 빠른배송상품 반품주소지 : 대구시 달서구 갈산동 100-48</p>
                    <p>· 맞춤제작상품 반품주소지 : 부산광역시 동래구 [물류센터]<br/>
                            반품접수는 우체국택배를 이용해주세요</p>
                </div>
                <span></span>
                <div id="f_top_04" class="ft_top_div">
                    <h4>BANKING ACCOUNT</h4>
                    <p>· 국민은행 123456-78-654321</p>
                    <p>· 국민은행 123456-78-910112</p>
                    <p>· 예금주 : 코지슬립</p>
                </div>
            </div>
        </div>
        
        <div id="ft_bottom">
            <p>주식회사 코지슬립 <span></span> 사업자등록번호 : 123-45-78910[사업자정보확인]</p>
            <p>대표자 : 김슬립 <span></span> 개인정보 관리 책임자 : 김슬립 <span></span> 통신판매업 신고번호 : 2021-부산동래-12345</p>
            <p>회사소개 <span></span> 이용안내 <span></span> 이용약관 <span></span>개인정보처리방침</p>
            <p>Copyright. 2020 by 코지슬립 all rights reserved.</p>
        </div>
    </footer>
</body>
</html>