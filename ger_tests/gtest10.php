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
            if(isset($_GET['1'])) {
                if ($_GET['1'] >=0) {
                    $_SESSION['result'] += $_GET['1'];
                    header('Location: result.php#one', true, 303);

                }
                else{
                    echo 'You haven*t choose any answer!';
                }
            }
            ?>
            <form action=<?php $_SERVER['PHP_SELF']?>>
                <label>Welche Nummer gehört nicht dazu?</label>
                <div class="svg-img"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="280px" height="280px" viewBox="0 0 330 330"><defs><g id="AWL6"><path fill="#333333" stroke="none" d="M 218.3 233Q 219.45 232.1 221.2 232.1 224.25 232.1 225.35 234.35 226.6 236.5 226.6 241.45L 235.65 241.45Q 235.65 238.95 235.3 236.15 235 233.35 233.65 231 232.3 228.5 229.45 226.9 226.6 225.25 221.75 225.25 216.5 225.25 213.5 227.1 210.55 228.85 208.85 232 207.25 235 206.75 239.3 206.35 243.75 206.35 248.85 206.35 254.1 206.75 258.4 207.25 262.7 208.85 265.85 210.55 268.85 213.5 270.6 216.5 272.15 221.75 272.15 226.25 272.15 229 270.8 231.8 269.45 233.45 267 235 264.5 235.6 261.2 236.1 257.9 236.1 254.15L 227 254.15Q 227 257.9 226.5 260.2 226.05 262.4 225.35 263.55 224.55 264.85 223.55 265.25 222.4 265.7 221.3 265.7 219.8 265.7 218.65 265.05 217.6 264.5 216.9 262.75 216.1 260.95 215.75 257.8 215.45 254.6 215.45 249.5 215.45 244.7 215.75 241.4 215.95 237.95 216.5 235.95 217.25 233.95 218.3 233M 71 109.35L 45.75 109.35 45.75 154.65 54.95 154.65 54.95 134.9 70.15 134.9 70.15 127.45 54.95 127.45 54.95 116.85 71 116.85 71 109.35M 175.35 28.05L 164 28.05 152 73.35 161.5 73.35 163.65 63.85 175.65 63.85 177.7 73.35 187.2 73.35 175.35 28.05M 169.55 36L 169.7 36 174.05 56.25 165.1 56.25 169.55 36M 105.45 272.5L 105.45 264.15 96.75 264.15 96.75 272.5 105.45 272.5M 88.7 239.8L 88.7 241.25 97.1 241.25 97.1 239.7Q 97.1 236.6 98.1 234.6 99.1 232.65 101.6 232.65 103.75 232.65 104.8 234.15 105.95 235.75 105.95 238.1 105.95 240.05 105.35 241.7 104.8 243.25 103.4 244.75L 101.05 247.5Q 98.9 250 98.1 252.15 97.2 254.3 97.2 257.45L 97.2 259.95 105 259.95 105 259.05Q 105 256.55 105.8 255.1 106.5 253.6 108.1 251.65L 110.65 248.85Q 112.95 246.2 113.75 243.85 114.6 241.6 114.6 238.95 114.6 233.45 111.3 230.05 107.95 226.75 101.25 226.75 98.2 226.75 95.8 227.7 93.45 228.7 91.85 230.35 90.3 232.1 89.5 234.45 88.7 236.95 88.7 239.8M 281 144.65L 281 112.1 271.8 112.1 271.8 144.45Q 271.8 148.1 271 149.75 270.2 151.6 267.7 151.6 265.2 151.6 264.45 149.75 263.65 148.1 263.65 144.45L 263.65 143.1 255.25 143.1 255.25 145Q 255.25 147.6 255.8 150.1 256.4 152.5 257.75 154.25 259.1 156.1 261.4 157.15 263.65 158.05 267.3 158.05 274.15 158.05 277.55 155 281 151.9 281 144.65 Z"></path></g><path id="AWL6_STROKES" stroke="#333333" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" fill="none" d="M 259.05 38Q 268.75 45.25 277.75 54.3 324.25 100.75 324.25 166.4 324.25 192.5 317 215.55 305.8 250.5 277.75 278.55 231.35 324.95 165.7 324.95 100.05 324.95 53.6 278.55 25.6 250.5 14.5 215.65 7.2 192.55 7.2 166.4 7.2 100.75 53.6 54.3 62.7 45.25 72.4 38 112.8 7.9 165.7 7.9 218.6 7.9 259.05 38L 165.7 166.4 165.7 166.55 317 215.55M 165.7 166.55L 165.7 324.95M 14.5 215.65L 165.7 166.4 72.4 38"></path></defs><g transform="matrix( 1, 0, 0, 1, 0,0) "><use xlink:href="#AWL6"></use><use xlink:href="#AWL6_STROKES"></use></g></svg></div>
                <input type="radio" name="1"  value="0">B<br>
                <input type="radio" name="1" value="12" >O<br>
                <input type="radio" name="1"  value="0">D<br>
                <input type="radio" name="1"  value="0">G<br>
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
