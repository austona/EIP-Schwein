<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="de">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>EIP Projekt der OPG Schwein</title>
<meta name="description" content="Homepage des EIP Projekts der PG Schwein">
<meta name="author" content="Anton Benz, Anja Krepart">
<meta name = "keywords" content = "EIP, Schwein, OPG, Projekt">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="css/base_1.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/screen_1.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--================================================== --> 
<!-- Scripts ==================================================
================================================== --> 

<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</head>
<body>

<!-- Home - Content Part ==================================================
================================================== -->

<!-- Home - Content Part ==================================================================================================== -->

  <div id="header" >
  <div class="container" style = "width: 90%;"> 
  <!-- <div class="container header"> -->
    <!-- Header | Logo, Menu
		================================================== -->
    <header>
      <div class="logo"><a target="_blank" href="https://www.netzwerk-laendlicher-raum.de/themen/eip-agri/"><img src="images/eip_logo_trans.png"  alt=""/></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="index.html" id="visited"><span class="home"><img src="images/home.png" alt="" /></span>HOME</a></li>
			 <li><a href="#"><span class="home"><img src="images/farm.png" alt="" /></span>BAUPROJEKTE</a>
              <ul>
                <li><a href="mastbetriebe.html">Maststall</a></li>
				<li><a href="mastbetriebe.html">Ferkelaufzucht</a></li>
				<li><a href="gallery.html">Abferkelställe</a></li>
				<li><a href="gallery.html">Wartesauen/<br>Deckzentrum</a></li>
				<li><a href="gallery.html">Andere</a></li>
              </ul>
            </li>
           <li><a href="innovative_maßnahmen.html"><span class="home"><img src="images/idea.png" alt="" /></span>INNOVATIVE MAßNAHMEN</a>
			<ul>
                <li><a href="tierwohl.php">Tierwohl/<br>Beschäftigung/<br>Fütterung</a></li>
				<li><a href="betriebssichere_funktionsbereiche.php">Schaffung<br>betrieblicher<br>Funktionsbereiche</a></li>
				<li><a href="oeffentlichkeitsarbeit.php">Öffentlichkeitsarbeit/<br>Verbraucherakzeptanz</a></li>
				<li><a href="ressourcenschonung.php">Reduktion von<br>Emmissionen</a></li>
              </ul>
			  </li>
           <li><a href="features.html"><span class="home"><img src="images/info.png" alt="" /></span>FÜR DEN VERBRAUCHER</a></li>
            <li><a href="blog.html"><span class="home"><img src="images/blog.png" alt="" /></span>NEWS</a>
           </li>
            
            <li><a href="contact.html"><span class="home"><img src="images/contact.png" alt="" /></span>KONTAKT</a>
			 <ul>
			  <li><a href = "">Kontaktformular</a></li>
			  <li><a href = ""> Ihr Ansprechpartner</li>
			 </ul>
			</li>
			
          </ul>
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Home</option>
            <option value="about.html">Über uns</option>
            <option value="portfolio.html">Bauprojekte</option>
            <option value="gallery.html">Portfolio Gallery</option>
            <option value="blog.html">News</option>
            <option value="singleblog.html">Single Post</option>
            <option value="features.html">FAQs</option>
            <option value="contact.html">Kontakt</option>
          </select>
        </form>
      </div>
    </header>
  </div>
</div>



<div id = "main" style = "background: #ddf6d0;">

<div> 
<a href = "#main"><img id = "goToTop"  src = "images/top.png" alt = ""/></a>
<a  href = "#contactForm"><img id = "goToComments" src = "images/comments.png" alt = "" /> </a>
</div>
<div class = "container">
<div class = "blankSeparator"> </div>
<div class = "blankSeparator"> </div>
<!-- <div class = "sepContainer"> </div> -->
<h1> Modellbetrieb 1 </h1>
<div class = "sepContainer"> </div>
<!-- Home Content Part - Slider ==================================================
================================================== -->

