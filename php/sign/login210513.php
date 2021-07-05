<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>

    <!-- SEO (검색엔진최적화) -->
    <meta name="author" content="min">
    <meta name="description" content="포트폴리오를 위한 포트폴리오 사이트입니다.">
    <meta name="keywords" content="포트폴리오, 웹표준, 반응형, 퍼블리셔, 프론트엔드 개발자">
    <meta name="robots" content="all">

    <!-- facebook -->
    <meta property="og:url" content="http://changmin000.dothome.co.kr">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portfolio Site">
    <meta property="og:description" content="포트폴리오를 위한 포트폴리오 사이트입니다.">
    <meta property="og:image" content="../assets/icon/main.png">
    <!-- twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="React Portfolio App">
    <meta name="twitter:url" content="#">
    <meta name="twitter:image" content="#">
    <meta name="twitter:description" content="포트폴리오를 위한 포트폴리오 사이트입니다.">
    <!-- 아이콘 -->
    <link rel="icon" href="#" />
    <link rel="apple-touch-icon" href="#" />
    <link rel="shortcut icon" href="#" />
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/icon/icon_192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="../assets/icon/icon_256.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icon/icon16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/icon/icon_32.png">
    <!-- CSS style -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- web fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->

    <!-- header -->
    <header id="header">
        <div class="port">
            <a href="portfolio.html">port</a>
        </div>
        <div class="logo">
            <a href="#">Min</a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="../sign/signUp.html">회원가입</a></li>
                <li><a href="login.php">로그인</a></li>
                <li><a href="../board/board.html">게시판</a></li>
            </ul>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="reference.html">Reference</a></li>
                <li><a href="youtube.html">YouTube</a></li>
                <li><a href="script.html">Script</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- //header -->

    <!-- main -->
    <main id="login">
        <section id="loginCont">
            <div class="login-cont">
                <div class="login_tit">
                    <div class="login_tit_room">
                        <p>MIN<br>사이트에 오신걸 환영합니다.</p>
                    </div>
                </div>
                <input type="text" name="email" class="login-id" placeholder="이메일을 적어주세요!">

                <input type="text" name="email" class="login-pw" placeholder="비밀번호를 적어주세요!">

                <input type="button" class="login_btn" value="로그인">

                <div class="login_want">
                    <p>회원가입을 원하면? <a href="#">회원가입</a></p>

                </div>
            </div>
        </section>
    </main>
    <!-- //main -->
    <!-- footer -->
    <footer id="footer">
        <div class="footer-info">
            <div>
                <h3>Email</h3>
                <p>leechangmin000@naver.com</p>
            </div>
            <div>
                <h3>Kakao</h3>
                <p>changmin</p>
            </div>
            <div>
                <h3>Social</h3>
                <ul>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Github</a></li>
                    <li><a href="#">Reference</a></li>
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Animation</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>