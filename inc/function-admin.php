<?php

/*
@package cryptomania
  ====================================
        ADMIN PAGE
  ====================================
*/

function cryptomania_admin_menu() {
    //Create admin page
    add_menu_page( 'General Theme Options', 'Cryptomania', 'manage_network_options', 'cryptomania_options', 'cryptomania_theme_create_page', get_template_directory_uri() . '/assets/images/Favicon.png', 3  );

    add_submenu_page( 'cryptomania_options', 'General Theme Options', 'General', 'manage_network_options', 'cryptomania_options', 'cryptomania_theme_create_page' );
    add_submenu_page( 'cryptomania_options', 'Cryptomania Form Options', 'Form', 'manage_network_options', 'cryptomania_options_form', 'cryptomania_theme_form_settings' );
    add_submenu_page( 'cryptomania_options', 'Cryptomania Social Options', 'Social', 'manage_network_options', 'cryptomania_options_social', 'cryptomania_theme_social_settings' );

    // General
    register_setting( 'cryptomania_options', 'header_subtitle' );
    register_setting( 'cryptomania_options', 'footer_form_title' );
    register_setting( 'cryptomania_options', 'footer_copyright' );
    register_setting( 'cryptomania_options', 'footer_logo_link' );
    register_setting( 'cryptomania_options', '404_title' );
    register_setting( 'cryptomania_options', '404_button_link' );
    register_setting( 'cryptomania_options', '404_button_title' );
    register_setting( 'cryptomania_options', '404_button_text' );
    register_setting( 'cryptomania_options', 'next_link_text' );
    register_setting( 'cryptomania_options', 'previous_link_text' );
    // Form
    register_setting( 'cryptomania_options_form', 'form_action_link' );
    register_setting( 'cryptomania_options_form', 'form_u_value' );
    register_setting( 'cryptomania_options_form', 'form_id_value' );
    register_setting( 'cryptomania_options_form', 'field_1_name' );
    register_setting( 'cryptomania_options_form', 'field_2_name' );
    register_setting( 'cryptomania_options_form', 'checkbox_1_name' );
    register_setting( 'cryptomania_options_form', 'checkbox_2_name' );
    register_setting( 'cryptomania_options_form', 'submit_button_text' );
    register_setting( 'cryptomania_options_form', 'field_1_placeholder_text' );
    register_setting( 'cryptomania_options_form', 'field_2_placeholder_text' );
    register_setting( 'cryptomania_options_form', 'checkbox_update_text' );
    register_setting( 'cryptomania_options_form', 'checkbox_marketing_text' );
    //Social
    register_setting( 'cryptomania_options_social', 'company_name' );
    register_setting( 'cryptomania_options_social', 'company_phone' );
    register_setting( 'cryptomania_options_social', 'company_email' );
    register_setting( 'cryptomania_options_social', 'company_address' );
    register_setting( 'cryptomania_options_social', 'company_twitter' );
    register_setting( 'cryptomania_options_social', 'company_facebook' );
    register_setting( 'cryptomania_options_social', 'company_instagram' );
    register_setting( 'cryptomania_options_social', 'company_youtube' );


    // General
    add_settings_section( 'cryptomania-header-options', '', 'cryptomania_header_options', 'cryptomania_options' );
    add_settings_section( 'cryptomania-footer-options', '', 'cryptomania_footer_options', 'cryptomania_options' );
    add_settings_section( 'cryptomania-404-options', '', 'cryptomania_404_options', 'cryptomania_options' );
    add_settings_section( 'cryptomania-other-options', '', 'cryptomania_other_options', 'cryptomania_options' );
    // Form
    add_settings_section( 'cryptomania-configuration-options', '', 'cryptomania_configuration_options', 'cryptomania_options_form' );
    add_settings_section( 'cryptomania-form-text-options', '', 'cryptomania_form_text_options', 'cryptomania_options_form' );
    // Social
    add_settings_section( 'cryptomania-social-contact-options', '', 'cryptomania_social_contact_options', 'cryptomania_options_social' );
    add_settings_section( 'cryptomania-social-media-options', '', 'cryptomania_social_media_options', 'cryptomania_options_social' );


    // General
    add_settings_field( 'header_subtitle', 'Header Subtitle', 'cryptomania_header_subtitle', 'cryptomania_options', 'cryptomania-header-options' );
    add_settings_field( 'footer_form_title', 'Footer Form Title', 'cryptomania_footer_form_title', 'cryptomania_options', 'cryptomania-footer-options' );
    add_settings_field( 'footer_copyright', 'Footer Text', 'cryptomania_footer_text', 'cryptomania_options', 'cryptomania-footer-options' );
    add_settings_field( 'footer_logo_link', 'Footer Logo Link', 'cryptomania_footer_logo_link', 'cryptomania_options', 'cryptomania-footer-options' );
    add_settings_field( '404_title', '404 Site Title', 'cryptomania_404_title', 'cryptomania_options', 'cryptomania-404-options' );
    add_settings_field( '404_button_link', '404 Button Link', 'cryptomania_404_button_link', 'cryptomania_options', 'cryptomania-404-options' );
    add_settings_field( '404_button_title', '404 Button Title', 'cryptomania_404_button_title', 'cryptomania_options', 'cryptomania-404-options' );
    add_settings_field( '404_button_text', '404 Button Text', 'cryptomania_404_button_text', 'cryptomania_options', 'cryptomania-404-options' );
    add_settings_field( 'next_link_text', 'Next Link Text', 'cryptomania_next_text', 'cryptomania_options', 'cryptomania-other-options' );
    add_settings_field( 'previous_link_text', 'Previous Link Text', 'cryptomania_prev_text', 'cryptomania_options', 'cryptomania-other-options' );
    // Form
    add_settings_field( 'form_action_link', 'Form Action Link', 'cryptomania_form_action_link', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'form_u_value', 'Form U Value', 'cryptomania_form_u_value', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'form_id_value', 'Form ID Value', 'cryptomania_form_id_value', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'field_1_name', 'Field 1 Name', 'cryptomania_field_1_name', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'field_2_name', 'Field 2 Name', 'cryptomania_field_2_name', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'checkbox_1_name', 'Checkbox 1 Name', 'cryptomania_checkbox_1_name', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'checkbox_2_name', 'Checkbox 2 Name', 'cryptomania_checkbox_2_name', 'cryptomania_options_form', 'cryptomania-configuration-options' );
    add_settings_field( 'submit_button_text', 'Submit Button Text', 'cryptomania_submit_button_text', 'cryptomania_options_form', 'cryptomania-form-text-options' );
    add_settings_field( 'field_1_placeholder_text', 'Field 1 Placeholder Text', 'cryptomania_field_1_placeholder_text', 'cryptomania_options_form', 'cryptomania-form-text-options' );
    add_settings_field( 'field_2_placeholder_text', 'Field 2 Placeholder Text', 'cryptomania_field_2_placeholder_text', 'cryptomania_options_form', 'cryptomania-form-text-options' );
    add_settings_field( 'checkbox_update_text', 'Checkbox Update Text', 'cryptomania_checkbox_update_text', 'cryptomania_options_form', 'cryptomania-form-text-options' );
    add_settings_field( 'checkbox_marketing_text', 'Checkbox Marketing Text', 'cryptomania_checkbox_marketing_text', 'cryptomania_options_form', 'cryptomania-form-text-options' );
    //Social
    add_settings_field( 'company_name', 'Company Name', 'cryptomania_company_name', 'cryptomania_options_social', 'cryptomania-social-contact-options' );
    add_settings_field( 'company_phone', 'Company Phone', 'cryptomania_company_phone', 'cryptomania_options_social', 'cryptomania-social-contact-options' );
    add_settings_field( 'company_email', 'Company Email', 'cryptomania_company_email', 'cryptomania_options_social', 'cryptomania-social-contact-options' );
    add_settings_field( 'company_address', 'Company Address', 'cryptomania_company_address', 'cryptomania_options_social', 'cryptomania-social-contact-options' );
    add_settings_field( 'company_twitter', 'Twitter', 'cryptomania_company_twitter', 'cryptomania_options_social', 'cryptomania-social-media-options' );
    add_settings_field( 'company_facebook', 'Facebook', 'cryptomania_company_facebook', 'cryptomania_options_social', 'cryptomania-social-media-options' );
    add_settings_field( 'company_instagram', 'Instagram', 'cryptomania_company_instagram', 'cryptomania_options_social', 'cryptomania-social-media-options' );
    add_settings_field( 'company_youtube', 'YouTube', 'cryptomania_company_youtube', 'cryptomania_options_social', 'cryptomania-social-media-options' );

}

