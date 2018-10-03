<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
 */

$footerFormText = get_option( 'footer_form_title' );
$footerText = get_option( 'footer_copyright' );
$footerLogoLink = get_option( 'footer_logo_link' );

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

$companyTwitter = get_option( 'company_twitter' );
$companyFacebook = get_option( 'company_facebook' );
$companyInstagram = get_option( 'company_instagram' );
$companyYoutube = get_option( 'company_youtube' );
?>

	</div><!-- #content -->

	<footer id="colophon" class="c-footer">

		<div class="l-cl c-bg-city c-bg-city--md">

			<div class="c-bg-city__img-wrap c-bg-city__img-wrap--trans">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																		sizes="100vw" />

				<div class="c-bg-city__overlay"></div>
			</div>

			<div class="l-w--full l-mg-y--5">

				<div class="l-wrap--sm l-mg-b--3">
					<p class="o-h o-h__2 o-txt--white o-txt--center"><?php echo $footerFormText; ?></p>
				</div>

				<!-- Signup form -->
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
				      <input type="checkbox" data-dojo-type="dijit/form/CheckBox" id="update2" name="<?php echo $checkbox1Name; ?>" value="Y">
				      <label class="c-form__checkbox" for="update2"><span><?php echo $checkboxUpdateText; ?></span> </label>
				      <input type="checkbox" data-dojo-type="dijit/form/CheckBox" id="market2" name="<?php echo $checkbox2Name; ?>" value="Y">
				      <label class="c-form__checkbox" for="market2"><span><?php echo $checkboxMarketingText; ?></span> </label>
				    </div>
				  </form>
				</div><!-- /form -->

			</div>

		</div>

		<div class="c-nav--purple">
			<div class="l-container">
				<div class="c-nav__site-info">
					<a href="<?php echo $footerLogoLink; ?>" title="Wololo"><i class="icon-wololo icon-30 c-nav__site-info__logo"></i></a>
					<p class="c-nav__site-info__text"><?php echo $footerText; ?></p>
				</div>

				<nav id="site-navigation" class=" c-nav__nav c-nav__nav--footer c-nav--full-height">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer_menu',
					) );
					?>
				</nav><!-- #footer-navigation -->

				<div class="c-nav__social">
					<div>
						<?php if( $companyTwitter ) : ?>
							<a href="<?php echo $companyTwitter; ?>" title="Twitter" target="_blank"><i class="icon-Icon_Twitter_blank icon-22 c-nav__social__icon"></i></a>
						<?php endif; ?>
						<?php if( $companyFacebook ) : ?>
							<a href="<?php echo $companyFacebook; ?>" title="Facebook" target="_blank"><i class="icon-Icon_Facebook_blank icon-22 c-nav__social__icon"></i></a>
						<?php endif; ?>
						<?php if( $companyInstagram ) : ?>
							<a href="<?php echo $companyInstagram; ?>" title="Instagram" target="_blank"><i class="icon-instagram icon-23 icon-white c-nav__social__icon"></i></a>
						<?php endif; ?>
						<?php if( $companyYoutube ) : ?>
							<a href="<?php echo $companyYoutube; ?>" title="YouTube" target="_blank"><i class="icon-youtube icon-25 icon-white c-nav__social__icon"></i></a>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
