<?php 
    //세션 삭제하기
    session_start();
    unset($_SESSION['userName']);
?>
<script>
    alert('로그아웃 되었습니다.');
    history.back();
</script>