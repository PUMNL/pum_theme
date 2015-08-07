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

    $type = '';
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

<div class="page <?php echo $fulltrail; ?> ">
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

<div class="l-banner" style="border-color: <?php echo $borderColor;?>">
    <?php if (!empty($page['banner'])): ?>
        <div class="wrapper">
            <?php print render($page['banner']); ?>
        </div>
    <?php endif; ?>
</div>

    <?php if ($messages): ?>
        <section class="l-messages row">
            <div class="wrapper">
                <?php if ($messages): print $messages; endif; ?>
             </div>
         </section>
    <?php endif; ?>

    <div class="main">
        <div class="wrapper">
            <div class="main-content">
                <?php if ($breadcrumb): print $breadcrumb; endif; ?>

                <?php if (!empty($tabs)): ?>
                    <?php print render($tabs); ?>
                    <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
                <?php endif; ?>

                <?php print render($page['content']); ?>
            </div>

            <?php if (!empty($page['sidebar_first'])): ?>
              <div role="complementary" class="sidebar-first columns sidebar">
                <?php print render($page['sidebar_first']); ?>
              </div>
            <?php endif; ?>

            <?php if (!empty($page['sidebar_second'])): ?>
              <div role="complementary" class="sidebar-second columns sidebar <?php echo $fulltrail; ?>">
                <div class="inner">
                  <?php print render($page['sidebar_second']); ?>
                </div>
              </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if (!empty($page['undermain'])): ?>
        <div class="l-undermain">
            <div class="wrapper">
                <?php print render($page['undermain']); ?>
            </div>
        </div>
    <?php endif; ?>

</div>

<div class="l-footer" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
        <div class="footer wrapper">
            <?php print render($page['footer']); ?>
        </div>
    <?php endif; ?>
</div>
