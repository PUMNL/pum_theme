<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function pum_form_system_theme_settings_alter(&$form, &$form_state) {
	if (!isset($form['zurb_foundation'])) {
	    $form['zurb_foundation'] = array(
	      '#type' => 'vertical_tabs',
	      '#weight' => -10,
	    );	    
    }
	
	$form['zurb_foundation']['pum_cookies'] = array(
      '#type' => 'fieldset',
      '#title' => t('PUM Cookies'),
      '#collapsible' => TRUE,
    );
    
    $form['zurb_foundation']['pum_cookies']['pum_cookie_title'] = array(
      '#type' => 'textfield',
      '#title' => t('Cookie Title'),
      '#description' => t('Enter the title that should appear on the cookiescreen.'),
      '#default_value' => theme_get_setting('pum_cookie_title'),
      
    );
    
	$form['zurb_foundation']['pum_cookies']['pum_cookie_text'] = array(
      '#type' => 'textarea',
      '#title' => t('Cookie Message'),
      '#description' => t('Enter the message that should appear on the cookiescreen.'),
      '#default_value' => theme_get_setting('pum_cookie_text'),
      
    );
	
  	return system_settings_form($form);
}
