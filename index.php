<!doctype html>
<html lang=en>
<head>
<meta charset="utf-8" />
<meta name="verify-v1" content="91yIG+EaOdwKuPX+R9ChHEWVXJ6wdQsq0gqD1c1sbaY="/>
<title>Irtaza Ali, Resume- Computer Science</title>
<style type="text/css">
body{font-family:Geneva, Arial, Helvetica, sans-serif;font-size:12px;font-weight:normal;color:#000000;text-align:center;margin:0;padding:0;line-height:1.5em;}
header, section, article{display:block;}
header{text-align:center;position:relative;z-index:1;}
section{margin:20px 0 10px;padding:0;}
p{margin-top:0;padding:0;}
ul, ol{margin:10px 0 0;padding:0;}
h1{margin:5px;font-size:2em;font-weight:bold;}
h2{font-size:1.4em;font-style:italic;font-weight:bold;margin:5px 0;}
h5{margin:20px 0 10px;font-size:1.2em;font-weight:bold;}
a, a:link, a:visited{border:medium none;text-decoration:none;color:#009;cursor:pointer;}
#resumecontainer{background-color:#F6F6F6;text-align:left;padding:20px;margin:20px auto;min-width:300px;max-width:600px;position:relative;}
header p{margin:5px;}
#links img{border:0 none;}
.skills{margin:10px 10px;}
.project{margin:10px 0 20px 10px;}
section > p, section > article{margin:5px 0 0 10px;}
#skills_section{position:relative;z-index:0;}
#body_popup{position:absolute;left:0;top:0;z-index:1000;display:none;background-color:#FFFFFF;border:1px solid #000;padding:20px;min-width:300px;max-width:440px;text-align:left;}
a:hover{text-decoration:none;color:#03F;}
.close{display:block;float:right;}
li{margin-left:5px;list-style-position:inside;list-style-type:circle;padding-left:0}
ol > li{list-style-position:inside;list-style-type:decimal;margin-bottom:10px;margin-left:0;}
#links{position:absolute;top:0;right:0;width:60px;}
.formats{display:inline-block;height:16px;width:16px;background:url(img/links.png) no-repeat;}
#doc{background-position:0 0;}
#txt{background-position:0 -52px;}
#pdf{background-position:0 -26px;}
.indent{margin-left:20px;}
@media only screen and (max-device-width: 480px) {
body{font-size:18px;}
#resumecontainer{padding:20px;margin:20px;max-width:1000px;}	
#body_popup{max-width:1000px;}
}
</style>
<script type="text/javascript">
(function(){
  function loadScript(url, callback){  //lifted from Nick Zakas
    var script = document.createElement("script")
    script.type = "text/javascript";
    if (script.readyState){  //IE
      script.onreadystatechange = function(){
        if (script.readyState == "loaded" ||
          script.readyState == "complete"){
          script.onreadystatechange = null;
          callback();
        }
      };
    }else{  //Others
      script.onload = function(){
        callback();
      };
    }
    script.src = url;
    document.body.appendChild(script);
  }
  //libraries to load after document.load event
  function afterLoad() {
	loadScript("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", afterJQLoad);
	loadScript("http://www.google-analytics.com/ga.js", googleCrap);
  }
  //stuff to do after jQuery is loaded
  function afterJQLoad(){
    var details = '',
      coords = {left:'0px', top:'0px'},
      close = function(){
        details = '';
        $("#body_popup > div.temp").remove();
	    $("#body_popup").css({left:'0px', top:'0px'}).hide();
      };
    $(".details, .notice").click(function(e){  
      var $target = $(this),
	    coords = {left:'10px', top:e.pageY + 'px'};
	  if(details !== ''){ 
	    close();
	  }
	  details = $(this.rel).html();
	  var id = ($target.hasClass("details")) ? "#skills_popup" : "#notice_popup";
	  $("#body_popup").append(details).css(coords).show();
    });
    $(".close").click(function(){
	  close();
    });
    $(".external").on('click', function(){
      var url = this.rel;
      window.open(url);
      return;
    }); 
  }
  function googleCrap(){
    try {
      var pageTracker = _gat._getTracker("UA-8130141-1");
      pageTracker._trackPageview();
    }catch(err){}  
  }
  
  if (window.addEventListener){
    window.addEventListener("load", afterLoad, false);
  }else if (window.attachEvent){
    window.attachEvent("onload", afterLoad);
  } else {
    window.onload = afterLoad;
  }
})();
</script>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div id="links">
  <a class="formats" id="pdf" href="dshapiro.pdf"></a>
  <!--<a class="formats" id="doc" href="dshapiro.doc"></a>-->
  <!--<a class="formats" id="txt" href="dshapiro.txt"></a>-->
</div>

<div id="resumecontainer">

<header>
<h1>Irtaza Ali</h1>
<p><a href="mailto:ira5@njit.edu</a></p>
<p><a href="https://github.com/IrtazaALI1/">https://github.com/IrtazaALI1</a></p>

<p><strong>Web Developer Resume &amp; Portfolio</strong></p>
<p><em><a rel="#notice" class="proj_link notice">Notice to 3rd Party Recruiters (Please Read)</a></em></p>
</header>

<section>
<h2>Objective</h2>
<p>Seeking challenging opportunities in <em><strong>Computer Science / Information Technology</strong></em> within a 25 statute mile radius of Jersey City, NJ, 07307.</p>
</section>

<section>
<h2>Summary</h2>
<p>in front &amp; backend web development, database design, integration, 
implementation, software development, network</p>
</section>

<section>
<h2>Education</h2>
<p><strong>William. L. Dickinson HS</strong>, ComputerScience</p>
<p><strong>Hudson County Community College College</strong>, Computer Science, 3.0 GPA</p>

</div>
</body>
</html>