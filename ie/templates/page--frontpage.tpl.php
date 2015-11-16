<?php
  $intro_text = field_get_items('node', $node, 'field_front_intro_text')[0]['value'];

  $business_text = field_get_items('node', $node, 'field_front_business_text')[0]['value'];
  $expert_text = field_get_items('node', $node, 'field_front_expert_text')[0]['value'];
  $partner_text = field_get_items('node', $node, 'field_front_partner_text')[0]['value'];
  $business_title = field_get_items('node', $node, 'field_front_business_link')[0]['title'];
  $business_link = field_get_items('node', $node, 'field_front_business_link')[0]['url'];
  $expert_title = field_get_items('node', $node, 'field_front_expert_link')[0]['title'];
  $expert_link = field_get_items('node', $node, 'field_front_expert_link')[0]['url'];
  $partner_title = field_get_items('node', $node, 'field_front_partner_link')[0]['title'];
  $partner_link = field_get_items('node', $node, 'field_front_partner_link')[0]['url'];

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

  $title_newsletter = field_get_items('node', $node, 'field_front_title_newsletter')[0]['value'];
  $text_newsletter = field_get_items('node', $node, 'field_front_text_newsletter')[0]['value'];
  $url_button_newsletter = field_get_items('node', $node, 'field_front_link_newsletter')[0]['url'];
  $title_button_newsletter = field_get_items('node', $node, 'field_front_link_newsletter')[0]['title'];
?>
<!-- /Get the values used on the frontpage -->

<!--.page -->
<div class="page">
    <div class="l-header">
        <?php if (!empty($page['topbar'])): ?>
            <div class="l-topbar">
                <div class="wrapper">
                    <?php print render($page['topbar']); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="l-header-region">
            <div class="wrapper">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
                <?php print render($page['header']); ?>
            </div>
        </div>
    </div>

  <div class="l-main">
    <div class="wrapper main">
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
      <div class="news-front">
        <?php print render($page['news_front']); ?>
      </div>
    <?php endif; ?>

    </div>
    <!--/.main region -->

    <div class="group-row-three">
      <div class="wrapper">
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

    <?php if (!empty($page['sidebar_first'])): ?>
      <div role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <div role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>
  </div>
  <!--/.main-->

  <?php if (!empty($page['maps_front'])): ?>
    <div class="under-bar-front">
      <?php print render($page['maps_front']); ?>
    </div>
  <?php endif; ?>

  <?php if ($title_newsletter != '' && $text_newsletter != ''): ?>
    <div class="newsletter">
        <div class="wrapper">
            <h2><?php echo $title_newsletter; ?></h2>
            <p><?php echo $text_newsletter; ?></p>
            <a href="<?php echo $url_button_newsletter; ?>" class="button large"><?php echo $title_button_newsletter; ?></a>
        </div>
    </div>
  <?php endif; ?>

  <!--.l-footer-->
  <div class="l-footer row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer wrapper">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>
  <!--/.footer-->
</div>
<!--/.page -->
