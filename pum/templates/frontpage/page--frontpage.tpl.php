
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

<?php

  $frontpage_fields = node_load($node->nid);

  // Get the values used on the frontpage
  $intro_text = $frontpage_fields->field_front_intro_text['und'][0]['value'];

  $business_text = $frontpage_fields->field_front_business_text['und'][0]['value'];
  $expert_text = $frontpage_fields->field_front_expert_text['und'][0]['value'];
  $partner_text = $frontpage_fields->field_front_partner_text['und'][0]['value'];
  $business_title = $frontpage_fields->field_front_business_link['und'][0]['title'];
  $business_link = $frontpage_fields->field_front_business_link['und'][0]['url'];
  $expert_title = $frontpage_fields->field_front_expert_link['und'][0]['title'];
  $expert_link = $frontpage_fields->field_front_expert_link['und'][0]['url'];
  $partner_title = $frontpage_fields->field_front_partner_link['und'][0]['title'];
  $partner_link = $frontpage_fields->field_front_partner_link['und'][0]['url'];
  $title_facts = $frontpage_fields->field_front_facts_title['und'][0]['value'];
  $number_projects = $frontpage_fields->field_front_facts_no_projects['und'][0]['value'];
  $number_projects_title = $frontpage_fields->field_front_facts_projects_title['und'][0]['value'];
  $number_projects_text = $frontpage_fields->field_front_facts_text_projects['und'][0]['value'];
  $number_experts = $frontpage_fields->field_front_facts_no_experts['und'][0]['value'];
  $number_expert_title = $frontpage_fields->field_front_fact_experts_title['und'][0]['value'];
  $number_experts_text = $frontpage_fields->field_front_facts_text_experts['und'][0]['value'];
  $number_years = $frontpage_fields->field_front_facts_no_years['und'][0]['value'];
  $number_years_title = $frontpage_fields->field_front_fact_years_title['und'][0]['value'];
  $number_years_text = $frontpage_fields->field_front_facts_text_years['und'][0]['value'];
  $read_more_title = $frontpage_fields->field_front_link_of_read_more['und'][0]['title'];
  $read_more_link = $frontpage_fields->field_front_link_of_read_more['und'][0]['url'];

  $image_business_uri = $frontpage_fields->field_slide_image_business['und'][0]['uri'];
  $image_business = image_style_url('epsa_slider', $image_business_uri);

  $image_experts_uri = $frontpage_fields->field_slide_image_expert['und'][0]['uri'];
  $image_experts = image_style_url('epsa_slider', $image_experts_uri);

  $image_partners_uri = $frontpage_fields->field_slide_image_partner['und'][0]['uri'];
  $image_partners = image_style_url('epsa_slider', $image_partners_uri);

  $text_align_business = $frontpage_fields->field_text_align_business['und'][0]['value'];
  $text_align_expert = $frontpage_fields->field_text_align_expert['und'][0]['value'];
  $text_align_partner = $frontpage_fields->field_text_align_partner['und'][0]['value'];

  $text_business = $frontpage_fields->field_text_business['und'][0]['value'];
  $text_expert = $frontpage_fields->field_text_expert['und'][0]['value'];
  $text_partner = $frontpage_fields->field_text_partner['und'][0]['value'];

  $url_business = !empty($frontpage_fields->field_url_business['und'][0]['url'])?$frontpage_fields->field_url_business['und'][0]['url']:'';
  $url_business_target = !empty($frontpage_fields->field_url_business['und'][0]['attributes']['target'])?$frontpage_fields->field_url_business['und'][0]['attributes']['target']:'';

  $url_expert = !empty($frontpage_fields->field_url_expert['und'][0]['url'])?$frontpage_fields->field_url_expert['und'][0]['url']:'';
  $url_expert_target = !empty($frontpage_fields->field_url_expert['und'][0]['attributes']['target'])?$frontpage_fields->field_url_expert['und'][0]['attributes']['target']:'';

  $url_partner = !empty($frontpage_fields->field_url_partner['und'][0]['url'])?$frontpage_fields->field_url_expert['und'][0]['url']:'';
  $url_partner_target = !empty($frontpage_fields->field_url_partner['und'][0]['attributes']['target'])?$frontpage_fields->field_url_partner['und'][0]['attributes']['target']:'';

  $title_newsletter = $frontpage_fields->field_front_title_newsletter['und'][0]['value'];
  $text_newsletter = $frontpage_fields->field_front_text_newsletter['und'][0]['value'];
  $url_button_newsletter = $frontpage_fields->field_front_link_newsletter['und'][0]['url'];
  $title_button_newsletter = $frontpage_fields->field_front_link_newsletter['und'][0]['title'];
?>

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
            <a href="<?php echo $url_business; ?>" target="<?php echo $url_business_target; ?>"><img src="<?php echo $image_business; ?>" alt="slide business" /></a>
          </li>
          <li>
            <div class="border"></div>
            <div class="text <?php echo $text_align_expert; ?>"><div class="inner-content"><?php echo $text_expert ?></div></div>
            <a href="<?php echo $url_expert; ?>" target="<?php echo $url_expert_target; ?>"><img src="<?php echo $image_experts; ?>" alt="slide expert" /></a>
          </li>
          <li>
            <div class="border"></div>
            <div class="text <?php echo $text_align_partner; ?>"><div class="inner-content"><?php echo $text_partner ?></div></div>
            <a href="<?php echo $url_partner; ?>" target="<?php echo $url_partner_target; ?>"><img src="<?php echo $image_partners; ?>" alt="slide partner" /></a>
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
            <a href="<?php echo $business_link; ?>"><?php echo $business_title; ?></a>
          </div>
        </div>
        <div class="large-4 medium-4 small-12 columns block-content">
          <div class="inner-content expert">
            <?php echo $expert_text; ?>
            <a href="<?php echo $expert_link; ?>"><?php echo $expert_title; ?></a>
          </div>
        </div>
        <div class="large-4 medium-4 small-12 columns block-content">
          <div class="inner-content partner">
            <?php echo $partner_text; ?>
            <a href="<?php echo $partner_link; ?>"><?php echo $partner_title; ?></a>
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
          <div class="large-12 columns"><h2><?php echo $title_facts; ?></h2></div>
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
    <div class="under-bar-front" id="underbar">
      <?php print render($page['maps_front']); ?>
    </div>
  <?php endif; ?>

  <?php if ($title_newsletter != '' && $text_newsletter != ''): ?>
    <div class="newsletter">
        <div class="row">
            <div class="large-12">
                <h2><?php echo $title_newsletter; ?></h2>
                <p><?php echo $text_newsletter; ?></p>
                <a href="<?php echo $url_button_newsletter; ?>" class="button large"><?php echo $title_button_newsletter; ?></a>
            </div>
        </div>
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
