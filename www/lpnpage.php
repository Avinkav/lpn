<?php

	$nospam_pagetype = array("html", "website");

	if (isset($_GET["pagetype"]) 
	    && in_array($_GET["pagetype"], $nospam_pagetype)) 
	{
		$pagetype = $_GET["pagetype"];
	}
	else {			
		$pagetype = "website";
	}

	$nospam_pageid = array("bibtex_french", "bibtex", "contact", "errata", "french", "handheld", "implementations", "index", "links", "lpnpage", "lpnpage", "manuals", "navbar", "online", "teaching", "thanks", "toc", "top", "lpn-html");

	if (isset($_GET["pageid"])
            && (in_array($_GET["pageid"], $nospam_pageid)
	        ||
                preg_match("/^lpn-html(ch|se|li)\d*$/", $_GET["pageid"])))
	{
		$pageid = $_GET["pageid"];
	}
	else {
		$pageid = "top";
		$pagetype = "website";
	}

?>


<!-- HEADER -->
<html lang="en">
  <head>

  <title>Learn Prolog Now!</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
  crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet" type="text/css">

  </head>

  <body>
  <div class="header-spacer">
  <nav class="header navbar-expand-sm navbar navbar-light">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <a href="index.php" class="navbar-brand"><h1 class="display-1">Learn Prolog Now!</h1></a>
    </div>
  </nav>
  <div class="subheader navbar  navbar-expand-sm navbar-dark d-flex align-items-center flex-row-reverse">
    <div class="collapse navbar-collapse">
      <ul class="ml-auto navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://www.loria.fr/~blackbur/">Patrick Blackburn</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="http://www.let.rug.nl/bos/">Johan Bos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://cs.union.edu/~striegnk/">Kristina Striegnitz</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="portal-container container-fluid">
    <div class="row">
        <!-- NAVIGATION BAR -->
      <div class="col-sm-2 pt-3 sidebar">
      <?php

        include "navbar.php";	

        make_navmenu($pageid);
        ?>
      </div>
      <!-- MAIN CONTENT -->
      <div class="col-sm-10 content pt-3">
          <?php
            if ($pagetype == "website")
                include $pageid.".php";
            else	
                  include "html/".$pageid.".html";
            ?>
      </div>
    </div>
  </div>
<!-- FOOTER -->
<div class="mx-3">
<div class="footer container-fluid">
  <div class="container py-1 d-flex align-items-baseline">
  <div class="tracker mr-3">
    <div id="eXTReMe"><a href="http://extremetracking.com/open?login=lpntwo">
      <img src="http://t1.extreme-dm.com/i.gif" style="border: 0;"
      height="38" width="41" id="EXim" alt="eXTReMe Tracker" /></a>
      <script type="text/javascript"><!--
          var EXlogin='lpntwo' // Login
          var EXvsrv='s11' // VServer
          EXs=screen;EXw=EXs.width;navigator.appName!="Netscape"?
          EXb=EXs.colorDepth:EXb=EXs.pixelDepth;
          navigator.javaEnabled()==1?EXjv="y":EXjv="n";
          EXd=document;EXw?"":EXw="na";EXb?"":EXb="na";
          EXd.write("<img src=http://e2.extreme-dm.com",
          "/"+EXvsrv+".g?login="+EXlogin+"&amp;",
          "jv="+EXjv+"&amp;j=y&amp;srw="+EXw+"&amp;srb="+EXb+"&amp;",
          "l="+escape(EXd.referrer)+" height=1 width=1>");//-->
      </script>
      <noscript>
        <div id="neXTReMe"><img height="1" width="1" alt=""
      src="http://e2.extreme-dm.com/s11.g?login=lpntwo&amp;j=n&amp;jv=n" />
      </div>
      </noscript>
    </div>
  </div>
    &copy 2006-2018 
    <nav class="nav">
    <a class="nav-link" href="http://www.patrickblackburn.org/">Patrick Blackburn</a> 
    <a class="nav-link" href="http://www.let.rug.nl/bos/">Johan Bos</a> 
    <a class="nav-link" href="http://cs.union.edu/~striegnk/">Kristina Striegnitz</a>
    </nav>
</div>
</div>
</div>
</body>
</html>
