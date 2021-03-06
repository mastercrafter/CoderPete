<!DOCTYPE html>
<html>
    <head>
		<title>Coder Pete</title>
		<link rel="shortcut icon" href="images/Pete.gif" type="img/gif" />
        <link href="style.css" type="text/css" rel="stylesheet" />
        <script>
            var currentImg = 0;
            function setNavPete() {
                if (currentImg == 1) {
                    document.getElementById("nav-pete").src = "images/pete.svg";
                    currentImg = 0;
                } else {
                    document.getElementById("nav-pete").src = "images/petra.svg";
                    currentImg = 1;
                }
            }
            window.onload = setNavPete();
        </script>
    </head>
    <!-- Use "position: absolute;" for all elements -->
    <body>
        <div id="left-container" onmouseover="setNavPete()">
            <!-- Anything that needs to be in the navigation window goes here -->
            <img id="nav-pete" />
            <div id="nav-container">
                <ul class="vertical-nav">
                    <!-- Use the class "vertical-nav-a" to highlight the current page -->
                    <li><a class="vertical-nav" href="index.html">Home</a></li>
                    <li><a class="vertical-nav" href="classes.html">Classes</a></li>
                    <li><a class="vertical-nav" href="#">Guidelines</a></li>
                    <li><a class="vertical-nav-a" href="planbook.html">Planbook</a></li>
                    <li><a class="vertical-nav" href="#">Contact</a></li>
                    <a href="http://sdm.sisk12.com/oz" target="_blank"><img id="parent-portal-logo" src="images/parent-portal.gif" /></a>
                    <a href="http://planbook.com/planbook.html?t=911676&k=stollclass&y=0&c=0" target="_blank"><img id="planbook-logo" src="images/planbook.png" /></a>
                    <a href="http://ozark.k12.mo.us/Domain/14" target="_blank"><img id="district-logo" src="images/ozark-district-logo.png" /></a>
                </ul>
            </div>
        </div>
		<div id="main-container">
            <!-- Main content goes here -->
            <img id="banner" src="images/Banner.gif" />
            <iframe id="planbook" frameBorder="0" src="http://planbook.com/planbook.html?t=911676&k=stollclass&y=0&c=0"></iframe>
		</div>
    </body>
</html>