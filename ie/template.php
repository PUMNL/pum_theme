<?php
    function ie_preprocess_page(&$vars, $hook) {
        if (isset($vars['node'])) {
            // If the node type is "blog_madness" the template suggestion will be "page--blog-madness.tpl.php".
            $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
        }
    } 
    
 
