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
jQuery('<a href="/user/password" class="button">Request new password</a>').insertAfter('#user-login-block-form-fields .button.form-submit');
jQuery('#button_space').insertAfter('.button.form-submit');

jQuery('.block-block-11').width('45%');
jQuery('.block-block-11').css('float','left');
jQuery('#user-login').width('50%');
jQuery('#user-login').css('float','right');
jQuery('<h4><b>Login Customers</b></h4>').insertBefore('#user-login div #user-login-block-container');

jQuery('.block-block-11 .user-login-block-container').css({ top: jQuery('#edit-submit--5').position().top });
</script>