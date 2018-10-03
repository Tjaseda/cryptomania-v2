<?php
/**
 * Template Name: In The Box Page
 *
 * @package Cryptomania
 */

get_header( 'child' );

$inthebox_section_1_title = get_field( 'inthebox_section_1_title' );
$inthebox_section_1_subtitle = get_field( 'inthebox_section_1_subtitle' );
$inthebox_section_1_content = get_field( 'inthebox_section_1_content' );

$inthebox_section_2_title = get_field( 'inthebox_section_2_title' );
$inthebox_section_2_subtitle = get_field( 'inthebox_section_2_subtitle' );
$inthebox_section_2_content = get_field( 'inthebox_section_2_content' );
$inthebox_section_2_image = get_field( 'inthebox_section_2_image' );

$inthebox_section_3_title = get_field( 'inthebox_section_3_title' );
$inthebox_section_3_subtitle = get_field( 'inthebox_section_3_subtitle' );
$inthebox_section_3_content = get_field( 'inthebox_section_3_content' );
$inthebox_section_3_image = get_field( 'inthebox_section_3_image' );

$inthebox_section_4_title = get_field( 'inthebox_section_4_title' );
$inthebox_section_4_subtitle = get_field( 'inthebox_section_4_subtitle' );
$inthebox_section_4_content = get_field( 'inthebox_section_4_content' );
$inthebox_section_4_image = get_field( 'inthebox_section_4_image' );

$inthebox_section_5_title = get_field( 'inthebox_section_5_title' );
$inthebox_section_5_subtitle = get_field( 'inthebox_section_5_subtitle' );
$inthebox_section_5_content = get_field( 'inthebox_section_5_content' );
$inthebox_section_5_image = get_field( 'inthebox_section_5_image' );

$inthebox_section_6_title = get_field( 'inthebox_section_6_title' );
$inthebox_section_6_subtitle = get_field( 'inthebox_section_6_subtitle' );
$inthebox_section_6_content = get_field( 'inthebox_section_6_content' );
$inthebox_section_6_image = get_field( 'inthebox_section_6_image' );

$inthebox_section_7_title = get_field( 'inthebox_section_7_title' );
$inthebox_section_7_subtitle = get_field( 'inthebox_section_7_subtitle' );
$inthebox_section_7_content = get_field( 'inthebox_section_7_content' );
$inthebox_section_7_image = get_field( 'inthebox_section_7_image' );

$inthebox_section_8_add = get_field( 'inthebox_section_8_add' );
$inthebox_section_8_title = get_field( 'inthebox_section_8_title' );
$inthebox_section_8_subtitle = get_field( 'inthebox_section_8_subtitle' );
$inthebox_section_8_content = get_field( 'inthebox_section_8_content' );
$inthebox_section_8_image = get_field( 'inthebox_section_8_image' );

$inthebox_section_9_add = get_field( 'inthebox_section_9_add' );
$inthebox_section_9_title = get_field( 'inthebox_section_9_title' );
$inthebox_section_9_subtitle = get_field( 'inthebox_section_9_subtitle' );
$inthebox_section_9_content = get_field( 'inthebox_section_9_content' );
$inthebox_section_9_image = get_field( 'inthebox_section_9_image' );

$inthebox_section_10_add = get_field( 'inthebox_section_10_add' );
$inthebox_section_10_title = get_field( 'inthebox_section_10_title' );
$inthebox_section_10_subtitle = get_field( 'inthebox_section_10_subtitle' );
$inthebox_section_10_content = get_field( 'inthebox_section_10_content' );
$inthebox_section_10_image = get_field( 'inthebox_section_10_image' );

$inthebox_section_11_add = get_field( 'inthebox_section_11_add' );
$inthebox_section_11_title = get_field( 'inthebox_section_11_title' );
$inthebox_section_11_subtitle = get_field( 'inthebox_section_11_subtitle' );
$inthebox_section_11_content = get_field( 'inthebox_section_11_content' );
$inthebox_section_11_image = get_field( 'inthebox_section_11_image' );

