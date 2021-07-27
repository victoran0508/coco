<?php
/*
  cms_pagination
    投稿一覧のページング
*/
function cms_pagination($pages = '', $range = 2)
{
  global $paged;

  // 文言の変更はここから
  $paging_text['prev'] = '&lt;';
  $paging_text['next'] = '&gt;';
  $paging_text['newest'] = '最新';
  $paging_text['oldest'] = '先頭';
  // 文言の変更はここまで

  if (empty($paged)) {
    $paged = 1;
  }

  if ( !isset($showitems) ) {
    $showitems = 0;
  }

  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    if (!$pages) {
      $pages = 1;
    }
  }

  $content = '';

  if(1 != $pages) {
    ob_start();

    echo '<div class="navigator">';

    if ($paged > 1 && $showitems < $pages) {
      echo '<a class="prev" href="' . esc_url(get_pagenum_link($paged - 1)) . '">'.$paging_text['prev'].'</a>';
    }

    // echo '<a href="'.esc_url(get_pagenum_link(1)).'">'.$paging_text['newest'].'</a>';

    if ($paged > 2 && $paged > $range+1 && $showitems < $pages) {
      echo '<a class="link" href="'.esc_url(get_pagenum_link(1)).'">&laquo;</a>';
    }

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
      echo ($paged == $i) ? '<span class="current">' . $i . '</span>' : '<a class="link" href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a>';
      }
    }

    // echo '<a href="'.esc_url(get_pagenum_link($pages)).'">'.$paging_text['oldest'].'</a>';

    if ($paged < $pages && $showitems < $pages) {
      echo '<a class="next" href="' . esc_url(get_pagenum_link($paged + 1)).'">'.$paging_text['next'].'</a>';
    }

    echo '</div>';

    $content = ob_get_clean();
  }

  return $content;
}