add_action('admin_menu', 'cryptomania_admin_menu');


/*
*===================================================================================================================
*                                    FIELDS DISPLAY FUNCTIONS
*===================================================================================================================
*/
/*
*========================
    SOCIAL FIELDS
*========================
*/
function cryptomania_company_youtube() {
  $youtubeURL = html_entity_decode( esc_attr( get_option( 'company_youtube' ) ) );
  echo '<input id="company_youtube" class="regular-text" type="url" name="company_youtube" value="'.$youtubeURL.'" placeholder="https://..." />';
}

function cryptomania_company_instagram() {
  $instagramURL = html_entity_decode( esc_attr( get_option( 'company_instagram' ) ) );
  echo '<input id="company_instagram" class="regular-text" type="url" name="company_instagram" value="'.$instagramURL.'" placeholder="https://..." />';
}

function cryptomania_company_facebook() {
  $facebookURL = html_entity_decode( esc_attr( get_option( 'company_facebook' ) ) );
  echo '<input id="company_facebook" class="regular-text" type="url" name="company_facebook" value="'.$facebookURL.'" placeholder="https://..." />';
}

function cryptomania_company_twitter() {
  $twitterURL = html_entity_decode( esc_attr( get_option( 'company_twitter' ) ) );
  echo '<input id="company_twitter" class="regular-text" type="url" name="company_twitter" value="'.$twitterURL.'" placeholder="https://..." />';
}

