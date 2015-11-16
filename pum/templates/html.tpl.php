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
        <link rel="stylesheet" src="/sites/all/themes/pum/css/ie8-grid-support.css" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" href="/sites/all/themes/pum/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/pum/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/pum/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/pum/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/pum/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/pum/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/pum/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/pum/apple-touch-icon-152x152.png" />

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
    // ... your code that runs before foundation initiation

    // Fix for foundation stylesheets being picked up as "null" or "not an object",
    // implementation from here: http://foundation.zurb.com/forum/posts/3189-foundation-5-orbit-slider-ie8-issue
    (function($) {
        if (!Foundation.stylesheet) {
            Foundation._style_element = $('').appendTo('head')[0];
            Foundation.stylesheet     = Foundation._style_element.styleSheet;

            if (Foundation.stylesheet) {
                Foundation.stylesheet.cssRules = {
                    length: 0
                };

                Foundation.stylesheet.insertRule = function(rule, index) {
                    var media, mediaMatch, mediaRegex, namespace, ruleMatch, ruleRegex;
                    mediaRegex = /^\s*@media\s*(.*?)\s*\{\s*(.*?)\s*\}\s*$/;
                    mediaMatch = mediaRegex.exec(rule);
                    media      = '';

                    if (mediaMatch) {
                        media = '@media ' + mediaMatch[1] + ' ';
                        rule  = mediaMatch[2];
                    }

                    ruleRegex = /^\s*(.*?)\s*\{\s*(.*?)\s*\}\s*$/;
                    ruleMatch = ruleRegex.exec(rule);
                    namespace = '' + media + ruleMatch[1];
                    rule      = ruleMatch[2];

                    return this.addRule(namespace, rule);
                };
            } else if (window.console) {
                console.log('Could not fix Foundation CSS rules…');
            }
        }
    })(jQuery);
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
</body>
</html>
