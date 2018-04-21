<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Place your page description here." />
<meta name="keywords" content="put,your,key words,phrases,here" />
<meta name="author" content="Your Name / Design by: First Light Web Design - http://www.firstlightwebdesign.com/" /><title>Leonardo</title>

<link rel="stylesheet" href="http://mvcproject/MVCProject/views/style/style.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="header"><img id="logo" style="width: 65px; height: 100px;" alt="Your Logo" src="http://mvcproject/MVCProject/views/style/images/logo.jpg"/>
<!--Add your site name and slogan here.-->
<h1>MVC Project</h1>
<h2>Using news and weather APIs </h2>
</div>
<!--Begin main navigation menu.-->
<div id="menu">
<ul>
<li><a  class="first" href="http://mvcproject/MVCProject/">Home</a></li>
<li><a id="selected" >News</a></li>
<li><a href="http://mvcproject/MVCProject/weather">Weather</a></li>
<li><a class="last" href="#">Links</a></li>
</ul>
</div>
<!--End main navigation menu.-->
<!--Leave the following division empty.-->
<div class="divider"></div>
    <div id="rightcolumn">
        <h5><span class="date">18 April 2018</span>Headline</h5>
        <p class="justify">Nihil cum amicitia possum comparare; di
            hominibus nihil melius dant. Pecuniam alii malunt alii corpora sana
            alii famam.<br />
            <a href="#">Learn more . . .</a></p>

        <h6>Featured</h6>
        <p class="featured">Tu autem cum orabis, intra in
            cubiculum tuum et, clauso ostio tuo, ora Patrem tuum in abscondito; et
            Pater tuus qui videt in abscondito reddet tibi . . . Sic ergo vos
            orabitis: Pater noster qui es in caelis, sanctificetur nomen tuum;
            adveniat regnum tuum; fiat voluntas tua sicut in caelo et in terra.
            Venit iam magna aetas nova; de caelo mittitur puer, qui vitam deorum
            habebit deosque videbit et ipse videbitur ab allis.</p>
    </div>
<!--Place your main content within the following division-->
<?php foreach ($newsList as $item):?>
<div id="leftcolumn">
<div class="divider2">
</div>
    <h4><span class="date"><?=$item['publishedAt'];?></span><a href="http://mvcproject/MVCProject/news/<?=$item['id'];?>"><?=$item['title'];?></a></h4>
<p class="justify"><img class="right" style="width: 131px; height: 131px;" alt="Leonardo da Vinci's Vitruvian Man" src="<?=$item['urlToImage'];?>" />
<?=$item['description'];?>
</p>
</div>
    <?php endforeach; ?>
    <!--Place additional secondary content in the next division.-->

<!--The following division should remain empty.-->
<div class="divider"></div>
<div id="footer">
<p>Copyright © 2018 MVCProject. All rights reserved. Design by <a href="http://www.firstlightwebdesign.com">First Light</a>.</p>
</div>
</div>
<div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
Design downloaded from <a href="http://www.freewebtemplates.com/">Free
Templates</a> - your source for free web templates<br />
Supported by <a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a>
</div>
</body></html>