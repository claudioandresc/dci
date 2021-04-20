<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="image/x-icon" href="dci.ico" rel="shortcut icon" />
<meta name="Resource-type" content="Document" />
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:600' rel='stylesheet' type='text/css' />
<!-- link href='http://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css' -->
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="full-page/jquery.fullPage.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="scripts/jquery.tubular.1.0.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="full-page/jquery-ui.min.js"></script>
<script type="text/javascript" src="full-page/jquery.fullPage.js"></script>
<script language="JavaScript" type="text/JavaScript">
if (navigator.userAgent.match(/Android/i) ||
	 navigator.userAgent.match(/webOS/i) ||
	 navigator.userAgent.match(/iPhone/i) ||
	 navigator.userAgent.match(/iPad/i) ||
	 navigator.userAgent.match(/iPod/i) ||
	 navigator.userAgent.match(/BlackBerry/) || 
	 navigator.userAgent.match(/Windows Phone/i) || 
	 navigator.userAgent.match(/ZuneWP7/i)
	 ) {
		self.location="https://dcicaracas.com.ve/mobile.htm";
	   }
</script>
<script type="text/javascript">
	$(document).ready(function() {
		var pepe = $.fn.fullpage({
			//slidesColor: ['#fff', '#whitesmoke', '#fff', 'whitesmoke', '#fff'],
			anchors: ['home', 'pastores', 'vision', 'actividades', 'ministerios', 'galeria'/*, 'notas'*/, 'contactenos', 'peticion', 'alPastor', 'donaciones', 'anuncios', 'predicas'],
			menu: '#menu',
			easing: 'easeOutExpo',
			//'verticalCentered': false,
			scrollingSpeed: 2000
		});
	
	
	$('#videobg').tubular({
	videoId: 'k-sdLcTNK80',  // WTXtbDKcoF4
	wrapperZIndex: 1
	/*increaseVolumeBy: 100, // increment value; volume range is 1-100
	ratio: 16/9 // usually either 4/3 or 16/9 -- tweak as needed
	mute: true,
	repeat: true,
	width: $(window).width(), // no need to override
	playButtonClass: 'tubular-play',
	pauseButtonClass: 'tubular-pause',
	muteButtonClass: 'tubular-mute',
	volumeUpClass: 'tubular-volume-up',
	volumeDownClass: 'tubular-volume-down',
	start: 0 // starting position in seconds*/
	});
		
		
	$("#section0").load("pages/home.html");
	$("#section1").load("pages/pastores.html");
	$("#section2").load("pages/vision.html");
	$("#section3").load("pages/actividades.html");
	$("#section5").load("pages/galeria.php");
	//$("#section6").load("pages/notas.html");
	$("#section7").load("pages/contactenos.html");
	$("#section8").load("pages/peticion.html");
	$("#section9").load("pages/alpastor.html");
	$("#section10").load("pages/donaciones.html");
	$("#section11").load("pages/anuncios.html");
	$("#section12").load("pages/predicas.html");
	$("#ss1").load("pages/alabanza.html");
	$("#ss2").load("pages/medios.html");
	$("#ss3").load("pages/ninos.html");
	$("#ss4").load("pages/jovenes.html");
	$("#ss5").load("pages/misiones.html");
	$("#ss6").load("pages/oasis.html");


	$("a.enterframe").fancybox({
	'width'				: 480,
	'height'			: 'auto',
	'autoScale'			: true,
	'transitionIn'		: 'fade',
	'transitionOut'		: 'fade',
	'scrolling'			: 'auto',
	'type'				: 'iframe'
	});
	
	$("a.regframe").fancybox({
	'width'				: 540,
	'height'			: 'auto',
	'autoScale'			: true,
	'transitionIn'		: 'fade',
	'transitionOut'		: 'fade',
	'scrolling'			: 'auto',
	'type'				: 'iframe'
	});
	
	$("a.envivo").fancybox({
	'width'				: 950,
	'height'			: 360,
	'autoScale'			: true,
	'transitionIn'		: 'fade',
	'transitionOut'		: 'fade',
	'scrolling'			: 'auto',
	'type'				: 'iframe'
	});
	
	$("a.yt-videos").fancybox({
	'maxWidth'	: 800,
	'maxHeight'	: 600,
	'fitToView'	: true,
	'width'		: 640,
	'height'	: 480,
	'autoSize'	: true,
	'closeClick': true,
	'autoScale'	: true,
	'transitionIn'	: 'fade',
	'transitionOut'	: 'fade',
	'scrolling'		: 'no',
	'type'			: 'iframe', //swf
	/*
	'padding'		: 0,
	'swf'			: {
			   	 'wmode'		: 'transparent',
				'allowfullscreen'	: 'true'
			}
	'wmode'				: 'transparent',
	'allowfullscreen'	: 'true',
	'openEffect'	: 'none',
	'closeEffect'	: 'none',
	'allowscriptaccess'	: 'always'
	*/
		helpers : {
			media : {}
		}
	});
	
});
</script>