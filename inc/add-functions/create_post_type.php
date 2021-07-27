<?php
// カスタム投稿タイプの追加
function column_custom_post_type()
{
    $labels = array(
        'name'          => 'アートメイク症例写真',
        'singular_name' => 'アートメイク症例写真',
        'menu_name'     => 'アートメイク症例写真',
        'edit_item'     => '投稿を編集',
        'view_item'     => '投稿を表示',
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'rewrite'       => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
    );
    register_post_type('column', $args);
}
add_action('init', 'column_custom_post_type');


// //　カスタム投稿のデフォルト選択カテゴリー
//function change_custom_posts_output($query) {
// $post_type = $query->query['post_type'];
//  if(is_admin() && $post_type == 'implant-case' || $post_type == 'implant-blog'){
//    $query->set('orderby', 'date');
//    $query->set('order', 'DESC');
//    return;
//  }
//}
//add_action( 'pre_get_posts', 'change_custom_posts_output' );
