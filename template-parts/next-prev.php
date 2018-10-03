<?php

// Next and Previous Links on About Game Child Pages (at the bottom)

  $pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
  $size = sizeof($pagelist);
  $pages = array();

  foreach ($pagelist as $page) {
     $pages[] += $page->ID;
  }

  $nextText = get_option( 'next_link_text' );
  $prevText = get_option( 'previous_link_text' );

  $current = array_search($post->ID, $pages);
  $lastID = end($pagelist);
  $prevID;
  $nextID;

  if ($current > 0) {
    $prevID = $pages[$current-1];
  } else {
    $prevID = end($pagelist);
  }

  if ($current < ($size-1)) {
    $nextID = $pages[$current+1];
  } else {
    $nextID = $pages[0];
  }

?>

<div class="c-next">
  <div class="l-container l-pos--rel">

    <a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><i class="icon-arrow-left icon-25 c-next__cors c-next__cors--prev"></i></a>
    <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><i class="icon-arrow-right icon-25 c-next__cors c-next__cors--next"></i></a>

    <div class="l-row">
      <div class="c-next__item c-next__item--prev">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><?php echo $prevText; ?></a>
          <p class="c-next__content--title"><?php echo get_the_title($prevID); ?></a>
        </div>
      </div>

      <div class="c-next__item c-next__item--next">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><?php echo $nextText; ?></a>
          <p class="c-next__content--title"><?php echo get_the_title($nextID); ?></p>
        </div>
      </div>
    </div>

  </div>
</div>
