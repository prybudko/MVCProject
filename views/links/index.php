<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="This site will help keep track of the latest news and weather changes in cities."/>
    <meta name="keywords" content="mvc,api,weather,news,maps"/>
    <meta name="author" content="Prybudko / Design by: First Light Web Design - http://www.firstlightwebdesign.com/"/>
    <title>MVCProject</title>
    <link rel="stylesheet" href="http://mvcproject/MVCProject/views/style/style.css" type="text/css"/>
</head>

<body>
<div id="container">
    <div id="header"><img id="logo" style="width: 65px; height: 100px;" alt="Your Logo"
                          src="http://mvcproject/MVCProject/views/style/images/logo.jpg"/>
        <!--Add your site name and slogan here.-->
        <h1>MVC Project</h1>
        <h2>Using news and weather APIs </h2>
    </div>
    <!--Begin main navigation menu.-->
    <div id="menu">
        <ul>
            <li><a class="first" href="http://mvcproject/MVCProject/">Home</a></li>
            <li><a href="http://mvcproject/MVCProject/news">News</a></li>
            <li><a href="http://mvcproject/MVCProject/weather">Weather</a></li>
            <li><a id="selected" class="last">Links</a></li>
        </ul>
    </div>
    <!--End main navigation menu.-->
    <!--Leave the following division empty.-->
    <div class="divider"></div>
    <div id="rightcolumn">
        <h5><span class="date">18 April 2018</span>Headline</h5>
        <p class="justify">In computer programming, an application programming interface (API) is a set of subroutine
            definitions, protocols, and tools for building application software. <br/>
            <a target="_blank" href="https://www.mulesoft.com/resources/api/what-is-an-api">Learn more . . .</a></p>

        <h6>MVC concept</h6>
        <p class="featured">Model–view–controller (MVC) - is an architectural pattern commonly used for developing user
            interfaces that divides an application into three interconnected parts. This is done to separate internal
            representations of information from the ways information is presented to and accepted from the user.[1][2]
            The MVC design pattern decouples these major components allowing for efficient code reuse and parallel
            development.</p>
    </div>
    <!--Place your main content within the following division-->
    <div>
        <p class="home">The following APIs were used in this project:
        <ul class="home">
            <li><a target="_blank" href="https://newsapi.org/">News API</a></li>
            <li><a target="_blank" href="https://developers.google.com/maps/?hl=ru">Google Maps API</a></li>
            <li><a target="_blank" href="https://darksky.net/dev">Dark Sky API</a></li>
        </ul>
        </p>
        <p class="home">Also you can see the source code of the project
            <a target="_blank" href="https://github.com/prybudko/MVCProject">here</a>.</p>
    </div>
    <!--Place additional secondary content in the next division.-->

    <!--The following division should remain empty.-->
    <div class="divider"></div>
    <div id="footer">
        <p>Copyright © 2018 MVCProject. All rights reserved. Design by First
                Light.</p>
    </div>
</div>
<div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
    Design downloaded from <a target="_blank" href="http://www.freewebtemplates.com/">Free
        Templates</a> - your source for free web templates<br/>
    Supported by <a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a>
</div>
</body>
</html>