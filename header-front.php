<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
 */

$header_subtitle = get_option( 'header_subtitle' );

$fomrAction = get_option( 'form_action_link' );
$formUValue = get_option( 'form_u_value' );
$formIDValue = get_option( 'form_id_value' );
$field1Name = get_option( 'field_1_name' );
$field2Name = get_option( 'field_2_name' );
$checkbox1Name = get_option( 'checkbox_1_name' );
$checkbox2Name = get_option( 'checkbox_2_name' );

$submitButtonText = get_option( 'submit_button_text' );
$field1Placeholder = get_option( 'field_1_placeholder_text' );
$field2Placeholder = get_option( 'field_2_placeholder_text' );
$checkboxUpdateText = get_option( 'checkbox_update_text' );
$checkboxMarketingText = get_option( 'checkbox_marketing_text' );
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cryptomania' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="c-bg-city c-bg-city--lg">

			<div class="l-pos--rel l-row l-row-sm--row-o c-nav--full c-nav--trans c-nav--mg">
				<div class="l-c l-c-lf l-cl-sm--2 l-pos--rel">
					<a class="toggle-nav toggle-nav--front" href="#">
  					<div class="toggle-nav__line"></div>
  				</a>
				</div><!-- /empty space -->

				<nav id="site-navigation" class="js-main-nav c-nav--to-front c-nav__nav c-nav__nav--front l-cl l-cl-sm--6">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
				</nav><!-- /#site-navigation -->

				<nav id="site-navigation" class="c-nav--to-front c-nav__nav--lang l-c l-c-rg l-cl-sm--2 l-pos--rel">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'language-menu',
						) );
						?>
				</nav><!-- /#site-navigation -->

			</div><!-- /nav -->
			<div>
				<div class="c-bg-city__img-wrap">

					<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																			srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																			sizes="100vw" />
					<div class="c-bg-city__overlay"></div>
				</div><!-- /c-bg-city background -->
			</div>

			<div class="c-hero-front__content">
				<img class="c-hero-front__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-small.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/logo-small.png'; ?> 556w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-middle.png'; ?> 620w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-large.png'; ?> 874w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-hi-dpi.png'; ?> 1228w"
																		sizes="(min-width: 1550px) 32vw, (min-width: 970px) 620px, (min-width: 740px) 534px, (min-width: 500px) 555px, (max-width: 500px) 100vw" />
				<!-- /logo -->

				<div class="l-wrap l-mg-b--2 l-mg-b--md-4">
					<p class="o-h o-h__3 o-txt--white o-txt--center"><?php echo $header_subtitle ?></p>
				</div><!-- /description -->

				<!-- Signup Form -->
				<div class="c-form">
				  <form class="c-form__wrap" action="<?php echo $fomrAction; ?>" method="POST">
						<input type="hidden" name="u" value="<?php echo $formUValue; ?>">
				    <input type="hidden" name="id" value="<?php echo $formIDValue; ?>">

						<div class="l-row l-row-sm--col-o l-row-md--row-o">
							<input type="text" name="<?php echo $field1Name; ?>" placeholder="<?php echo $field1Placeholder; ?>" class="c-form__input c-form__input--first" />
					    <input type="email" name="<?php echo $field2Name; ?>" placeholder="<?php echo $field2Placeholder; ?>" class="c-form__input c-form__input--second" />
						</div>

				    <input type="submit" name="submit" value="<?php echo $submitButtonText; ?>" class="c-form__button" />

				    <div class="c-form__check-wrap">
				      <input type="checkbox" data-dojo-type="dijit/form/CheckBox" id="update1" name="<?php echo $checkbox1Name; ?>" value="Y">
				      <label class="c-form__checkbox" for="update1"><span><?php echo $checkboxUpdateText; ?></span> </label>
				      <input type="checkbox" data-dojo-type="dijit/form/CheckBox" id="market1" name="<?php echo $checkbox2Name; ?>" value="Y">
				      <label class="c-form__checkbox" for="market1"><span><?php echo $checkboxMarketingText; ?></span> </label>
				    </div>
				  </form>
				</div><!-- /form -->

				<div class="l-pd--10"></div><!-- space -->

			</div><!-- /hero front content -->

		</div><!-- /c-bg-city -->

	</header><!-- /#masthead -->


	<div class="c-img-board">
		<div>
		<div class="c-img-board__img-wrap c-img-board__img-wrap--board">
			<img class="c-img-board__img--board" src="<?php echo get_template_directory_uri() . '/assets/images/board-small.png'; ?>"
																	srcset="<?php echo get_template_directory_uri() . '/assets/images/board-small.png'; ?> 380w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-middle.png'; ?> 460w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-big.png'; ?> 570w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-large.png'; ?> 1094w"
																	sizes="(min-width: 1550px) 30vw, (min-width: 970px) 516px, (min-width: 740px) 460px, (min-width: 500px) 422px, 76vw" />
		</div>
	</div>
	</div>

	<div id="content" class="site-content">
