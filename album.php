<!DOCTYPE html>
<html lang="en">
<head>



	
    

    <title>Album</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    
      
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
    
    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
</head>
<body>
<div class="sub-pages">
   <header>                   	
      <h1><a href="index.html"><img src="images/logofj.png" alt=""></a></h1> 
      <nav>  
        <ul class="menu">
        <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li>&nbsp;</li>
                <li ><a href="index.html">Home</a></li>
              <li><a href="wedding.html">Mariage</a></li>
              <li class="current"><a href="album.php">Album</a></li>
              <li><a href="wishes.html">Vos Voeux</a></li>
              <li><a href="contacts.php">contacts</a></li>
          </ul>
      </nav>
    </header> 
</div>     
  <!--==============================content================================-->
  <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. July 30, 2012!</div>
    	<div class="container_24">
        	<div class="grid_24">
                 <h4 class="top-1"><strong>Our</strong> photo album:</h4>
            </div>     
    <iframe width="960" src="diap.html" scrolling="no" height="400" ></iframe> 
    
         </div>
            
    </section> 
      
    <section id="content"><br><br>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <a class="fancybox-buttons" data-fancybox-group="group1" title="" href="images/album/hochzeit/groupe1/001.jpg"><img src="images/album/hochzeit/groupe1/001.jpg" width="140" height="160" border="0" class="im"/></a> 
           <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/002.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/003.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/004.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/005.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/006.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/007.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/008.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/009.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/010.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/011.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/012.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/013.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/014.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/015.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/016.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/017.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/018.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/019.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/020.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/021.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/022.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/023.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/024.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/025.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/026.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/027.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/028.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/029.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/030.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/031.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/032.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/033.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/034.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/035.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/036.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/037.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/038.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/039.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/040.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/041.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/042.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/043.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/044.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/045.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/046.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/047.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/048.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/049.jpg" title="" target="top"></a><a class="fancybox-buttons" data-fancybox-group="group1" href="images/album/hochzeit/groupe1/050.jpg" title="" target="top"></a>
    </td>
    <td>&nbsp;</td>
    <td><a class="fancybox-buttons" data-fancybox-group="group2" title="" href="images/album/hochzeit/groupe2/001.jpg"><img src="images/album/hochzeit/groupe2/001.jpg" width="140" height="160" border="0" class="im"/></a> 
           <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/002.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/003.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/004.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/005.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/006.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/007.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/008.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/009.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group2" href="images/album/hochzeit/groupe2/010.jpg" title="" target="top"> </a></td>
    <td>&nbsp;</td>
    <td><a class="fancybox-buttons" data-fancybox-group="group5" title="" href="images/album/hochzeit/groupe5/002.jpg"><img src="images/album/hochzeit/groupe5/002.jpg" width="150" height="160" border="0" class="im"/></a> 
           <a class="fancybox-buttons" data-fancybox-group="group5" href="images/album/hochzeit/groupe5/001.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group5" href="images/album/hochzeit/groupe5/003.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group5" href="images/album/hochzeit/groupe5/004.jpg" title="" target="top"></a></td>
    <td>&nbsp;</td>
    <td><a class="fancybox-buttons" data-fancybox-group="group4" title="" href="images/album/hochzeit/groupe4/001.jpg"><img src="images/album/hochzeit/groupe4/001.jpg" width="140" height="160" border="0" class="im"/></a> 
           <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/002.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/003.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/004.jpg" title="" target="top"></a>  <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/006.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/007.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/008.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/009.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/010.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/011.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/012.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/013.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/014.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/015.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/016.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/017.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/018.jpg" title="" target="top"></a>  <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/020.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/021.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/022.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/023.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/024.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/025.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/026.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/027.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/028.jpg" title="" target="top"></a>      <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/034.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/035.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/036.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/037.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group4" href="images/album/hochzeit/groupe4/038.jpg" title="" target="top"></a></td>
    <td>&nbsp;</td>
    <td><a class="fancybox-buttons" data-fancybox-group="group3" title="" href="images/album/hochzeit/groupe3/001.jpg"><img src="images/album/hochzeit/groupe3/001.jpg" width="120" height="160" border="0" class="im"/></a> 
           <a class="fancybox-buttons" data-fancybox-group="group3" href="images/album/hochzeit/groupe3/002.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group3" href="images/album/hochzeit/groupe3/003.jpg" title="" target="top"></a> <a class="fancybox-buttons" data-fancybox-group="group3" href="images/album/hochzeit/groupe3/004.jpg" title="" target="top"></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Les Mariés</td>
    <td>&nbsp;</td>
    <td>La Mariée</td>
    <td>&nbsp;</td>
    <td>Le Marié</td>
    <td>&nbsp;</td>
    <td>La Famille</td>
    <td>&nbsp;</td>
    <td>Les Amis</td>
    <td>&nbsp;</td>
  </tr>
</table>

    </section>
<!--==============================footer=================================-->
  <footer>
  <audio controls="controls" preload="true">
  <source src="mp3/mariage.mp3" type="audio/mp3" />
  Votre navigateur n'est pas compatible
</audio>
      <p><strong>© 2016  Joelle &amp; Florent</strong><br> <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Website Template</a> created with Templatemonster by <a href="mailto:k_kenfack2000@outlook.com">Kevin Kenfack</a></p>
      
  </footer>	
</body>
</html>