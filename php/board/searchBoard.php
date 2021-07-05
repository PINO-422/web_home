<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    // include '../connect/checkSession.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>
    <!-- meta -->
    <?php
        include "../component/meta.php";
    ?>
    <!-- //meta -->
</head>
<body class="light">
    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->
    <!-- header -->
    <?php
        include "../component/header.php";
    ?>
    <!-- //header -->
    <!-- 
        1. 게시판 테이블 만들기
        2. 게시판 데이터 등록 페이지(writeBoard.php)
        3. 게시판 데이터 저장 페이지(saveBoard.php)
        4. 게시판 데이터 불러오기 페이지(Board.php)
-->
    <!-- main -->
    <main id="main">
        <section id="boardCont">
            <div class="container">
                <div class="listBoard">
                    <h2>검색한 결과입니다.</h2>
                    <div class="listSearch">
                        <a href="board.php" class="form-btn black">목록보기</a>
                    </div>
                    <div class="listTable">
                        <table class="table">
                            <colgroup>
                                <col style="width: 10%" />
                                <col style="width: 65%" />
                                <col style="width: 10%" />
                                <col style="width: 15%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                            if( isset($_GET['page'])){
                                $page = (int) $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $numView = 20;
                            $viewLimit = ($numView * $page) - $numView;

                                if( isset($_GET['board'])){
                                    $page = (int) $_GET['board'];
                                } else {
                                    $page = 1;
                                }
                                $numView = 10;
                                $viewLimit = ($numView * $page) - $numView;  

                                $searchKeyword = $dbConnect -> real_escape_string($_POST['searchKeyword']);
                                $searchOption = $dbConnect -> real_escape_string( $_POST['searchOption']);
                                if( $searchKeyword == '' || $searchKeyword == null ){
                                    echo "검색어가 없습니다.";
                                    exit;
                                }
                                switch ($searchOption){
                                    case 'title' :
                                    case 'content' :
                                    case 'titAcont' :
                                    case 'titOcont' :
                                        break;
                                    default :
                                        echo "검색 옵션을 선택해 주세요!";
                                        exit;
                                        break;
                                }
                                // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardCont, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON(m.mymemberID = b.mymemberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%'";
                                // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardCont, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON(m.mymemberID = b.mymemberID) WHERE b.boardCont LIKE '%{$searchKeyword}%'";
                                // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardCont, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON(m.mymemberID = b.mymemberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' AND b.boardCont LIKE '%{$searchKeyword}%'";
                                // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardCont, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON(m.mymemberID = b.mymemberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' OR b.boardCont LIKE '%{$searchKeyword}%'";
                                $sql = "SELECT b.myBoardID, b.boardTitle, b.boardCont, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON(m.mymemberID = b.mymemberID)";

                                switch ($searchOption){
                                    case 'title' :
                                        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ";
                                        break;
                                    case 'content' :
                                        $sql .= "WHERE b.boardCont LIKE '%{$searchKeyword}%' ";
                                        break;
                                    case 'titAcont' :
                                        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' AND b.boardCont LIKE '%{$searchKeyword}%' ";
                                        break;
                                    case 'titOcont' :
                                        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' OR b.boardCont LIKE '%{$searchKeyword}%' ";
                                        break;
                                }
                                $sql .= "DESC LIMIT {$viewLimit}, {$numView}";

                                $result = $dbConnect -> query($sql);
                                if($result){
                                    $boardCount = $result -> num_rows;
                                    if($boardCount > 0 ){
                                        for( $i=1; $i<=$boardCount; $i++){
                                            $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<tr>";
                                            echo "<td>".$boardInfo['myBoardID']."</td>";
                                            echo "<td><a href='#'>".$boardInfo['boardTitle']."</a></td>";
                                            echo "<td>".$boardInfo['youNickName']."</td>";
                                            echo "<td>".date('Y-m-d H:i', $boardInfo['regTime'])."</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>{$searchOption}가 없습니다.</td></tr>";
                                    }
                                } else {
                                    echo "에러발생! 변수 이름이 틀리거나 오타가 났어요~";
                                    exit;
                                }

                            ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- header -->
    <?php
        include "../board/pagination.php";
    ?>
    <!-- //header -->

                </div>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>