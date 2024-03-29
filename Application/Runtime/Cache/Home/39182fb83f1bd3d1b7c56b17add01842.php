<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>友租网-校园社交租赁平台</title>

   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <link rel="publisher" href="https://plus.google.com/117689250782136016574">

   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/datepicker.css">

   <!--  these two css are to use only for documentation -->
   <!--<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootmetro/demo.css">-->

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="./assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="/thinkphp_3.2.3_full/Public/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body class="panorama-parallax">
   <!--[if lt IE 7]>
   <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
   <![endif]-->

   <div id="wrap">
   
      <!-- Header
      ================================================== -->
      <div id="nav-bar" class="">
         <div class="pull-left">
            <div id="header-container">
			 <h5></h5>
               <div class="dropdown">
                  <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                     YooZu share
                     <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                  <li><a href="./metro-layouts.html">Metro Layouts</a></li>
                  <li><a href="./hub.html">Hub</a></li>
                  <li><a href="./tiles-templates.html">Tile Templates</a></li>
                  <li><a href="./listviews.html">ListViews</a></li>
                  <li><a href="./appbar-demo.html">App-Bar Demo</a></li>
                  <li><a href="./table.html">Table Demo</a></li>
                  <li><a href="./wizard.html">Wizard</a></li>
                  <li><a href="./icons.html">Icons</a></li>
                  <li><a href="./toast.html">Toast Notifications</a></li>
                  <li><a href="./pivot.html">Pivot</a></li>
                  <li><a href="./metro-components.html">Metro Components</a></li>
                  <li class="divider"></li>
                  <li><a href="./scaffolding.html">Bootstrap Scaffolding</a></li>
                  <li><a href="./base-css.html">Bootstrap Base CSS</a></li>
                  <li><a href="./components.html">Bootstrap Components</a></li>
                  <li><a href="./javascript.html">Bootstrap Javascript</a></li>
                  <li class="divider"></li>
                  <li><a href="./index.html">Home</a></li>
               </ul>
            </div>
           </div>
         </div>
         <div class="pull-right">
            <div id="top-info" class="pull-right">
            <a id="settings" href="#" class="win-command pull-right">
               <span class="win-commandicon win-commandring icon-cog-3"></span>
            </a>
            <a id="logged-user" href="<?php echo U('Register/Register');?>" class="win-command pull-right">
               <span class="win-commandicon win-commandring icon-user"></span>
            </a>
            <div class="pull-left">
            </div>
         </div>
      </div>
      </div>
   
    <!-- <div id="alerts-container">
        <div id="toast-example1" class="toast toasttext02 fade in">
            <button type="button" class="close" data-dismiss="alert"></button>
            <div class="pull-left">
               <div class="toast-object icon-info-4"></div>
            </div>
         </div>
      </div>-->
   
      <!--<div id="metro-container" class="-container">-->
         <!--<div class="row">-->
            <!--<div id="hub" class="metro">-->
               <div class="metro panorama">
                  <div class="panorama-sections">
   
                     <div class="panorama-section">
   
                        <h2>Featured pictures</h2>
   
                       <!-- <a class="tile widepeek" href="#">
                           <div class="tile wide image">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Darvasa_gas_crater_panorama.jpg/640px-Darvasa_gas_crater_panorama.jpg" alt=""/>
                           </div>
                           <div class="tile wide text bg-color-orange">
                              <div class="text5">The Door to Hell, a burning natural gas field in Derweze, Turkmenistan</div>
                           </div>
                        </a>-->
   
                        <div class="tile-column-span-2">
                           <a class="tile wide imagetext wideimage bg-color-blue" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Darvasa_gas_crater_panorama.jpg/640px-Darvasa_gas_crater_panorama.jpg" alt=""/>
                              <div class="textover-wrapper bg-color-blueDark">
                                 <div class="text2">The Door to Hell, a burning natural gas field in Derweze, Turkmenistan</div>
                              </div>
                           </a>
   
                           <a class="tile wide imagetext wideimage bg-color-green" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Lady_Elliot_Island_SVII.jpg/320px-Lady_Elliot_Island_SVII.jpg" alt=""/>
                              <div class="textover-wrapper transparent">
                                 <div class="text2">An image of the coral reef near Lady Elliot Island</div>
                              </div>
                           </a>
   
                           <a class="tile square image bg-color-red" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Wulfenite_mexique.jpg/611px-Wulfenite_mexique.jpg" alt=""/>
                              <div class="textover-wrapper transparent">
                                 <div class="text2">An image of the coral reef near Lady Elliot Island </div>
                              </div>
                           </a>
   
                        <a class="tile square image" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Hagia_Sophia_Mars_2013.jpg/640px-Hagia_Sophia_Mars_2013.jpg" alt=""/>
                              <div class="textover-wrapper transparent">
                                 <div class="text2">An image of the coral reef near Lady Elliot Island</div>
                              </div>
                           </a>
                        </div>
   
                        <div class="tile-column-span-1">
                           <a class="tile squarepeek bg-color-orange" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Anastomus_oscitans_-_Bueng_Boraphet.jpg/384px-Anastomus_oscitans_-_Bueng_Boraphet.jpg" alt=""/>
                              <div class="text-inner">
                                 <div class="text4">The Asian Openbill or Asian Openbill Stork (Anastomus oscitans) is a large wading bird in the stork family Ciconiidae.</div>
                              </div>
                           </a>
   
                        </div>
   
                     </div>
   
                     <div class="panorama-section">
   
                        <h2>Featured articles</h2>
   
                        <div class="tile-column-span-2">
                           <a class="tile widepeek" href="#">
                              <div class="tile wide image">
                                 <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Fuso_Trial_Heading_Left.jpg/640px-Fuso_Trial_Heading_Left.jpg" alt=""/>
                              </div>
                              <div class="tile wide text">
                                 <div class="text-header">Fusō</div>
                                 <div class="text4">Japanese battleship Fusō (扶桑, a classical name for Japan) was the lead ship of the two Fusō-class dreadnought battleships built for the Imperial Japanese Navy.</div>
                              </div>
                           </a>
   
                           <a class="tile wide imagetext wideimage bg-color-green" href="#">
                              <img src="http://upload.wikimedia.org/wikipedia/en/e/e9/Famous_Fantastic_Mysteries_August_1942_cover.jpg" alt=""/>
                              <div class="textover-wrapper transparent">
                                 <div class="text2">Famous Fantastic Mysteries</div>
                              </div>
                           </a>
   
                        </div>
   
   
                     </div>
   
   
                     <div class="panorama-section tile-span-4">
   
                        <h2>Featured apps</h2>
   
                        <a class="tile app bg-color-orange" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-mail"></span>
                           </div>
                           <div class="app-label">Mail</div>
                           <div class="app-count">12</div>
                        </a>
   
                        <a class="tile app bg-color-blue" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-map"></span>
                           </div>
                           <div class="app-label">Map</div>
                        </a>
   
                        <a class="tile wide imagetext bg-color-greenDark" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-chat-2"></span>
                           </div>
                           <div class="column-text">
                              <div class="text4">Chat with your friends</div>
                           </div>
                           <div class="app-label">145 friends online</div>
                        </a>
   
                        <a class="tile app bg-color-purple" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-weather"></span>
                           </div>
                           <div class="app-label">Weather</div>
                        </a>
   
                        <a class="tile app bg-color-green" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-linkedin"></span>
                           </div>
                           <div class="app-label">LinkedIn</div>
                        </a>
   
                     </div>
   
                     <div class="panorama-section tile-span-4">
   
                        <h2>Group two</h2>
   
                        <a class="tile wide imagetext bg-color-blue" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-music-3"></span>
                           </div>
                           <div class="column-text">
                              <div class="text">Top 10</div>
                              <div class="text">Favorites</div>
                              <div class="text">Best choices</div>
                           </div>
                           <span class="app-label">MUSIC</span>
                        </a>
   
                        <a class="tile wide imagetext bg-color-blueDark" href="./base-css.html">
                           <div class="image-wrapper">
                              <img src="assets/img/Coding app.png" />
                           </div>
                           <div class="column-text">
                              <div class="text">Typography</div>
                              <div class="text">Tables</div>
                              <div class="text">Forms</div>
                              <div class="text">Buttons</div>
                           </div>
                           <span class="app-label">BASE CSS</span>
                        </a>
   
                        <a class="tile app bg-color-orange" href="#">
                           <div class="image-wrapper">
                              <img src="assets/img/RegEdit.png" alt="" />
                           </div>
                           <span class="app-label">COMPONENTS</span>
                        </a>
   
                        <a class="tile app bg-color-red" href="./javascript.html">
                           <div class="image-wrapper">
                              <img src="assets/img/Devices.png" alt="" />
                           </div>
                           <span class="app-label">JAVASCRIPT</span>
                        </a>
   
                     </div>
   
                  </div>
               </div>
               <a id="panorama-scroll-prev" href="#"></a>
               <a id="panorama-scroll-next" href="#"></a>
               <div id="panorama-scroll-prev-bkg"></div>
             <!--<div id="panorama-scroll-next-bkg"></div>-->
            <!--</div>-->
         <!--</div>-->
      <!--</div>-->
   
   </div>
   <div id="charms" class="win-ui-dark slide">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
         </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>
   
            </div>
         </div>
      </div>
   
   </div>

   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
   <script>window.jQuery || document.write("<script src='assets/js/jquery-1.10.0.min.js'>\x3C/script>")</script>

   <!--[if IE 7]>
   <script type="text/javascript" src="scripts/bootmetro-icons-ie7.js">
   <![endif]-->

   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/min/bootstrap.min.js"></script>
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/bootstrap-datepicker.js"></script>

   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.touchSwipe.min.js"></script>

   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/holder.js"></script>
   <!--<script type="text/javascript" src="./assets/js/perfect-scrollbar.with-mousewheel.min.js"></script>-->
   <script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/demo.js"></script>


   <script type="text/javascript">

      $('.panorama').panorama({
         //nicescroll: false,
         showscrollbuttons: true,
         keyboard: true,
         parallax: true
      });

//      $(".panorama").perfectScrollbar();

      $('#pivot').pivot();

   </script>
</body>
</html>