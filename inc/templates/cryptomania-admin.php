<div class="wrap">
  <h1>General Theme Options</h1>
  <?php settings_errors(); ?>
  <form method="post" action="options.php">
    <?php do_settings_sections( 'cryptomania_options' ); ?>
    <?php settings_fields( 'cryptomania_options' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
