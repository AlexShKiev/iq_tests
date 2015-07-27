<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
            <header class="major">
                <h2>IQ test</h2>
            </header>
<?php
session_start();
if(isset($_GET['1']))
{
    if($_GET['1'] >= 0)
    {
        $_SESSION['result'] += $_GET['1'];
        header('Location: test15.php#one', true, 303);

    }
}elseif(isset($_GET['0'])){
    $_SESSION['result'] = $_GET['0'];
    header('Location: test15.php#one', true, 303);
}
?>
<form action=<?php $_SERVER['PHP_SELF']?>>
    <label>Ralph likes 25 but not 24; he likes 400 but not 300; he likes 144 but not 145. Which does he like:</label><br>
    <input type="radio" name="1" value="0">10<br>
    <input type="radio" name="1" value="0">50<br>
    <input type="radio" name="1" value="0">124<br>
    <input type="radio" name="1" value="0">200<br>
    <input type="radio" name="1" value="8">1600<br>
    <input type="submit" value="SKIP" name="0">
    <input type="submit" value="NEXT QUESTION">
</form>
        </div>
    </div>
</section>

<!-- Two -->

<!-- Footer -->


</body>
</html>