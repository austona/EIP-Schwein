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

<link rel="stylesheet" href="css/base.css">
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

<div id = "main" style = "background: #e4eda8;">
<div class = "container">
<div class = "blankSeparator"> </div>
<div class = "blankSeparator"> </div>
<!-- <div class = "sepContainer"> </div> -->
<h1>Tierwohl, Beschäftigung, Fütterung</h1>
<div class = "sepContainer"> </div>
<!-- Home Content Part - Slider ==================================================
================================================== -->

<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="images/innovative_maßnahmen/vollautomatisiertes_einstreuen.png" alt=""/></a> 
	 <div class="flex-caption" style="overflow-x:auto;">
	 <h2>Arbeitszeiteinsparung</h2>
	 <h3>Vollautomatisiertes Einstreuen</h3>
	 <p>Vollautomatisches, zeitgesteuertes Einstreuen beschränkt den Arbeitsaufwand auf das Bestücken des Ballenauflösers. 
	 So kann (mehrmals) täglich zeitgesteuert frisch nachgestreut werden. Dies verhindert wiederum eine Verkotung im Liegebereich 
	 #und dient der Beschäftigung (Langschwanz). In wie weit die Staubbelastung im Vergleich zum händischen Einstreuen reduziert oder 
	 erhöht wird und wie sich der Strohverbrauch verändert wird in den EIP-Ställen getestet. Auch welche Einstreuhäufigkeit und Menge 
	 am günstigsten ist muss getestet werden. Investitionskosten belaufen sich zwischen … und ….€. 
	 </p>
	 </div>
	</li>
    <li> <img src="images/innovative_maßnahmen/mechanisiertes_einstreuen.png" alt="" />
	<div class = "flex-caption">
	<h2>Arbeitszeiteinsparung</h2>
	<h3>Teilautomatisiertes, mechanisiertes Einstreuen</h3>
	 <p>Neben vollautomatischen, zeitgesteuerten Systemen bietet sich für einen geringen Einstreubedarf (nach AFP-Premium) auch mechanische 
	 Einstreuhilfen, mit deutlich geringerem Investitionsbedarf haben. In einigen Testbetrieben wurde ein Korb, der an der Schiene im Gang, 
	 entlang der Buchten geschoben werden kann angebracht. Dieser kann über die gesamte Länge des Stalls geschoben werden. Außerhalb des 
	 Stalles kann dieser mit einem Front- oder Radlader mit einem großen Ballen bestückt werden. Damit lässt sich der tägliche Aufwand 
	 für das Einstreuen deutlich verringern und erleichtern. Im Gegensatz zum vollautomatischen Einstreuen kann jede Bucht individuell 
	 nach Bedarf nachgestreut werden. Für befahrbare Flächen bieten sich Systeme für Frontlader und Radlader an. 
	 </p>
	</div>
	</li>
    <li> <a href="#"><img src="images/modellbetrieb_1/modellbetrieb_1_3.jpg" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Arbeitszeiteinsparung</h2>
	<h3>Gestaltung der Buchtenwände</h3>
	<p> 
	Werden befestigte Flächen im Stall oder im Auslauf genutzt müssen diese auch während der Aufzucht bzw. Mast einfach und schnell abgeschoben
	werden können, um eine gute Hygiene sicherzustellen. Durch den Anbau von planbefestigten Ausläufen kann z.B. relativ günstig zusätzliche 
	eingestreute Fläche geschaffen werden. Die Gestaltung der Buchtenwände ist dabei von großer Bedeutung, da das aus dem Weg schaffen von
	Buchtenwänden und sonstigen Aufstallungen ansonsten schnell soviel Zeit wie das Abschieben selbst benötigt. Ziel muss es sein, befestigte
	Flächen wenigen Handgriffen befahrbar zu machen und die Schweine möglichst schonend in ungefährliche Bereiche wegzusperren. Dazu gibt es
	verschiedene Möglichkeiten.<br>
	Paralellogrammverschiebung: Eine Auslaufgestaltung, bei der die gesamten  Buchtenwände paralellogramartig verschiebbar sind ermöglicht es diese 
	schnell beiseite zu schaffen. Ein händisches Öffnen und Schließen der einzelnen Tore ist damit nicht mehr nötig. Ist die Öffnung zum Stall 
	richtig platziert werden die Tiere zudem bei langsamen Schwenken der Tore zugleich in den Stall getrieben.
	</p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/heizung.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Energieeffizienz
	<h3>Fußboden und/oder Wandheizung</h3>
	<p>Durch eine Boden- und/oder Wandheizung kann ein Kleinklima mit höherer Temperatur geschaffen werden, so kann der gesamte Sall 
	auf geringerer  Temperatur gefahren werden. Weiterer Energieeinsparungen ergeben sich in Kombination mit einer Solarthermieanlage 
	auf dem Stalldach. </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/einstreu.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Energieeffizienz</h2>
	<h3>Einstreu</h3>
	<p>Durch die wärmedämmende Wirkung von Einstreu im Liegebereich kann die Raumtemperatur im Vergleich zu einstreulosen Stallgebäuden 
	gesenkt und dadurch Energie eingespart werden.   </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/querlüftung_offen.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Energieeffizienz</h2>
	<h3>Querlüftung (geöffnet)</h3>
	<p>Eine Außenklimaställe mit Querlüftung ermöglichen einen Verzicht auf Ventilatoren und wirkt sich damit positiv auf den Energieverbrauch aus.
	Großzügige Lüftungsklappen können je nach Temperatur im Stall automatisch oder manuell geöffnet werden. Windnetzte verhinder Zugluft. 
	Probleme bestehen jedoch noch immer bei der Genehmigung oder Bedenken von Anwohnern bezüglich Geruch, da Abluft nicht gezielt abgeleitet wird.  </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/querlüftung_zu.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Energieeffizienz</h2>
	<h3>Querlüftung (geschlossen)</h3>
	<p>Eine Außenklimaställe mit Querlüftung ermöglichen einen Verzicht auf Ventilatoren und wirkt sich damit positiv auf den Energieverbrauch aus. 
	Großzügige Lüftungsklappen können je nach Temperatur im Stall automatisch oder manuell geöffnet werden. Windnetzte verhinder Zugluft.
	Probleme bestehen jedoch noch immer bei der Genehmigung oder Bedenken von Anwohnern bezüglich Geruch, da Abluft nicht gezielt abgeleitet wird.   </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/emissionsmindernde_spalten.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Emmisionseinsparung</h2>
	<h3>Emissionsmindernde Spaltenböden</h3>
	<p>Eine Kot-Harn-Trennung durch emissionsmindernde Spaltenböden verringert Ammoniak- und Geruchsemissionen und verbessert so die Stallluft.
	Die Kanalböden sind mit einem V-förmigen Gefälle zur Kanalmitte hin ausgestattet. Die Mitte dieses Kanals weist eine offene Rinne mit Gefälle auf,
	sodass Harn und Nässe kontinuierlich ablaufen kann. Ein V-Förmiger Schieber  räumt zeitgesteuert den verbleibenden Kot aus dem Kanal. 
	Die verbesserte Stallluft wirkt sich positiv auf die Gesundheit von Mensch- und Tier aus, zudem soll getestet werden. lassen sich diese 
	Spaltenboden besser mit einer teilbefestigter, eingestreuter Liege kombinieren als herkömmliche Stausysteme, die bei Stroheinsatz schnell
	verstopfen.  </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/gefaelle.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Emmisionseinsparung</h2>
	<h3>Emissionsminderung durch Gefälle und Ablaufrinne (1/2)</h3>
	<p>Einfaches aber wirksames Mittel zur Reduktion von NH3 Emissionen ist der rasche Abfluss von Harn über ein Gefälle auf planbefestigten Flächen,
	insbesondere im Auslauf. 
	 </p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/ablaufrinne.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Emmisionseinsparung</h2>
	<h3>Emissionsminderung durch Gefälle und Ablaufrinne (2/2)</h3>
	<p>Über eine Ablaufrinne im tiefsten Punkt des Gefälles wird der Harn abgeführt. 
	In Kombination mit eingestreuten, teilbefestigten Flächen ist die Herausforderung die Ablaufrinne so zu gestalten, dass diese nicht verstopft.
	In den Bauprojekten dieses EIP Projektes werden unterschiedliche Ausführungen getestet.   </p>
	</div>
    </li>
	<li> 
	 <iframe id="player_1" src="https://player.vimeo.com/video/226426186?api=1&player_id=player_1" width = "800px;" height = "500px;" 
	  frameborder="0" marginwidth = "0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
     <div class = "flex-caption">
	 <h2>Emissionseinsparung</h2>
	<h3>Kot-Harn-Trennung</h3>
	<p>
	Text zum Video...
	</p>
	</div>
    </li>
	<li> <a href="#"><img src="images/innovative_maßnahmen/oberflaeche_verringerung.png" alt="" /></a>
     <div class = "flex-caption">
	 <h2>Verringerung der Oberfläche</h2>
	<h3>Emissionsminderung durch Gefälle und Ablaufrinne (2/2)</h3>
	<p>
	Grundsätzlich hängen die Ammoniak und Geruchsemissionen von der emittierenden Fläche ab. Eine Strukturierung der Bucht mit vorgesehenem Kotbereich
	senkt damit die Emissionen, wenn diese auch von den Schweinen angenommen wird. Auch tiefe, schmale, Güllekanäle mit geringerer Oberfläche und 
	damit Luftkontakt verringern Emissionen.
	</p>
	</div>
    </li>
	
	
	
	
	
  </ul>
</div>
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