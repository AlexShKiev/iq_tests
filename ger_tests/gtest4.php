<!DOCTYPE HTML>

<html>
<head>
    <title>IQ TESTS</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.scrollex.min.js"></script>
    <script src="/js/jquery.scrolly.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-xlarge.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<section id="header">
    <header class="major">
        <h1>IQ TESTS 4 YOU</h1>
    </header>
</section>

<!-- One -->
<section id="one" class="main special">
    <div class="container">
        <span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
        <div class="content">
            <?php
            session_start();
            if(isset($_GET['1']))
            {
                if($_GET['1'] >= 0)
                {
                    $_SESSION['result'] += $_GET['1'];
                    header('Location: gtest5.php#one', true, 303);

                }
            }elseif(isset($_GET['0'])){
                $_SESSION['result'] = $_GET['0'];
                header('Location: gtest5.php#one', true, 303);
            }
            ?>
            <form action=<?php $_SERVER['PHP_SELF']?>>
                <label>Wählen Sie die richtige Antwort:</label>
                <img src="../img/secondq.gif"><br>
                <input type="radio" name="1"  value="0"><img src="../img/secondqa.gif"><br>
                <input type="radio" name="1" value="12" ><img src="../img/secondqb.gif"><br>
                <input type="radio" name="1"  value="0"><img src="../img/secondqc.gif"><br>
                <input type="submit" value="ÜBERSPRINGEN" name="0">
                <input type="submit" value="WEITER">
            </form>
        </div>
    </div>
</section>

<!-- Two -->

<!-- Footer -->


</body>
</html>
