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
<p>Seeking challenging opportunities in <em><strong>front-end web development / UI architecture</strong></em> within a 25 statute mile radius of Mountain View, CA 94043.</p>
</section>

<section>
<h2>Summary</h2>
<p>in front &amp; backend web development, database design, integration, 
implementation, software development, network</p>
</section>

<section>
<h2>Skills</h2>
<article class="skills">
<strong>Expert / Advanced</strong>
<p>OO Javascript, jQuery, Backbone.js, Underscore.js, Require.js, xhtml, AJAX / JSON, CSS 2.1/3, Client debugging / optimization tools and techniques- Firebug, YSlow, JSLint, JSMin, Cake PHP, Dreamweaver, Aptana IDE, Netbeans IDE, MVC design, semantic markup, Document Object Model <a href="https://gist.github.com/2396079" target="_blank">(code sample)</a></p>
</article>

<article class="skills">
<strong>Competent</strong>
<p>REST, Git, Cross browser compatability, Dojo, Object Oriented PHP, Drupal CMS, MySQL, Java, J2EE, JPA, Struts 2, Webwork, Spring, Hibernate, Tomcat, Apache, SSL, JSP, A12Y, I18N, Photoshop, Acrobat, Zend Server, Linux / Unix shell, Windows, HTML 5 <a href="https://gist.github.com/2372741" target="_blank">(code sample)</a></p>
</article>

<article class="skills"><strong>Moderate Exposure</strong> <p>SCSS, Zend Framework, social media platforms &amp; integration, Web Services (WSDL/SOAP), Ant, 
 JSF, JBOSS, Glassfish, EJB, JMS, Velocity, Perl, Subversion SVN, CVS, Eclipse IDE</p>
</article> 
</section>

<section id="skills_section">
<h2>Clients &amp; Project Portfolio</h2>

<li>Web Application development and maintenance- presentation layer and client code</li>
<li>Javascript, Java, JSP, Struts, CVS</li>
</ul>
</article>

<article class="project">
  <a class="proj_link external" rel="http://www.rebuildingtogetherpeninsula.org">
  <strong>Rebuilding Together Peninsula</strong></a> 
  <strong class="indent">Web Developer - Pro Bono</strong>
  <em class="indent">2005 - 2007</em>
<ul>
<li>Implemented complete site redesign</li>
<li>HTML, CSS, JavaScript, PHP</li>
</ul>
</article>

<section>
<h2>Education</h2>
<p><strong>William. L. Dickinson HS</strong>, ComputerScience</p>
<p><strong>Hudson County Community College College</strong>, Computer Science, 3.0 GPA</p>


<br/><br/>
Implementations
</p>
<ul>
<li>Cake PHP framework configuration and custom extensions for MVC server-side logic</li>
<li>MySQL configuration as attached data-store for above</li>
<li>jQuery implementation for DHTML, AJAX form submits, validation, and image manipulation</li>
<li>Internationalization (I18N), SSL</li>
</ul>
</div>
</article>

<article id="mcc" class="skills">
<div class="temp">
<h5><a class="proj_link external" rel="http://www.conservationcorpsnorthbay.org/">Conservation Corps North Bay</a></h5>
<p>
Organizational needs<br/><br/>  
Site redesign to project a more professional appearance to the donor community. Interactive capabilities for applicants, volunteers, donors, and community members to submit information electronically and reduce paper usage.  Content management features to allow non-technical staff to add, delete, and update dynamic content. Multi-language capability for Spanish speaking corps members.
<br/><br/>
Implementations:
</p>
<ul>
<li>Extensive Drupal CMS customization and configuration to meet rapidly changing needs</li>
<li>Complete custom Drupal theming to maintain current design</li>
<li>Interoperability with legacy java based features<br/><br/></li>

<li>Version 1.0 (released March, 2009)</li>
<li>Custom CMS, data capture, and administrative application business logic implemented with Java / Struts 2 framework with Spring</li>
<li>Model layer implemented with Hibernate / JPA, Spring / JTA, and MySQL for O/R mapping</li>
<li>Model layer architected to utilize DAO, DTO, Entity Session design patterns</li>
<li>View layer components include JSP, Freemarker, OGNL, Struts Tags</li>
<li>View layer extensions include custom tag library to support Dojo 1.0+</li>
<li>Client code implemented with XHTML, CSS, Javascript</li>
<li>Extensive Dojo implementation for off-the-shelf widgets and custom form widgets, dynamic content display widgets</li>
<li>Extensive cross browser compatibility testing</li>
<li>SEO and Google Search integration</li>
</ul>
</div>
</article>

<article id="ypaa" class="skills">
<div class="temp">
<h5><a class="proj_link external" rel="http://www.sopypaa.org/">Bay Area Young People in AA</a></h5>
<p>
Organizational needs<br/><br/>

Simple to view website that is mobile friendly and displays as much information as possible with a single page load.  Custom CMS features that are easy to learn and use for an organization with frequent turnover.
<br /><br />
Implementations
</p>
<ul>
<li>PHP / Cake PHP framework configuration and custom extensions for MVC server-side logic</li>
<li>MySQL configuration as attached datastore for above</li>
<li>jQuery implementation for DHTML, AJAX form submits, content scrolling and overlay</li>
</ul>
</div>
</article>

<article id="notice" class="skills">
<div class="temp">
<h5>Notice to 3rd Party Recruiters</h5>
<p>
Dear Unsolicited Recruiters:
<br/><br/>
I am happy to work with those representing legitimate companies at fair rates.  
<ol>
<li>I do not deal with off-shore companies under any circumstances. You will be marked as spam.</li>
<li>I only consider opportunities local to my current address- Jersey City, NJ.  Send me an out of state listing. I mark you as spam.</li>
<li>Send a DETAILED JOB DESCRIPTION in the FIRST email including the EXACT CITY where the organization is located.  I do not respond to emails where you only state in your opinion that you have a great job opportunity and want to chat further.  It&rsquo;s a waste of my time and I mark you as a spammer. </li>
<li>The job listing better be REAL. If it is not, you are marked as spam.</li>
<li>DO NOT claim to represent a company unless you have done previous business with them- meaning you have successfully placed other candidates there, and DO NOT claim to be representing me to any organization unless all the terms in this list are agreed to and abided by.  I will make an extra effort to notify the principle organization of your fraudulent efforts.</li>
<li>If you send me a listing, and I respond with interest, if I don't hear back from you, I mark you as spam.</li>
<li>If you have a &quot;fast growing start-up&quot; I am not interested unless it is for an hourly contract rate.  I have ended up working for free too many times, and I will not do it again. Again, you are marked as spam.</li>
<li>I will however, consider being part of an initial founding start-up team if the idea is clearly viable. I perform due diligence. Be prepared to provide the necessary information.</li>
<li>I will not provide reference contact information until interviews have been conducted with the hiring manager AND interest from both sides has been expressed.</li>
<li>I require a phone screen with the hiring manager before I will agree to an on-site interview.</li>
<li>I will not spend more than 5 minutes creating special presentations, filling out questionnaires or taking tests.</li>
</ol>
</div>
</article>

</section>

<div id="body_popup">
<a class="close">[X] Close</a>
</div>

</div>
</body>
</html>