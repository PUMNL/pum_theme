<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="apple-touch-icon" href="/sites/all/themes/pum/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/pum/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/pum/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/pum/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/pum/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/pum/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/pum/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/pum/apple-touch-icon-152x152.png" />

	<!--<link href='http://fonts.googleapis.com/css?family=Merriweather:300,400,700' rel='stylesheet' type='text/css'>-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
</body>
</html>
