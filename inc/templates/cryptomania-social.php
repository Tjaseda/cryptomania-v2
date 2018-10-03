<div class="wrap">
  <h1>Social Info Options</h1>
  <?php settings_errors(); ?>
  <form method="post" action="options.php">
    <?php do_settings_sections( 'cryptomania_options_social' ); ?>
    <?php settings_fields( 'cryptomania_options_social' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