<!-- <div class="flexslider"> -->
  <ul>
    <li> 
	<div class = "imageCaptionCombination">
	<h2>Konzept</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_1.jpg" alt=""/></a> 
	 <div class="imageCaption" style="overflow-x:auto;">
	 <table>
	 <tr> 
		<th>Stallkonzept</th>
		<th>Nutzung im Modellbetrieb</th>
	</tr>
	<tr>
		<td>Planbefestigter Liegebereich mit Deckel im Stallinneren  </td>
		
		<td>500 Tiere je Stall</td>
	</tr>
	<tr>
		<td>Perforierter Boden im Fressbereich innen</td>
		
		<td>16 Tiere je Bucht</td>
	</tr>
	<tr>
		<td>Perforierter Aktivitätsbereich außen</td>
		
		<td>Platzangebot: 1,67 m<sup>2</sup> je Mastschwein (0,67 m<sup>2</sup> außen + 1 m<sup>2</sup>)
		</td>
	</tr>
	<tr>
		<td>Querlüftung</td>
		
		<td>Vermarktung: Konventionell, zum Teil über regionalen Metzger</td>
	</tr>
	<tr>
		<td>4 Klimazonen</td>
	</tr>
	
</table>
</div>
</div>
	</li>
	
    <li> 
	
	<div class = "imageCaptionCombination">
	<h2>Fußbodenheizung</h2>
	<img src="images/modellbetrieb_1/modellbetrieb_1_2.jpg" alt="" />
	<div class = "imageCaption">
	<p> 
	Die Fußbodenheizung soll die Akzeptanz dieser Fläche als Ruhe- und Liegebereich 
	 fördern und dadurch das Koten der Tiere in diesem Bereich  verhindern. Durch  die längliche Gestaltung der Liegefläche und der Fußbodenheizung 
	 können zudem zwei Klimabereiche in der Kiste geschaffen werden. Den hinteren wärmeren Bereich, unter dem sich der Vorlauf der Fußbodenheizung
	 befindet, und der vordere Bereich, der durch den Rücklauf der Fußbodenheizung nur leicht angewärmt wir. Durch diese Wahlmöglichkeit  soll den 
	 Tieren stets ein in Größe und Klima optimal angepasster Liegebereich zur Verfügung stehen.
	</p>
	</div>
	<div>
	</div>
	</li>
	
    <li>
	<div class = "imageCaptionCombination">
	<h2>Kistengestaltung</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_3.jpg" alt="" /></a>
     <div class = "imageCaption">
	<p> 
	Im Deckel der Liegekiste befinden sich Lüftungsöffnungen die je nach Bedarf mit einem Schieber geöffnet werden können, 
	sodass Schadgase und Feuchtigkeit entweichen können. Ein Windschutz unter den Schiebern verhindert zu hohen Lichteinfall und Zugluft,
	sodass der Liegebereich trotz geöffneter Lüftungsöffnung als Liegefläche attraktiv bleibt.</p>
	</div>
	</div>
    </li>
	<li>
	<div class = "imageCaptionCombination">
	<h2>Arbeitswirtschaftliches Einstreuen durch mechanisierte Einstreuvorlage</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_4.png" alt="" /></a>
     <div class = "imageCaption">
	
	<p> 
	Der Kontrollgang wird mit einer Schiene versehen an der ein, mit einem Strohballen bestückter Korb entlanggeführt werden kann. 
	#Dieser Korb kann über die gesamte Stalllänge hinweggeschoben werden, sodass jede Bucht individuell mit Einstreu versorgt werden kann.
	Die Einstreuvorrichtung wird am Ende des Kontrollganges von außen per Radlader mit Strohballen beladen.
	Dies soll den Arbeitsaufwand des Einstreuens erheblich senken (Ressourcenschonung) und ermöglicht tägliches Einstreuen je nach Bedarf.
	Wodurch wiederum sichergestellt wird, dass der Liegebereich trocken bleibt und als solcher von den Tieren angenommen wird
	(Schaffung von Funktionsbereichen). </p>
	</div>
	</div>
    </li>
	<li> 
	<div class = "imageCaptionCombination">
	<h2>Querlüftung (geschlossen)</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_5.png" alt="" /></a>
     <div class = "imageCaption">
	
	<p> 
	An der Außenwand sowie zwischen Fütterungs- und Außenbereich des Stallgebäudes sind Lüftungsklappen installiert, 
	sodass eine Querlüftung stattfinden kann. Die Steuerung der Lüftungsklappen kann manuell nach Bedarf oder automatisch über 
	eine Temperaturregelung erfolgen. Dadurch kann auf Ventilatoren verzichtet werden und Energie eingespart werden. </p>
	</div>
	</div>
    </li>

	<li> 
	<div class = "imageCaptionCombination">
	<h2>Querlüftung (geöffnet)</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_6.png" alt="" /></a>
	</div>
	</li>
	
	<li> 
	<div class = "imageCaptionCombination">
	<h2>Ressourcenschonendes Baumaterial</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_7.png" alt="" /></a>
     <div class = "imageCaption">
	<p> 
	Eine Holzdecke mit Schüttung zur Dämmung und verbesserter Feuchtigkeitsaufnahme sowie eine Ziegeleindeckung vorgesehen. 
	Diese soll zudem Vorteile durch einen geringeren Rückzugsraum für Schädlinge bieten. Durch die Gestaltung des Daches werden 
	außerdem positive Effekte hinsichtlich des Stallklimas erwartet</p>
	</div>
	</div>
    </li>
	
	<li> 
	<div class = "imageCaptionCombination">
	<h2>Dusche</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_8.png" alt="" /></a>
     <div class = "imageCaption">
	<p> 
	Im unüberdachten Bereich der Ausläufe (Kotbereich) sind  Duschen zur Abkühlung angebracht, diese können über eine  Zeitschaltuhr gesteuert werden. 
	Der Wasserbedarf der Duschen kann zudem über Regenwasser gedeckt werden. Das Angebot der Dusche unterstützt die Bedürfnisbefriedigung 
	der Tiere zur Thermoregulation und verbessert so nicht nur das Tierwohl sondern unterstützt auch das Abkoten der Tiere im perforierten
 	Außenbereich. Auch der Blickkontakt zur nächsten Bucht trägt dazu bei.   </p>
	</div>
	</div>
    </li>
	
	<li>
	<div class = "imageCaptionCombination">
	<h2>Blickkontakt</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_9.png" alt="" /></a>
     <div class = "imageCaption">
	
	<p> 
	Sichtfenster im Liegebereich und dem Fressbereich bieten dem Verbraucher die Möglichkeit sich über die Schweinehaltung auf dem Betrieb ein Bild 
	zu machen. Die Fenster sind von innen undurchsichtig, sodass die Tiere nicht gestört werden. An den Fenstern sind zudem Informationstafeln 
	angebracht die über die einzelnen Funktionsbereiche aufklären.</p>
	</div>
	</div>
    </li>
	
	<li>
	<div class = "imageCaptionCombination">
	<h2>Weitere Elemente wirken sich zudem positiv auf das Tierwohl aus und unterstützen die Schaffung von Funktionsbereichen</h2>
	<a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_10.png" alt="" /></a>
     <div class = "imageCaption">
	
	<ul style = "list-style-type: circle;">
		<li  style = "padding: 0.5em;">Angebot von Beschäftigungsmaterial im äußeren, überdachten Bereich. Hier wird eine Raufe eingesetzt die mit Stroh, Heu, Gras 
		oder Silage gefüllt werden kann. Zudem ist die Raufe über eine Schiene höhenverstellbar und in Richtung des Kontrollgangs mechanisch
		schwenkbar. Dies  ermöglicht eine Arbeitssparende Befüllung vom Kontrollgang aus. </li>
 
		<li style = "padding: 0.5em;">Tier-Fressplatzverhältniss: 4:1 :Vermeidung von Rangkämpfen und ermöglicht synchrones Fressen </li>
		<li style = "padding: 0.5em;">Platzangebot: Im Modellbetrieb stehen jedem Mastschwein 1,67 m2 zur Verfügung, davon 0,67 m2 pro Tier Auslauf und 1 m² im Innenbereich
 (0,7 m² eingestreute, planbefestigte schmale Liegefläche und 0,3 m² Fressbereich)</li>
		<li style = "padding: 0.5em;">Beckentränken zum artgerechten Saufen aus offenen Wasserflächen</li>

	</ul>
	</div>
	</div>
    </li>
  </ul>
