<header>
    <div id="hd01">
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
            <span id="i02" class="material-icons">
                account_circle
                <ul class="m_submenu">
                    <li class="iz">
                        <?php
                            session_start();
                            if(isset($_SESSION['userName'])){
                                echo $_SESSION['userName']."님<button style='margin-left:5px; border:1px solid #ccc; border-radius:5px; cursor:pointer 'onclick='location.href=\"/cozysleep/process/logout_process.php\"'>로그아웃</button>";
                            }else{
                                echo "<a href='/cozysleep/login/login.php'>로그인</a>";
                            }
                        ?>
                    </li>
                    <li class="iz"><a href="/cozysleep/login/join.php">회원가입</a></li>
                    <li class="iz">주문조회</li>
                    <li>
                        <?php
                            if(isset($_SESSION['userName'])){
                              
                                $conn = mysqli_connect('localhost','root','1234','cozysleep');
                                $sql = "select * from member where name='{$_SESSION['userName']}'";
                                $result2 = mysqli_query($conn, $sql);
                                global $result2;
                                while($row2 = mysqli_fetch_array($result2)){
                                    echo "
                                    <a href='/cozysleep/login/members.php?m_no={$row2['m_no']}'>
                                        회원정보
                                    </a>
                                    ";
                                }
                            }else{
                                echo "";
                            }
                        ?> 
                    </li>
                </ul>
            </span>
            <span class="material-icons">
                <a href="/cozysleep/main/cart.php">
                local_mall
                </a>
            </span>
        </div>
    </div>    
    <div id="menu_sub">
        <ul id="t_sub">
            <li><a href="/cozysleep/subpage/bedding_list/bedding_list.php">침구</a></li>
            <li><a href="/cozysleep/subpage/cozykids/cozykids_list.php">코지키즈</a></li>
            <li><a href="/cozysleep/subpage/rugNcarpet/rugNcarpet_list.php">러그 · 카페트</a></li>
            <li><a href="/cozysleep/subpage/homewear/homewear_list.php">홈웨어</a></li>
            <li><a href="/cozysleep/subpage/living/living_list.php">리빙</a></li>
            <li><a href="/cozysleep/notice/notice_list.php">고객센터</a></li>
        </ul>
    </div>
</header>