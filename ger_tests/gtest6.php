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
                    header('Location: gtest7.php#one', true, 303);

                }
            }elseif(isset($_GET['0'])){
                $_SESSION['result'] = $_GET['0'];
                header('Location: gtest7.php#one', true, 303);
            }
            ?>
            <form action=<?php $_SERVER['PHP_SELF']?>>
                <label>Welche Graphik gehört nicht dazu?</label>
                <div class="svg-img"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="280px" height="280px" viewBox="0 0 330 330"><defs><g id="AWL3"><path fill="#333333" stroke="none" d="M 202.4 271.5L 202.35 271.5 202.95 264.55 214.25 264.55 214.25 259.7 198.3 259.7 197.15 276.35 202.75 276.35Q 202.9 275 203.65 274.3 204.35 273.55 205.7 273.55 206.75 273.55 207.4 273.8 208.1 274.15 208.5 274.85 208.95 275.6 209.15 276.85 209.3 278.1 209.3 280.05 209.3 283 208.45 284.5 207.6 286.05 205.65 286.05 204.6 286.05 204.05 285.5 203.4 285 203.15 284.25 202.8 283.5 202.7 282.6 202.65 281.75 202.65 280.95L 196.65 280.95 196.65 281.8Q 196.65 283.1 196.9 284.6 197.25 286.1 198.25 287.4 199.2 288.65 200.95 289.45 202.8 290.25 205.7 290.25 208.6 290.25 210.55 289.45 212.45 288.7 213.55 287.2 214.65 285.7 215.1 283.65 215.5 281.5 215.5 278.95 215.5 277.2 215.15 275.4 214.85 273.65 213.95 272.3 213.1 270.85 211.7 270.05 210.2 269.2 208.05 269.2 206.05 269.2 204.6 269.7 203.25 270.3 202.4 271.5M 268.05 211.35L 268.05 217.05 274 217.05 274 211.35 268.05 211.35M 262.55 194.7L 262.55 195.65 268.3 195.65 268.3 194.55Q 268.3 192.45 269 191.15 269.75 189.85 271.35 189.85 272.8 189.85 273.55 190.85 274.3 191.85 274.3 193.5 274.3 194.8 273.95 195.95 273.55 197.05 272.65 198.1L 271.05 200Q 269.55 201.6 268.95 203.1 268.3 204.6 268.3 206.75L 268.3 208.5 273.75 208.5 273.75 207.8Q 273.75 206.15 274.25 205.1 274.7 204.1 275.85 202.85L 277.55 200.85Q 279.15 199.05 279.7 197.45 280.3 195.95 280.3 194.1 280.3 190.3 278 188 275.75 185.75 271.15 185.75 269.05 185.75 267.4 186.4 265.75 187.1 264.7 188.25 263.65 189.45 263.1 191.1 262.55 192.75 262.55 194.7M 104.4 257.1L 104.4 262.5 117.25 262.5Q 115.05 265.55 113.4 268.75 111.75 271.95 110.6 275.15 109.45 278.25 108.75 281.35 108.05 284.35 107.7 287.15L 114.25 287.15Q 114.65 283.9 115.4 280.55 116.15 277.2 117.2 273.95 118.35 270.7 119.85 267.6 121.35 264.55 123.25 261.85L 123.25 257.1 104.4 257.1M 50.85 190.9L 44.4 190.9 34.25 210.05 34.25 215.2 45.15 215.2 45.15 221.6 50.85 221.6 50.85 215.2 53.8 215.2 53.8 210.35 50.85 210.35 50.85 190.9M 45.1 198.75L 45.15 198.75 45.15 210.35 39.1 210.35 45.1 198.75M 46.6 109.15Q 46.6 110.35 46.5 111.25 46.4 112.15 46.05 112.9 45.7 113.7 45.1 114.5 44.45 115.3 43.35 116.2L 40.85 118.5Q 39.2 120.1 37.9 121.65 36.65 123.15 35.8 124.75 34.95 126.35 34.55 128.15 34.15 129.9 34.15 131.95L 53 131.95 53 127.1 41.45 127.1Q 41.65 126.25 42.45 125.05 43.2 123.85 44.6 122.6L 48.1 119.4Q 49.35 118.2 50.25 117.15 51.2 116.05 51.75 114.85 52.3 113.65 52.6 112.4 52.85 111.1 52.85 109.6 52.85 105.6 50.55 103.45 48.35 101.3 43.65 101.3 38.7 101.3 36.4 103.55 34.15 105.9 34.15 110.15L 34.15 111.35 40.1 111.35Q 40.1 110.1 40.25 109.05 40.3 107.95 40.7 107.15 41.05 106.3 41.7 105.85 42.4 105.4 43.6 105.4 46.6 105.4 46.6 109.15M 97.4 45.95L 103.5 45.95 103.5 67.65 109.8 67.65 109.8 36.95 105.2 36.95Q 104.7 39.6 102.9 40.7 101.15 41.85 98 41.85L 97.4 41.85 97.4 45.95M 136.05 44.95Q 135.55 42.1 134.5 40.3 133.4 38.55 131.5 37.75 129.7 36.95 126.9 36.95 123.4 36.95 121.55 38.35 119.6 39.7 118.65 42 117.65 44.25 117.45 47.15 117.25 50.15 117.25 53.3 117.25 57.45 117.7 60.2 118.2 63.1 119.25 64.85 120.35 66.65 122.25 67.4 124.1 68.15 126.9 68.15 130.25 68.15 132.2 66.85 134.15 65.55 135.1 63.25 136.1 60.95 136.25 58.05 136.5 55.1 136.5 51.9 136.5 47.8 136.05 44.95M 129.55 42.9Q 129.9 43.9 130.1 45.8 130.25 47.6 130.25 50.55L 130.25 53.85Q 130.25 56.8 130.1 58.8 129.9 60.8 129.6 62 129.2 63.2 128.55 63.7 127.95 64.2 126.9 64.2 125.9 64.2 125.25 63.8 124.55 63.4 124.15 62.35 123.75 61.3 123.65 59.45 123.5 57.6 123.5 54.7L 123.5 51.4Q 123.5 48.4 123.65 46.45 123.75 44.45 124.15 43.25 124.5 42.05 125.2 41.5 125.8 41.05 126.9 41.05 127.85 41.05 128.5 41.4 129.2 41.8 129.55 42.9M 254.55 109.65L 260.65 109.65 260.65 131.35 266.95 131.35 266.95 100.65 262.35 100.65Q 261.85 103.25 260.05 104.4 258.3 105.55 255.15 105.55L 254.55 105.55 254.55 109.65M 287.75 131.35L 287.75 100.65 283.15 100.65Q 282.7 103.25 280.85 104.4 279.1 105.55 275.95 105.55L 275.4 105.55 275.4 109.65 281.5 109.65 281.5 131.35 287.75 131.35M 219.45 34.55Q 217.05 32.65 212.9 32.65 208.65 32.65 206.25 34.55 203.8 36.55 203.8 41.05 203.8 41.85 204.05 42.8 204.3 43.75 204.8 44.55 205.3 45.35 206.15 46.05 207 46.65 208.25 47L 208.25 47.05Q 205.65 47.55 204.35 49.7 203.1 51.75 203.1 54.65 203.1 56 203.35 57.6 203.7 59.2 204.75 60.55 205.8 62 207.7 62.9 209.65 63.8 212.9 63.8 216.1 63.8 218 62.9 219.95 62 221 60.55 222 59.2 222.35 57.6 222.65 56 222.65 54.65 222.65 51.75 221.35 49.7 220.05 47.55 217.45 47.05L 217.45 47Q 218.65 46.65 219.5 46.05 220.35 45.35 220.85 44.55 221.4 43.75 221.65 42.8 221.9 41.85 221.9 41.05 221.9 36.55 219.45 34.55M 210.65 44.15Q 209.85 43.1 209.85 40.9 209.85 36.75 212.9 36.75 215.9 36.75 215.9 40.9 215.9 43.1 215.05 44.15 214.25 45.15 212.9 45.15 211.45 45.15 210.65 44.15M 214.6 49.7Q 215.3 50.05 215.7 50.8 216.15 51.55 216.25 52.45 216.4 53.45 216.4 54.6 216.4 55.65 216.25 56.65 216.15 57.6 215.7 58.3 215.3 59.05 214.6 59.45 213.9 59.9 212.9 59.9 211.8 59.9 211.1 59.45 210.45 59.05 210.05 58.3 209.6 57.6 209.45 56.65 209.3 55.65 209.3 54.6 209.3 53.45 209.45 52.45 209.6 51.55 210.05 50.8 210.45 50.05 211.1 49.7 211.8 49.3 212.9 49.3 213.9 49.3 214.6 49.7 Z"></path></g><path id="AWL3_STROKES" stroke="#333333" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" fill="none" d="M 161.05 1.55Q 227.25 1.55 273.9 48.2L 273.95 48.35Q 320.7 95 320.7 161.2 320.7 227.4 273.9 274.05 227.25 320.85 161.05 320.85 94.95 320.85 48.2 274.1L 48.05 274.05Q 1.4 227.4 1.4 161.2 1.4 95 48.05 48.2 94.95 1.55 161.05 1.55L 161.05 161.2 273.95 48.35M 1.4 161.2L 161.05 161.2 48.05 48.2M 161.05 320.85L 161.05 161.2 48.2 274.1M 320.7 161.2L 161.05 161.2 273.9 274.05"></path></defs><g transform="matrix( 1, 0, 0, 1, 0,0) "><use xlink:href="#AWL3"></use><use xlink:href="#AWL3_STROKES"></use></g></svg></div>
                <input type="radio" name="1"  value="0">6<br>
                <input type="radio" name="1" value="0" >11<br>
                <input type="radio" name="1"  value="0">9<br>
                <input type="radio" name="1"  value="12">13<br>
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