<!-- </div> -->
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator">
</div>
<!--<div class="container"> -->
  <!-- <div class="info"> -->
    <!-- <div class="one_third"> -->
	<!-- <section class = "infoleft"/> -->
      <!-- <h2>Betriebsspiegel</h2> -->
     <!-- <p><ul> -->
	 <!-- <li>-Hier stehen dann</li> -->
	 <!-- <li>-Einige Details</li> -->
	 <!-- <li>-Zu dem vorgestellen</li> -->
	 <!-- <li>-Modellbetrieb</li> -->
	  <!-- <li>-Hier stehen dann</li> -->
	 <!-- <li>-Einige Details</li> -->
	 <!-- <li>-Zu dem vorgestellen</li> -->
	 <!-- <li>-Modellbetrieb</li> -->
	  <!-- <li>-Hier stehen dann</li> -->
	 <!-- <li>-Einige Details</li> -->
	 <!-- <li>-Zu dem vorgestellen</li> -->
	 <!-- <li>-Modellbetrieb</li> -->
	  <!-- <li>-Hier stehen dann</li> -->
	 <!-- <li>-Einige Details</li> -->
	 <!-- <li>-Zu dem vorgestellen</li> -->
	 <!-- <li>-Modellbetrieb</li> -->
	 
	 
	 <!-- </ul></p> -->
	 <!-- </div> -->
	
    <!-- <div class="one_third"> -->
	<!-- <section class = "infocenter" /> -->
        <!-- <h2>Bauplan</h2> -->
		<!-- <img id="bauplan1" src="images/home/karte.jpg" alt="Bauplan" width= "100%" height="100%"> -->
		
		<!-- <!-- The Modal --> 
		<!-- <div id="bauplan1Modal" class="modal"> -->

	<!-- <!-- The Close Button --> 
	<!-- <span class="close" onclick="document.getElementById('bauplan1Modal').style.display='none'">&times;</span> -->

	<!-- <!-- Modal Content (The Image) --> 
		<!-- <img class="modal-content" id="imgBauplan1"> -->

	<!-- <!-- Modal Caption (Image Text) --> 
	<!-- <div id="captionBauplan1"></div> -->
	<!-- </div> -->
        
	<!-- </div>	 -->
      <!-- <div class="one_third lastcolumn"> -->
	  <!-- <section class = "inforight" /> -->
        <!-- <h2>Beschreibung der Innovation</h2> -->
       <!-- <p>Hier kommt also eine Beschreibung der Innovation hin. <br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  -->
	   <!-- sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam e -->
	   <!-- t justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum  -->
	   <!-- dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed  -->
	   <!-- diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p> -->
	   <!-- </div> -->
    
  <!-- </div> -->
