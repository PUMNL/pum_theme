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

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MFBGCMM');</script>
  <!-- End Google Tag Manager -->

    <!--[if lt IE 9]>
        <link rel="stylesheet" src="/sites/all/themes/pum/css/ie8-grid-support.css" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFBGCMM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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