function cryptomania_company_address() {
  $companyAddress = html_entity_decode( esc_attr( get_option( 'company_address' ) ) );
  echo '<textarea type="textares" rows="7" cols="50" id="company_address" name="company_address">'.$companyAddress.'</textarea>';
}

function cryptomania_company_email() {
  $companyEmail = html_entity_decode( esc_attr( get_option( 'company_email' ) ) );
  echo '<input id="company_email" class="regular-text" type="email" name="company_email" value="'.$companyEmail.'" placeholder="example@mail.com" />';
}

function cryptomania_company_phone() {
  $companyPhone = html_entity_decode( esc_attr( get_option( 'company_phone' ) ) );
  echo '<input id="company_phone" class="regular-text" type="text" name="company_phone" value="'.$companyPhone.'" />';
}

function cryptomania_company_name() {
  $companyName = html_entity_decode( esc_attr( get_option( 'company_name' ) ) );
  echo '<input id="company_name" class="regular-text" type="text" name="company_name" value="'.$companyName.'" />';
}

/*
*========================
    FORM FIELDS
*========================
*/
function cryptomania_checkbox_marketing_text() {
  $checkbox2Text = html_entity_decode( esc_attr( get_option( 'checkbox_marketing_text' ) ) );
  echo '<input id="checkbox_marketing_text" class="regular-text" type="text" name="checkbox_marketing_text" value="'.$checkbox2Text.'" />';
}

