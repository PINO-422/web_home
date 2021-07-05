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

<body>

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


    <!-- main -->
    <main id="main">
        <section id="signUpCont">
            <div class="signUp">
                <?php
                    include "../connect/session.php";

                    unset($_SESSION['mymemberID']);
                    unset($_SESSION['youNickName']);

                    echo "<div>로그아웃 되었습니다.</div><br><a href='../pages/main.html'>메인 페이지로 이동하기</a>";
                ?>
            </div>
        </section>
    </main>
    <!-- //main -->

    

</body>

</html>