<?php
	$r = floor(rand(1, 255) / 2);
	$g = floor(rand(1, 255) / 2);
	$b = floor(rand(1, 255) / 2);
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>A Internet Caiu?</title>
		<meta name="keywords" content="verificar, conexão, internet, caiu" />
		<meta name="description" content="Caiu a conexão? Verifique se você está offline" />
		<meta name="author" content="uliporeggia" />
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<style type="text/css">
			html {
				background-image: linear-gradient(
					bottom, 
					rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>) 0%, 
					rgb(255, 255, 255) 100%
				);
				background-image: -o-linear-gradient(
					bottom, 
					rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>) 0%, 
					rgb(255, 255, 255) 100%
				);
				background-image: -moz-linear-gradient(
					bottom, 
					rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>) 0%, 
					rgb(255, 255, 255) 100%
				);
				background-image: -ms-linear-gradient(
					bottom, 
					rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>) 0%, 
					rgb(255, 255, 255) 100%
				);
				background-image: -webkit-linear-gradient(
					bottom, 
					rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>) 0%, 
					rgb(255, 255, 255) 100%
				);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					left top,
					color-stop(0, rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>)),
					color-stop(1, rgb(255, 255, 255))
				);
			}
		</style>
		<link rel="icon" type="image/png" href="assets/images/favicon.png" />
	</head>
	<body>
		<div id="main" class="wAll">
			<h1 class="tS wAll">N&atilde;o!</h1><h2 class="tS wAll">sua Internet est&aacute; de p&eacute;</h2>
		</div>
		<footer>(BETA) &copy; 2012 | <a href="https://github.com/uliporeggia/a-internet-caiu">Fork no Github</a> - <a href="http://about.me/uliporeggia">idealizador</a></footer>
	</body>
	<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-34082464-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
</html>