<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
	
	<head profile="<?php print $grddl_profile; ?>">
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
		
		<script>
		$(document).bind("mobileinit", function(){
			$.mobile.defaultPageTransition = 'slideup';
			});
		</script>
		
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	</head>

	<body class="<?php print $classes; ?>">
	
	<?php print render($page_top); ?>
	<?php print render($page); ?>
	<?php print render($page_bottom); ?>
	
	</body>
</html>