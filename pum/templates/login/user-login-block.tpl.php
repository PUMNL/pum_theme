<div id="user-login-block-container">
  <div id="user-login-block-form-fields">
    <?php
    $elements = drupal_get_form("user_login_block");
    print drupal_render($elements);
    ?>
</div>
<div id="button_space" style="display: inline; margin-left: 5px; margin-right: 5px;"></div>
<script type="text/javascript">
jQuery('#page-title').hide();
jQuery('ul.button-group:first').hide();
jQuery('.item-list ul:first').hide();
jQuery('#user-login-block-form-fields .links').hide();
jQuery('<a href="/user/password" class="button">Forgot Password</a>').insertAfter('#user-login-block-form-fields .button.form-submit');
jQuery('#button_space').insertAfter('.button.form-submit');
</script>