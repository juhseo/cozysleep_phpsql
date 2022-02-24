<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/cozysleep/css/join.css">
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
        <div id="sec_join">
            <h3>간편 회원가입</h3>
            <h4><p>회원가입</p><p>하시겠어요?</p></h4>
            <div id="sec_join_form">
                <form action="/cozysleep/process/join_process.php" method="post" id="joinForm">
                    <table>
                        <colgroup>
                            <col style="width:150px; margin-bottom:20px">
                            <col style="width:auto;">
                        </colgroup>
                        <tr>
                            <td class="tds">이름</td>
                            <td><input type="text" name="userName" id="userName" class="td_input"></td>
                        </tr>
                        <tr>
                            <td class="tds">아이디</td>
                            <td><input type="text" name="userId" id="userId"  class="td_input"></td>
                        </tr>
                        <tr>
                            <td class="tds">비밀번호</td>
                            <td><input type="password" name="userPw" id="userPw"  class="td_input" placeholder="비밀번호는 8자리로 입력해주세요"></td>
                        </tr>
                        <tr>
                            <td class="tds">비밀번호 확인</td>
                            <td><input type="password" name="userPwch" id="userPwch"  class="td_input" placeholder="비밀번호와 일치하게 입력해주세요"></td>
                        </tr>
                        <tr>
                            <td class="tds">E-MAIL</td>
                            <td><input type="text" name="userEmail" id="userEmail" class="td_input" ></td>
                        </tr>
                        <tr>
                            <td class="tds">전화</td>
                            <td><input type="text" name="userHn" id="userHn"  class="td_input"></td>
                        </tr>
                        <tr>
                            <td class="tds">휴대폰번호</td>
                            <td><input type="text" name="userPn" id="userPn"  class="td_input"></td>
                        </tr>
                    </table>
                    <div>
                        <button type="button" id="joinButton" class="formbtn">회원가입</button>
                        <button type="reset" class="formbtn">취소</button>
                    </div>
                </form>
                <script>
                    const joinForm = document.querySelector('#joinForm');
                    const joinBtn = document.querySelector('#joinButton');
                    const name = document.querySelector('#userName');
                    const id = document.querySelector('#userId');
                    const pw = document.querySelector('#userPw');
                    const pwch = document.querySelector('#userPwch');
                    const email = document.querySelector('#userEmail');
                    const Hn = document.querySelector('#userHn');
                    const Pn = document.querySelector('#userPn');
                    joinBtn.addEventListener('click',function(e){
                        if(
                            name.value !== '' 
                            && id.value !== '' 
                            && pw.value !== '' 
                            && pwch.value !== ''
                            && email.value !== ''
                            && Hn.value !== ''
                            && Pn.value !== ''
                            ){
                                if (pw.value.length == 8) {
                                    if(pw.value == pwch.value){
                                        joinForm.submit();
                                    }else {
                                        alert('비밀번호가 일치하지 않습니다.')
                                    }
                                }else{
                                    alert('비밀번호는 8자리로 해주세요 !')
                                }
                            }else{
                                alert('항목을 모두 입력하세요 !')
                            }
                    })
                </script>
            </div>    
        </div>
    </main>
    <?php include_once '../include/footer.php' ?>
</body>
</html>