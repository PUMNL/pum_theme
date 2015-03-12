
<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
    	  animation: "fade",
    	  directionNav: false
    });

    jQuery('.flex-control-nav li').each(function(i, el) {
        el.id = 'nav'+(i+1);
    });

    jQuery('.slides li').each(function(i, el) {
        el.id = 'slide'+(i+1);
    });
  });
</script>

<!-- Get the values used on the frontpage -->
<?php
  $intro_text = field_get_items('node', $node, 'field_front_intro_text')[0]['value'];

  $business_text = field_get_items('node', $node, 'field_front_business_text')[0]['value'];
  $expert_text = field_get_items('node', $node, 'field_front_expert_text')[0]['value'];
  $partner_text = field_get_items('node', $node, 'field_front_partner_text')[0]['value'];

  $title_facts = field_get_items('node', $node, 'field_front_facts_title')[0]['value'];
  $number_projects = field_get_items('node', $node, 'field_front_facts_no_projects')[0]['value'];
  $number_projects_title = field_get_items('node', $node, 'field_front_facts_projects_title')[0]['value'];
  $number_projects_text = field_get_items('node', $node, 'field_front_facts_text_projects')[0]['value'];
  $number_experts = field_get_items('node', $node, 'field_front_facts_no_experts')[0]['value'];
  $number_expert_title = field_get_items('node', $node, 'field_front_fact_experts_title')[0]['value'];
  $number_experts_text = field_get_items('node', $node, 'field_front_facts_text_experts')[0]['value'];
  $number_years = field_get_items('node', $node, 'field_front_facts_no_years')[0]['value'];
  $number_years_title = field_get_items('node', $node, 'field_front_fact_years_title')[0]['value'];
  $number_years_text = field_get_items('node', $node, 'field_front_facts_text_years')[0]['value'];
  $read_more_title = field_get_items('node', $node, 'field_front_link_of_read_more')[0]['title'];
  $read_more_link = field_get_items('node', $node, 'field_front_link_of_read_more')[0]['url'];

  $image_business_uri = field_get_items('node', $node, 'field_slide_image_business')[0]['uri'];
  $image_business = image_style_url('epsa_slider', $image_business_uri);

  $image_experts_uri = field_get_items('node', $node, 'field_slide_image_expert')[0]['uri'];
  $image_experts = image_style_url('epsa_slider', $image_experts_uri);

  $image_partners_uri = field_get_items('node', $node, 'field_slide_image_partner')[0]['uri'];
  $image_partners= image_style_url('epsa_slider', $image_partners_uri);

  $text_align_business = field_get_items('node', $node, 'field_text_align_business')[0]['value'];
  $text_align_expert = field_get_items('node', $node, 'field_text_align_expert')[0]['value'];
  $text_align_partner = field_get_items('node', $node, 'field_text_align_partner')[0]['value'];
  $text_business = field_get_items('node', $node, 'field_text_business')[0]['value'];
  $text_expert = field_get_items('node', $node, 'field_text_expert')[0]['value'];
  $text_partner = field_get_items('node', $node, 'field_text_partner')[0]['value'];
?>
<!-- /Get the values used on the frontpage -->

<!--.page -->
<div role="document" class="page">

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

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12">
          <div id="logo"><?php if ($linked_logo): print $linked_logo; endif; ?></div>
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <!--.l-banner-region -->
  <section class="l-banner show-for-medium-up" style="border-color: #FE7500">
    <div class="large-12">
      <div class="flexslider banner-slider">
        <ul class="slides">
          <li>
            <div class="border"></div>
            <div class="text <?php echo $text_align_business; ?>"><div class="inner-content"><?php echo $text_business ?></div></div>
            <img src="<?php echo $image_business; ?>" alt="slide business" />
          </li>
          <li>
            <div class="border"></div>
            <div class="text <?php echo $text_align_expert; ?>"><div class="inner-content"><?php echo $text_expert ?></div></div>
            <img src="<?php echo $image_experts; ?>" alt="slide expert" />
          </li>
          <li>
            <div class="border"></div>
            <div class="text <?php echo $text_align_partner; ?>"><div class="inner-content"><?php echo $text_partner ?></div></div>
            <img src="<?php echo $image_partners; ?>" alt="slide partner" />
          </li>
        </ul>
      </div>
    </div>
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

  <main role="main" class="l-main">
    <div class="<?php print $main_grid; ?> main">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <div class="row large-12">
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        </div>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php hide($page['content']); ?>

      <div class="group-row-one row">
        <?php echo $intro_text; ?>
      </div>

      <div class="group-row-two row">
        <div class="large-4 medium-4 small-12 columns block-content">
          <div class="inner-content customer">
            <?php echo $business_text; ?>
          </div>
        </div>
        <div class="large-4 medium-4 small-12 columns block-content">
          <div class="inner-content expert">
            <?php echo $expert_text; ?>
          </div>
        </div>
        <div class="large-4 medium-4 small-12 columns block-content">
          <div class="inner-content partner">
            <?php echo $partner_text; ?>
          </div>
        </div>
      </div>

    <?php if (!empty($page['news_front'])): ?>
      <div class="news-front row">
        <div class="large-12">
          <?php print render($page['news_front']); ?>
        </div>
      </div>
    <?php endif; ?>

      <div class="group-row-three">
        <div class="row">
          <div class="large-12 columns title"><h2><?php echo $title_facts; ?></h2></div>
          <div class="large-4 medium-4 small-12 columns data first">
            <div class="number"><?php echo $number_projects;?></div>
            <div class="subnumber"><?php echo $number_projects_title; ?></div>
            <div class="text hide-for-small-only"><?php echo $number_projects_text ?></div>
          </div>
          <div class="large-4 medium-4 small-12 columns data">
            <div class="number"><?php echo $number_experts;?></div>
            <div class="subnumber"><?php echo $number_expert_title; ?></div>
            <div class="text hide-for-small-only"><?php echo $number_experts_text ?></div>
          </div>
          <div class="large-4 medium-4 small-12 columns data last">
            <div class="number"><?php echo $number_years;?></div>
            <div class="subnumber"><?php echo $number_years_title; ?></div>
            <div class="text hide-for-small-only"><?php echo $number_years_text ?></div>
          </div>
          <div class="readmore-link"><a href="<?php echo $read_more_link; ?>"><?php echo $read_more_title; ?></a></div>
        </div>
      </div>

    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['maps_front'])): ?>
    <div class="under-bar-front">
      <?php print render($page['maps_front']); ?>
    </div>
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