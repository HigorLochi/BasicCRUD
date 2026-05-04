<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="views/assets/css/main.css" />
	</head>
	<body class="is-preload">
        <div id="wrapper">
            <div id="main">
                <div class="inner">
                    <header id="header">
                        <a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
                    </header>
                    <section>
                        <?= $contents; ?>
                    </section>
                </div>
            </div>

            <div id="sidebar">
                <div class="inner">
                    <nav id="menu">
                        <header class="major">
                            <h2>Menu</h2>
                        </header>
                        <ul>
                            <li>
                                <a href="index.php?<?= http_build_query(['controller' => 'user', 'action' => 'list']) ?>">User List</a>
                            </li>
                            <li>
                                <a href="index.php?<?= http_build_query(['controller' => 'user', 'action' => 'insert']) ?>">User Form</a>
                            </li>
                            <li>
                                <a>To Be Continued</a>
                            </li>
                        </ul>
                    </nav>

                    <footer id="footer">
                        <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </footer>
                </div>
            </div>
        </div>

        <script src="views/assets/js/jquery.min.js"></script>
        <script src="views/assets/js/browser.min.js"></script>
        <script src="views/assets/js/breakpoints.min.js"></script>
        <script src="views/assets/js/util.js"></script>
        <script src="views/assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</body>
</html>