<!doctype html>  

<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>MC Studios</title>
  <meta name="description" content="MC Studios">
  <meta name="author" content="Mark Philpot">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fonts/daniel/stylesheet.css">

</head>

<body>
  <div id="container">
  <div id="header">
  <div id="logo" class="filter cursor"></div>

  <div id="top_menu">
    <a id="photography_link" href="#">photography</a>
    <a id="design_link" href="#">design & dev</a>
    <a id="studio_link" href="#">studio</a>
    <a id="about_link" href="#">about</a>
  </div>

  <div id="bottom_menu"></div>

  </div> <!-- end header -->

  <div id="left"></div>
  <div id="left2"></div>
  <div id="right"></div>

  <div id="main_container">
    <div id="main"></div>
    <div class="spacer">&nbsp;</div>
  </div>

  <div id="footer">

  <div id="copyright">
  &#169; MC Studios 1998-2010<br /><br />
  <div id="site_links"></div>
  </div>

  </div> <!-- end footer -->
  </div> <!-- end container -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

  <script type="text/javascript">
    $(function(){
    
      $.get("/ax/main.php?loc=index", function(data){
	$("#main").html(data);
      });
    
      $("#logo").click(function(){
	$.get("/ax/main.php?loc=index", function(data){
	  $("#main").html(data);
	});
      });
    
      $("#photography_link").click(function(){
	$.get("/ax/bottom_menu.php?loc=photography", function(data){
	  $("#bottom_menu").html(data);
	});
	$.get("/ax/main.php?loc=photography", function(data){
	  $("#main").html(data);
	});
      });
    });
  </script>

  <script type="text/javascript">
   var _gaq = [['_setAccount', 'UA-9149255-1'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>

</body>
</html>