function cryptomania_checkbox_update_text() {
  $checkbox1Text = html_entity_decode( esc_attr( get_option( 'checkbox_update_text' ) ) );
  echo '<input id="checkbox_update_text" class="regular-text" type="text" name="checkbox_update_text" value="'.$checkbox1Text.'" />';
}

function cryptomania_field_2_placeholder_text() {
  $field2Text = html_entity_decode( esc_attr( get_option( 'field_2_placeholder_text' ) ) );
  echo '<input id="field_2_placeholder_text" class="regular-text" type="text" name="field_2_placeholder_text" value="'.$field2Text.'" />';
}

function cryptomania_field_1_placeholder_text() {
  $field1Text = html_entity_decode( esc_attr( get_option( 'field_1_placeholder_text' ) ) );
  echo '<input id="field_1_placeholder_text" class="regular-text" type="text" name="field_1_placeholder_text" value="'.$field1Text.'" />';
}

function cryptomania_submit_button_text() {
  $submitButton = html_entity_decode( esc_attr( get_option( 'submit_button_text' ) ) );
  echo '<input id="submit_button_text" class="regular-text" type="text" name="submit_button_text" value="'.$submitButton.'" />';
}

function cryptomania_checkbox_2_name() {
  $checkbox2 = html_entity_decode( esc_attr( get_option( 'checkbox_2_name' ) ) );
  echo '<input id="checkbox_2_name" class="regular-text" type="text" name="checkbox_2_name" value="'.$checkbox2.'" />';
}

function cryptomania_checkbox_1_name() {
  $checkbox1 = html_entity_decode( esc_attr( get_option( 'checkbox_1_name' ) ) );
  echo '<input id="checkbox_1_name" class="regular-text" type="text" name="checkbox_1_name" value="'.$checkbox1.'" />';
}

function cryptomania_field_2_name() {
  $field2 = html_entity_decode( esc_attr( get_option( 'field_2_name' ) ) );
  echo '<input id="field_2_name" class="regular-text" type="text" name="field_2_name" value="'.$field2.'" />';
}

function cryptomania_field_1_name() {
  $field1 = html_entity_decode( esc_attr( get_option( 'field_1_name' ) ) );
  echo '<input id="field_1_name" class="regular-text" type="text" name="field_1_name" value="'.$field1.'" />';
}

function cryptomania_form_id_value() {
  $formIDValue = html_entity_decode( esc_attr( get_option( 'form_id_value' ) ) );
  echo '<input id="form_id_value" class="regular-text" type="text" name="form_id_value" value="'.$formIDValue.'" />';
}

function cryptomania_form_u_value() {
  $formUValue = html_entity_decode( esc_attr( get_option( 'form_u_value' ) ) );
  echo '<input id="form_u_value" class="regular-text" type="text" name="form_u_value" value="'.$formUValue.'" />';
}

function cryptomania_form_action_link() {
  $formAction = html_entity_decode( esc_attr( get_option( 'form_action_link' ) ) );
  echo '<input id="form_action_link" class="regular-text" type="url" name="form_action_link" value="'.$formAction.'" placeholder="https://..."/>';
}

/*
*========================
    GENERAL FIELDS
*========================
*/
function cryptomania_prev_text() {
  $prevText = html_entity_decode( esc_attr( get_option( 'previous_link_text' ) ) );
  echo '<input id="previous_link_text" class="regular-text" type="text" name="previous_link_text" value="'.$prevText.'" />';
}

function cryptomania_next_text() {
  $nextText = html_entity_decode( esc_attr( get_option( 'next_link_text' ) ) );
  echo '<input id="next_link_text" class="regular-text" type="text" name="next_link_text" value="'.$nextText.'" />';
}

function cryptomania_404_button_text() {
  $fofBtnText = html_entity_decode( esc_attr( get_option( '404_button_text' ) ) );
  echo '<input id="404_button_text" class="regular-text" type="text" name="404_button_text" value="'.$fofBtnText.'" />';
}

