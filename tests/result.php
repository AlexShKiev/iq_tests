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
error_reporting( E_ERROR );
session_start();

        $_SESSION['result'] += $_GET['1'];
        $result=$_SESSION['result'];
        if ($result > 119){
            echo 'Your IQ level is very high.Your result is: '. $result.  'points' ;

        }
        elseif($result > 89){
            echo 'Your IQ level is high.Your result is: '. $result.   'points';

        }
        elseif($result > 79){
            echo 'Your IQ level is low.Your result is: '. $result.   'points';

        }
        elseif($result <69){
            echo 'Your IQ level is too low.Your result is: '. $result.   'points';

        }

    session_destroy();
?>
</div>
</div>
</section>

<!-- Two -->

<!-- Footer -->


</body>
</html>