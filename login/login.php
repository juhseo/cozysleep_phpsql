<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/cozysleep/css/login.css">
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
    <?php include_once '../include/header.php' ?>
    <main>
        <div id="main_wrap">
            <div id="loginpage">
                <div id="main_l">
                    <h3>코지슬립 멤버쉽 혜택</h3>
                    <img src="/cozysleep/img/login/memberPC02.jpg" alt="membership_img">
                </div>
                <span></span>
                <div id="main_r">
                    <div id="r_top">
                        <h3>로그인</h3>
                        <h4><a href="/cozysleep/login/join.php"><p>회원가입</p><p>하시겠어요?</p></a></h4>
                    </div>
                    <table>
                        <form action="/cozysleep/process/login_process.php" id="loginForm" method="post">
                            <tr>
                                <td>
                                    <input type="text" name="userId" id="userId" placeholder="아이디"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="userPw" id="userPw" placeholder="비밀번호"/>
                                </td>
                            </tr>
                            <tr class="input_t">
                                <td> 아이디 / 비밀번호 찾기</td>
                            </tr>
                            <tr class="button_t">
                                <td><button id="loginBtn">로그인</button></td>
                            </tr>
                        </form>
                    </table>
                    <script>
                        const loginForm = document.querySelector('#loginForm');
                        const loginBtn = document.querySelector('#loginBtn');
                        const userId = document.querySelector('#userId');
                        const userPw = document.querySelector('#userPw');
                        if(userId.value !== "" && userPw.value !== ""){
                            if(userPw.value.length == 8){
                                loginForm.submit();
                            }else{
                                alert('비밀번호는 8자리로 입력해주세요.')
                            }
                        };
                    </script>
                    <div id="r_bottom">
                         <h4><p>SNS</p><p>계정으로 로그인하세요 !</p></h4>
                        <button id="kakao">카카오 로그인</button>
                        <button id="naver">네이버 로그인</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once '../include/footer.php' ?>
</body>
</html>