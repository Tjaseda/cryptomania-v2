<div class="wrap">
  <h1>Form Options</h1>
  <?php settings_errors(); ?>
  <form method="post" action="options.php">
    <?php do_settings_sections( 'cryptomania_options_form' ); ?>
    <?php settings_fields( 'cryptomania_options_form' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
