<?php
  // get parent title...
  $menuParent = menu_get_active_trail();
  //get rid of the last item in the array as it is the current page
  $menuParentPop = array_pop($menuParent);
  //Just grab the last item in the array now
  $menuParent = end($menuParent);
  //if it is not the home page and it is not an empty array
  if(!empty($menuParent) && $menuParent['link_path'] != ''){
    $raw_link = $menuParent['title'];
  } else{
    $raw_link = $title;
  }

  $raw_lower = strtolower($raw_link);
  $fulltrail=str_replace(" ","-",$raw_lower);
?>

<script type="text/javascript">
    var title = document.title;
    var url = document.URL;
    document.write('<div class="sharethis">');
    document.write('<a class="fb" href="https://www.facebook.com/sharer/sharer.php?u='+url+'">Share on Facebook</a>');
    document.write('<a class="tw" href="https://twitter.com/home?status='+url+'">Share on Twitter</a>');
    document.write('<a class="go" href="https://plus.google.com/share?url='+url+'">Share on Google+</a>');
    document.write('<a class="li" href="https://www.linkedin.com/shareArticle?mini=true&url='+url+'&title='+title+'&summary=&source=">Share on LinkedIn</a>');
    document.write('</div>');
</script>

<?php
$cookie_message_active = theme_get_setting('pum_cookie_messageactive');
if($cookie_message_active == '1') {
	drupal_add_library('system', 'jquery.cookie');

	if(!isset($_COOKIE['pum_cookies'])) {
?>
	<div id="popup-message-window">
		<h1 class="popup-message-title">
			<?=theme_get_setting('pum_cookie_title');?>
		</h1>
		<div id="popup-message-content">
			<?=theme_get_setting('pum_cookie_text');?>
		</div>
		<div id="popup-message-buttons">
			<a id="pum-cookie-message-accept" onclick="jQuery.cookie('pum_cookies', '1'); jQuery('#popup-message-window').hide();" class="pum_button">I Agree</a> - <a id="pum-cookie-message-deny" onclick="jQuery.cookie('pum_cookies', '0'); jQuery('#popup-message-window').hide();" class="pum_button">I Disagree</a>
		</div>
	</div>
<?php
	}
}
?>

<!--.page -->
<div role="document" class="page <?php echo $fulltrail; ?> ">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if (!empty($page['topbar_small'])): ?>
      <nav class="top-bar show-for-small-only" data-topbar>
        <ul class="title-area">
          <li class="name"></li>
          <li class="toggle-topbar menu-icon"><a href="#"></a></li>
        </ul>

        <section class="top-bar-section">
            <?php print render($page['topbar_small'])?>
        </section>
      </nav>
    <?php endif; ?>

    <?php if (!empty($page['topbar'])): ?>
      <!--.l-topbar -->
      <section class="l-topbar row show-for-medium-up">
        <div class="large-12">
          <?php print render($page['topbar']); ?>
        </div>
      </section>
      <!--/.l-topbar -->
    <?php endif; ?>

    <!--.l-header-region -->
    <section class="l-header-region row">
      <div class="large-12">
        <div id="logo"><?php if ($linked_logo): print $linked_logo; endif; ?></div>
        <?php print render($page['header']); ?>
      </div>
    </section>
    <!--/.l-header-region -->

  </header>
  <!--/.l-header -->


  <!--  Get Parent Item  -->
  <?php $type = ''; ?>

  <?php
    switch($fulltrail) {
    	case 'volunteer':
    	   $borderColor = '#443A94';
    	   break;
    	case 'get-advice':
    	   $borderColor = '#887D14';
    	   break;
    	case 'partner-with-us';
    	   $borderColor = '#009DDF';
    	   break;
    	default:
    	   $borderColor = '#FE7500';
    	   break;
    }
  ?>
  <!--  End Get Parent Item  -->

  <!--.l-banner-region -->
  <section class="l-banner" style="border-color: <?php echo $borderColor;?>">
    <?php if (!empty($page['banner'])): ?>
      <div class="large-12 inner-content">
        <?php print render($page['banner']); ?>
      </div>
    <?php endif; ?>
  </section>
  <!--/.l-banner-region -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <div class="inner">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if ($breadcrumb): print $breadcrumb; endif; ?>

        <?php if ($title && !$is_front): ?>
          <?php print render($title_prefix); ?>
            <div class="row">
              <h1 id="page-title" class="title"><?php print $title; ?></h1>
            </div>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar <?php echo $fulltrail; ?>">
        <div class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['undermain'])): ?>
    <section class="l-undermain">
      <div class="row">
        <div class="large-12">
          <div class="inner">
            <?php print render($page['undermain']); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<?php if (!empty($page['sharethis'])): ?>
  <div class="sharethis">
	  <?php print render($page['sharethis']); ?>
  </div>
<?php endif; ?>
