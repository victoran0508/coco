<?php
/*
  画像サイズ
*/
function thumb_setup()
{
    // 画像サイズの設定
  // add_image_size('thumbnail_top', 310, 175 ,true );
  // add_image_size('thumbnail_list', 400, 300 ,true );
}
add_action('after_setup_theme', 'thumb_setup');



//----------------------------------------------
//     attachment_id からアイキャッチを取り出す
//----------------------------------------------
function get_thumb_url_by_id($thumb_id, $size='medium'){
    $thumb_src = wp_get_attachment_image_src($thumb_id, $size);
    if($thumb_src !== false){
        return $thumb_src[0];
    }
    return false;
}