function cryptomania_404_button_title() {
  $fofBtnTitle = html_entity_decode( esc_attr( get_option( '404_button_title' ) ) );
  echo '<input id="404_button_title" class="regular-text" type="text" name="404_button_title" value="'.$fofBtnTitle.'" />';
}

function cryptomania_404_button_link() {
  $fofBtnLink = html_entity_decode( esc_attr( get_option( '404_button_link' ) ) );
  echo '<input id="404_button_link" class="regular-text" type="url" name="404_button_link" value="'.$fofBtnLink.'" placeholder="https://..." />';
}

function cryptomania_404_title() {
  $fofTitle = html_entity_decode( esc_attr( get_option( '404_title' ) ) );
  echo '<input id="404_title" class="regular-text" type="text" name="404_title" value="'.$fofTitle.'" />';
}

function cryptomania_footer_logo_link() {
  $footerLogoLink = html_entity_decode( esc_attr( get_option( 'footer_logo_link' ) ) );
  echo '<input id="footer_logo_link" class="regular-text" type="url" name="footer_logo_link" value="'.$footerLogoLink.'" placeholder="https://..." />';
}

function cryptomania_footer_text() {
  $footerText = html_entity_decode( esc_attr( get_option( 'footer_copyright' ) ) );
  echo '<input id="footer_copyright" class="regular-text" type="text" name="footer_copyright" value="'.$footerText.'" />';
}

function cryptomania_footer_form_title() {
  $footerTitle = html_entity_decode( esc_attr( get_option( 'footer_form_title' ) ) );
  echo '<input id="footer_form_title" class="regular-text" type="text" name="footer_form_title" value="'.$footerTitle.'" />';
}

function cryptomania_header_subtitle() {
  $headerSubtitle = html_entity_decode( esc_attr( get_option( 'header_subtitle' ) ) );
  echo '<input id="header_subtitle" class="regular-text" type="text" name="header_subtitle" value="'.$headerSubtitle.'" />';
}

/*
*===================================================================================================================
*                                    SECTIONS (OPTIONS) DISPLAY FUNCTIONS
*===================================================================================================================
*/
/*
*========================
    SOCIAL OPTIONS
*========================
*/
function cryptomania_social_media_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-twitter"></span> SOCIAL MEDIA INFO</h2><hr />';
}

function cryptomania_social_contact_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-phone"></span> CONTACT INFO</h2><hr />';
}

/*
*========================
    FORM OPTIONS
*========================
*/
function cryptomania_form_text_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-email-alt"></span> TEXT OPTIONS</h2><hr />';
}

function cryptomania_configuration_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-admin-links"></span> CONFIGURATION OPTIONS</h2><hr />';
}

/*
*========================
    GENERAL OPTIONS
*========================
*/

function cryptomania_other_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-admin-generic"></span> OTHER OPTIONS</h2><hr />';
}

function cryptomania_404_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-admin-generic"></span> 404 OPTIONS</h2><hr />';
}

function cryptomania_footer_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-admin-generic"></span> FOOTER OPTIONS</h2><hr />';
}

function cryptomania_header_options() {
  echo '<br /><br /><hr /><h2 class="title"><span class="dashicons dashicons-admin-generic"></span> HEADER OPTIONS</h2><hr />';
}

/*
*===================================================================================================================
*                                    SUBPAGES DISPLAY FUNCTIONS
*===================================================================================================================
*/

function cryptomania_theme_social_settings() {
  require_once( get_template_directory() . '/inc/templates/cryptomania-social.php' );
}

function cryptomania_theme_form_settings() {
  require_once( get_template_directory() . '/inc/templates/cryptomania-form.php' );
}

function cryptomania_theme_create_page() {
  require_once( get_template_directory() . '/inc/templates/cryptomania-admin.php' );
}