?>

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <!-- top coin background image-->
  <div class="c-bg-coin c-bg-coin--top">
    <img class="lazyload c-bg-coin__img c-bg-coin__img--top" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
    data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-medium.png'; ?> 600w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-big.png'; ?> 810w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-large.png'; ?> 1000w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-hi-dpi.png'; ?> 1536w"
    sizes="(min-width: 1550px) 40vw, (min-width: 970px) 50vw, 20vw" />
  </div>

  <div class="l-container l-pd-t--7 ">
    <!--
    * flexbox row:
    * on small screen displays column with reverse order,
    * from desktop screen on displays ordered row
    -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column - text:
      * flexbox column with verticaly centered content:
      * on small screen is 100% width with centered text,
      * from desktop screen is 50% width, with text positioned left
      -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--6 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $inthebox_section_1_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_1_title ?></h2><br />
          <?php endif; ?>
          <?php if( $inthebox_section_1_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_1_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $inthebox_section_1_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_1_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column - image:
      * flexbox column with verticaly centered content:
      * on small screen is 100% width with centered text,
      * from desktop screen is 50% width
      -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <div class="c-img-sec__img-wrap c-img-sec__img-wrap--box c-img-sec__img-wrap--box-right">
            <img class="lazyload c-img-sec__img c-img-sec__img--box c-img-sec__img--box-right" title="<?php echo $inthebox_section_1_title ?>" alt="<?php echo $inthebox_section_1_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?> 300w,
              <?php echo get_template_directory_uri() . '/assets/images/box-medium.jpg'; ?> 500w,
              <?php echo get_template_directory_uri() . '/assets/images/box-big.jpg'; ?> 900w,
              <?php echo get_template_directory_uri() . '/assets/images/box-large.jpg'; ?> 1300w,
              <?php echo get_template_directory_uri() . '/assets/images/box-hi-dpi.jpg'; ?> 2305w"
            sizes="(min-width: 740px) 60vw, (min-width: 500px) 70vw, 80vw" />
          </div>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $inthebox_section_2_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $inthebox_section_2_title ?>" alt="<?php echo $inthebox_section_2_title ?>" data-src="<?php echo $inthebox_section_2_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $inthebox_section_2_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $inthebox_section_2_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $inthebox_section_2_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $inthebox_section_2_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $inthebox_section_2_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $inthebox_section_2_title ?></h2><br />
              <?php endif; ?>
              <?php if( $inthebox_section_2_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $inthebox_section_2_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $inthebox_section_2_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $inthebox_section_2_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $inthebox_section_3_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_3_title ?></h2><br />
          <?php endif; ?>
          <?php if( $inthebox_section_3_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_3_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $inthebox_section_3_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_3_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $inthebox_section_3_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $inthebox_section_3_title ?>" alt="<?php echo $inthebox_section_3_title ?>"data-src="<?php echo $inthebox_section_3_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $inthebox_section_3_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $inthebox_section_3_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $inthebox_section_3_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $inthebox_section_3_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $inthebox_section_4_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $inthebox_section_4_title ?>" alt="<?php echo $inthebox_section_4_title ?>" data-src="<?php echo $inthebox_section_4_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $inthebox_section_4_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $inthebox_section_4_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $inthebox_section_4_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $inthebox_section_4_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $inthebox_section_4_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $inthebox_section_4_title ?></h2><br />
              <?php endif; ?>
              <?php if( $inthebox_section_4_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $inthebox_section_4_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $inthebox_section_4_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $inthebox_section_4_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $inthebox_section_5_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_5_title ?></h2><br />
          <?php endif; ?>
          <?php if( $inthebox_section_5_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_5_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $inthebox_section_5_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_5_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $inthebox_section_5_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $inthebox_section_5_title ?>" alt="<?php echo $inthebox_section_5_title ?>" data-src="<?php echo $inthebox_section_5_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $inthebox_section_5_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $inthebox_section_5_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $inthebox_section_5_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $inthebox_section_5_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>

      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $inthebox_section_6_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $inthebox_section_6_title ?>" alt="<?php echo $inthebox_section_6_title ?>" data-src="<?php echo $inthebox_section_6_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $inthebox_section_6_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $inthebox_section_6_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $inthebox_section_6_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $inthebox_section_6_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $inthebox_section_6_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $inthebox_section_6_title ?></h2><br />
              <?php endif; ?>
              <?php if( $inthebox_section_6_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $inthebox_section_6_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $inthebox_section_6_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $inthebox_section_6_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $inthebox_section_7_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_7_title ?></h2><br />
          <?php endif; ?>
          <?php if( $inthebox_section_7_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_7_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $inthebox_section_7_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_7_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $inthebox_section_7_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $inthebox_section_7_title ?>" alt="<?php echo $inthebox_section_7_title ?>" data-src="<?php echo $inthebox_section_7_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $inthebox_section_7_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $inthebox_section_7_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $inthebox_section_7_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $inthebox_section_7_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<?php if( $inthebox_section_8_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-o l-row-ds--row-o">
        <!-- first column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
            <!-- image of how to play page section that is always displayed-->
            <div class="c-img-sec__img-wrap">
              <?php if( $inthebox_section_8_image ): ?>

                <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $inthebox_section_8_title ?>" alt="<?php echo $inthebox_section_8_title ?>" data-src="<?php echo $inthebox_section_8_image['sizes']['pgsec_img']; ?>"
                data-srcset="<?php echo $inthebox_section_8_image['sizes']['pgsec_img']; ?> 300w,
                <?php echo $inthebox_section_8_image['sizes']['pgsec_img@2x']; ?> 600w,
                <?php echo $inthebox_section_8_image['sizes']['pgsec_img@3x']; ?> 900w,
                <?php echo $inthebox_section_8_image['sizes']['pgsec_img@4x']; ?> 1200w"
                sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

              <?php endif; ?>
            </div>
          </div>
          <!-- second column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
              <div class="l-wrap">
                <?php if( $inthebox_section_8_title ): ?>
                  <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $inthebox_section_8_title ?></h2><br />
                <?php endif; ?>
                <?php if( $inthebox_section_8_subtitle ): ?>
                  <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $inthebox_section_8_subtitle ?></p><br />
                <?php endif; ?>
                <?php if( $inthebox_section_8_content ): ?>
                  <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $inthebox_section_8_content ?></p><br />
                <?php endif; ?>
              </div>
          </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->

<?php endif ?>

<?php if( $inthebox_section_9_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-r l-row-ds--row-o">
        <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
          <div class="l-wrap">
            <?php if( $inthebox_section_9_title ): ?>
              <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_9_title ?></h2><br />
            <?php endif; ?>
            <?php if( $inthebox_section_9_subtitle ): ?>
              <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_9_subtitle ?></p><br />
            <?php endif; ?>
            <?php if( $inthebox_section_9_content ): ?>
              <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_9_content ?></p><br />
            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5">
          <!-- about us section image -->
          <div class="c-img-sec__img-wrap">
            <?php if( $inthebox_section_9_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $inthebox_section_9_title ?>" alt="<?php echo $inthebox_section_9_title ?>" data-src="<?php echo $inthebox_section_9_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $inthebox_section_9_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $inthebox_section_9_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $inthebox_section_9_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $inthebox_section_9_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>

<?php if( $inthebox_section_10_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-o l-row-ds--row-o">
        <!-- first column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
            <!-- image of how to play page section that is always displayed-->
            <div class="c-img-sec__img-wrap">
              <?php if( $inthebox_section_10_image ): ?>

                <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $inthebox_section_10_title ?>" alt="<?php echo $inthebox_section_10_title ?>" data-src="<?php echo $inthebox_section_10_image['sizes']['pgsec_img']; ?>"
                data-srcset="<?php echo $inthebox_section_10_image['sizes']['pgsec_img']; ?> 300w,
                <?php echo $inthebox_section_10_image['sizes']['pgsec_img@2x']; ?> 600w,
                <?php echo $inthebox_section_10_image['sizes']['pgsec_img@3x']; ?> 900w,
                <?php echo $inthebox_section_10_image['sizes']['pgsec_img@4x']; ?> 1200w"
                sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

              <?php endif; ?>
            </div>
          </div>
          <!-- second column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
              <div class="l-wrap">
                <?php if( $inthebox_section_10_title ): ?>
                  <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $inthebox_section_10_title ?></h2><br />
                <?php endif; ?>
                <?php if( $inthebox_section_10_subtitle ): ?>
                  <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $inthebox_section_8_subtitle ?></p><br />
                <?php endif; ?>
                <?php if( $inthebox_section_10_content ): ?>
                  <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $inthebox_section_10_content ?></p><br />
                <?php endif; ?>
              </div>
          </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>

<?php if( $inthebox_section_11_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-r l-row-ds--row-o">
        <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
          <div class="l-wrap">
            <?php if( $inthebox_section_11_title ): ?>
              <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $inthebox_section_11_title ?></h2><br />
            <?php endif; ?>
            <?php if( $inthebox_section_11_subtitle ): ?>
              <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $inthebox_section_11_subtitle ?></p><br />
            <?php endif; ?>
            <?php if( $inthebox_section_11_content ): ?>
              <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $inthebox_section_11_content ?></p><br />
            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5">
          <!-- about us section image -->
          <div class="c-img-sec__img-wrap">
            <?php if( $inthebox_section_11_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $inthebox_section_11_title ?>" alt="<?php echo $inthebox_section_11_title ?>" data-src="<?php echo $inthebox_section_11_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $inthebox_section_11_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $inthebox_section_11_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $inthebox_section_11_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $inthebox_section_11_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>


<!-- NEXT AND PREV LINKS -->
<?php get_template_part( 'template-parts/next-prev' ); ?>


<?php
get_footer();
?>