<!-- </div>

    <!-- Blog Comments ==================================================
================================================== -->
<div class = "container">
    <!-- <section class="comments">-->
	<!--<section id = "comments">-->
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
      <h2>Kommentare</h2>
      <div class="sepContainer2"></div>
      <div class="blankSeparator"></div>
      <div class="boxtwosep"></div>
 
	  <!-- <div id="comments"> -->
		<ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments" style = "color: #414550; font-size: 14px">Schreiben Sie den ersten Kommentar!</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<div class="commentMeta">
    					
    						<p><?php echo( date('d.m.Y', strtotime($comment['date']) ) ); ?></p>
    				</div>

    				<div class="commentBody">
					
					<h3><a class="url fn" href="#"><?php echo($comment['name']); ?></a> </h3>
    					<p><?php echo($comment['message']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		
      <!-- </div> -->
      <!-- end Comments --> 
    
    <!-- Blog Contact ==================================================
================================================== -->
    <div id="contactForm">
      <h2>Hinterlassen Sie einen Kommentar</h2>
      <form action="post_comment.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Name:</label>
          <p>Bitte geben Sie Ihren ganzen Namen ein</p>
          <input id=name name=name type=text placeholder="z.B Max Mustermann" required />
        </div>
        <div class="email">
          <label for="email">Ihre E-Mail Adresse</label>
          <p> Bitte geben Sie Ihre E-Mail Adresse ein </p>
          <input id=email name=email type=email placeholder="beispiel@domain.de" required />
        </div>
        <div class="message">
          <label for="message">Ihre Nachricht</label>
          <p> Bitte geben Sie hier Ihren Kommentar ein.</p>
          <textarea id=message name=message placeholder = "Bitte geben Sie mindestens 5 Zeichen ein." rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
			<input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
          <input name = "submit" type="submit" value="Absenden" />
        </div>
		<!-- comment_post_ID value hard-coded as 1 -->
   <!--  <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" /> -->


      </form>
    </div>
	<!--</section>-->
    <!-- end contactForm --> 
  </div>
  <div class="blankSeparator"></div>
  </div>
  


<!-- container ends here -->



<!--Footer ==================================================
================================================== -->
<!-- <div id="footer"> -->
  <!-- <div class="container footer"> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Latest Tweets</h3> -->
      <!-- <div id="tweets"></div> -->
    <!-- </div> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Blogroll</h3> -->
      <!-- <ul> -->
        <!-- <li class="lines"><a href="#" title="">Development Blog</a></li> -->
        <!-- <li class="lines"><a href="#" class="">New Freebies</a></li> -->
        <!-- <li class="lines"><a href="#" class="">Themeforest Theme</a></li> -->
        <!-- <li class="lines"><a href="#" class=""> Design News</a></li> -->
        <!-- <li class="lines"><a href="#" class="">WordPress Theme</a></li> -->
      <!-- </ul> -->
    <!-- </div> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Archive</h3> -->
      <!-- <ul> -->
        <!-- <li class="lines"><a href="#" class=""> August 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">July 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">Juny 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class=""> May 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">April 2012</a></li> -->
      <!-- </ul> -->
    <!-- </div> -->
    <!-- <div class="one_fourth lastcolumn"> -->
      <!-- <h3>About</h3> -->
      <!-- <p>Proximet is responsive, simple and clean template with a lot attention to detail. Get it now!</p> -->
      <!-- <p>Visit <a href="http://anarieldesign.com/" rel="nofollow">Anariel Design</a> and find more interesting things.</p> -->
    <!-- </div> -->
  <!-- </div> -->
  <!-- <!-- container ends here --> 
<!-- </div> -->
<!-- footer ends here --> 
<!-- </div> -->
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">Konzept von der <a href="http://www.agriconcept.de/content/inhalte/startseite/index.html" rel="nofollow">AgriConcept Beratungsgesellschaft mbH</a>. 
	  Design inspiriert von <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>.</p>
    </div>
    <!-- <div class="five columns omega"> -->
      <!-- <section class="socials"> -->
        <!-- <ul class="socials fr"> -->
          <!-- <li><a href="#"><img src="images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li> -->
        <!-- </ul> -->
      <!-- </section> -->
    <!-- </div> -->
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src = "js/modellbetrieb1js.js" type = "text/javascript"></script>
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>

</body>
</html>