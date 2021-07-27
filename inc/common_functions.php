<?php
//----------------------------------------------
// プラグインの自動更新を有効化
// メジャーアップグレードの自動更新を有効化
//----------------------------------------------
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

//----------------------------------------------
// WordPressの出力内容を制限
//----------------------------------------------
remove_action('wp_head','wp_generator');//wordpressのヴァージョンを表示する
remove_action('wp_head', 'rsd_link');//ブログ投稿ツールを使う場合は必要
remove_action('wp_head', 'wlwmanifest_link');//Windows Live Writer投稿用
remove_action('wp_head', 'feed_links_extra', 3);//その他のフィード（カテゴリー等）へのリンクを表示
remove_action('wp_head', 'index_rel_link' );//現在の文書に対する索引（インデックス）
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );//link rel="parent"
remove_action('wp_head', 'start_post_rel_link', 10, 0 );//link rel="next"
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );//?p=投稿ID


add_filter('xmlrpc_enabled', '__return_false');//xmlrpcの無効化
/*
xmlrpcを使用する場合は、.htaccessも対応する
*/

//----------------------------------------------
//　編集画面のタブ幅を変更
//----------------------------------------------
function add_admin_custom_style() {
 echo '<style>
	.wp-editor-container textarea {
 	-o-tab-size:2;
 	-moz-tab-size:2;
 	tab-size:2;
 }
 </style>';
}
add_action( 'admin_head', 'add_admin_custom_style' );

//----------------------------------------------
//　固定ページの改行等を制御
//----------------------------------------------
function rm_wpautop($content) {
  global $post;
  // Get the keys and values of the custom fields:
  if(preg_match('|<!--handmade-->|siu',$content) || is_page()){
    remove_filter('the_content', 'wpautop');
  } else {
    add_filter('the_content', 'wpautop');
  }
  return $content;
}
// Hook into the Plugin API
add_filter('the_content', 'rm_wpautop', 9);

//----------------------------------------------
// フッターテキスト変更（左）
//----------------------------------------------
function custom_footer_admin () {
  return '<a href="http://www.zeromedical.tv/">株式会社ゼロ・メディカル</a>&nbsp;-ZERO MEDICAL-';
}
add_filter( 'admin_footer_text', 'custom_footer_admin' );

//----------------------------------------------19/01/09追記
//　先頭固定表示のチェックボックスを非表示
//----------------------------------------------
//投稿一覧ページの先頭固定表示のチェックボックスを非表示
function postlist_quick_hidden_sticky_check_box() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $(".inline-edit-col-right .inline-edit-group:eq(1) label:eq(1)").css("display","none");
        });
    </script>
    <?php
}
add_action( 'admin_head-edit.php', 'postlist_quick_hidden_sticky_check_box' );
//投稿詳細ページの先頭固定表示のチェックボックスを非表示
function postsingle_hidden_sticky_check_box() {
    echo '
    <style type="text/css">
        #sticky-span{display:none !important;}
    </style>
    ';
}
add_action( 'admin_print_styles-post.php', 'postsingle_hidden_sticky_check_box' );


//----------------------------------------
// フォントサイズボタン追加
//----------------------------------------
function ilc_mce_buttons( $buttons ) {
  array_push( $buttons, "fontsizeselect" );
  return $buttons;
}
add_filter( "mce_buttons", "ilc_mce_buttons" );

//----------------------------------------
// 不要ボタン非表示（ビジュアルエディタ１行目）
//----------------------------------------
function tinymce_delete_buttons( $array ) {
  $array = array_diff( $array, array( 'strikethrough', 'blockquote', 'hr', 'wp_more' ) );
  return $array;
}
add_filter( 'mce_buttons', 'tinymce_delete_buttons' );

//----------------------------------------
// 不要ボタン非表示（ビジュアルエディタ２行目）
//----------------------------------------
function tinymce_delete_buttons2( $array ) {
  $array = array_diff( $array, array( 'formatselect', 'pastetext', 'removeformat', 'charmap' ) );
  return $array;
}
add_filter( 'mce_buttons_2', 'tinymce_delete_buttons2' );

//----------------------------------------
// 不要ボタン非表示（テキストエディタ）
//----------------------------------------
function et_print_styles() {
  echo '<style TYPE="text/css">
  #qt_content_block,
  #qt_content_del,
  #qt_content_link,
  #qt_content_ins,
  #qt_content_img,
  #qt_content_code,
  #qt_content_more,
  #qt_content_close {
    display:none !important;
  }
  </style>';
}
add_action( 'admin_print_styles', 'et_print_styles', 21 );

/*　アイキャッチをテーマで有効にする*/
add_theme_support('post-thumbnails');

function cms_the_image($post_id) {
  $images = get_children(array(
  'post_parent' => $post_id,
  'post_type' => 'attachment',
  'post_mime_type' => 'image',
  'order' => 'ASC'));
  if(!empty($images)){
    return wp_get_attachment_url(array_pop(array_keys($images)));
  } else {
    return '';
  }
}

//----------------------------------------------
// 固定ページ内のimage呼び出しを補完
//----------------------------------------------
function replaceImagePath($arg) {
  $content = str_replace('"images/', '"' . get_template_directory_uri() . '/images/', $arg);
  //background-image: url(images/sec04_img01.jpg)のような文字列を変換、url()前後の半角スペース揺れも対応
  if(strpos($content, 'background-image')){
	  $content = preg_replace('/url(| )\((| )images/i', 'url(' . get_template_directory_uri() . '/images/', $content);
  }
  return $content;
}
add_action('the_content', 'replaceImagePath');


//----------------------------------------------
// 固定ページのビジュアルモード非表示
//----------------------------------------------
function disable_visual_editor_in_page() {
  global $typenow;
  if( $typenow == 'page' || $typenow == 'mw-wp-form' ) {
    add_filter( 'user_can_richedit', 'disable_visual_editor_filter' );
  }
}
function disable_visual_editor_filter() {
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );

//----------------------------------------------
// カテゴリーの階層維持
//----------------------------------------------
function solecolor_wp_terms_checklist_args( $args, $post_id ) {
  if ( $args[ 'checked_ontop' ] !== false ) {
    $args[ 'checked_ontop' ] = false;
  }
  return $args;
}
add_filter( 'wp_terms_checklist_args', 'solecolor_wp_terms_checklist_args', 10, 2 );


// ウィジェット　自由エリア追加
// register_sidebar(
//   array(
//   'name'      => 'Free Area',
//   'id'      => 'freearea',
//   'description'   => '自由エリア',
//   'before_widget' => '<div id="%1$s" class="widget %2$s">',
//   'after_widget'  => '</div>',
//   'before_title'  => '<h2 class="widgettitle">',
//   'after_title'   => '</h2>'
//   )
// );

//----------------------------------------------
// ビジュアルエディタでptをpxに変更
//----------------------------------------------
function customize_tinymce_settings($array) {
 $array['fontsize_formats'] = '10px 12px 14px 16px 18px 24px 36px';
 return $array;
}
add_filter( 'tiny_mce_before_init', 'customize_tinymce_settings' );

//----------------------------------------------
// 見出しをh4とh5に制限
//----------------------------------------------
function custom_tiny_mce_block_formats( $settings ){
  $settings[ 'block_formats' ] = '段落=p;見出し4=h4;見出し5=h5;';
  return $settings;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_block_formats' );


//----------------------------------------------
// 管理画面メニュー「投稿」テキスト変更
//----------------------------------------------
function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'お知らせ';
    $submenu['edit.php'][5][0] = 'お知らせ';
}
add_action( 'admin_menu', 'edit_admin_menus' );

//----------------------------------------------
// 編集者ユーザー権限を持たないユーザー（投稿者等）向けに表示を制限
//----------------------------------------------
if (!current_user_can('edit_users')) {
	function remove_menu() {
	  remove_menu_page( 'edit-comments.php' ); // コメント
	  remove_menu_page( 'link-manager.php' ); // リンク
		remove_menu_page( 'profile.php' ); // プロフィール
		remove_menu_page( 'tools.php' ); // ツール
		remove_menu_page( 'update-core.php' );
		remove_menu_page( 'plugins.php' );
		remove_menu_page( 'functions.php' );
	}
	add_action('admin_menu', 'remove_menu');
}

//----------------------------------------------
// タイトルを空白で登録した場合にタイトルなしで表示する
//----------------------------------------------
function if_empty_title( $title ) {
    if ( empty($title)) {
        $title = 'タイトルなし';
    }
    return $title;
}
add_filter( 'the_title', 'if_empty_title', 10, 2 );

//----------------------------------------------
// 	投稿文書テンプレートの関数
//----------------------------------------------
function single_sentence_output($post_id){
	$output = '';
	$headline_01 = get_post_meta($post_id, 'headline_01', true);
	$sentence_01 = get_post_meta($post_id, 'sentence_01', true);
	if($headline_01){
		$output .= '<div class="postdata short"><h3>'.esc_attr($headline_01).'</h3>';
		$output .= wpautop(wp_kses_post($sentence_01)).'</div>';
	}
	$headline_02 = get_post_meta($post_id, 'headline_02', true);
	$sentence_02 = get_post_meta($post_id, 'sentence_02', true);
	if($headline_02){
		$output .= '<div class="postdata short"><h4>'.wp_kses_post($headline_02).'</h4>';
		$output .= wpautop(wp_kses_post($sentence_02) ).'</div>';
	}
	$digest = get_post_meta($post_id, 'digest', true);
	if($digest){
		$output .= '<div class="postdata"><h3>まとめ</h3>';
		$output .= wpautop(wp_kses_post($digest) ).'</div>';
	}
	return $output;
}


//----------------------------------------------
// 	管理画面内のCSS設定
//----------------------------------------------
// function my_admin_style() {
// 	wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
// }
// add_action('admin_print_styles', 'my_admin_style');


//----------------------------------------------
// 出力件数設定
//----------------------------------------------

function change_posts_per_page($query) {
	/* 管理画面,メインクエリに干渉しないために必須 */
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}

	if ( $query->is_post_type_archive('column') ) {
		$query->set( 'posts_per_page', 12 );
		return;
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//----------------------------------------------
// 管理画面の固定ページ一覧にスラッグを表示
//----------------------------------------------
function add_page_columns_name($columns) {
    $columns['slug'] = "スラッグ";
    return $columns;
}
function add_page_column($column_name, $post_id) {
    if( $column_name == 'slug' ) {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2);

//----------------------------------------------
// get_post_typeの拡張ラッパー
//----------------------------------------------
function get_my_post_type(){
	$post_type = get_post_type();
	if(!$post_type){
		if(is_tax()){
			$taxonomy = get_query_var( 'taxonomy' );
			$post_type = get_taxonomy( $taxonomy )->object_type[0];
		}elseif(is_archive()){
			$post_type = get_query_var( 'post_type' );
		}
	}
	return $post_type;
}


/**
* h2英字スラッグを表示する
*
* @return string 英字スラッグ
*/
function show_en_slug()
{

    //その他の固定ページ
    if(is_page()){
        $page_obj = get_page(get_the_ID());
        if($page_obj){
            return en_slug_adjust($page_obj->post_name);
        }
    }
    //通常投稿は共通
    if(is_home() || is_category() || is_singular('post')){
        return 'News';
    }
    $post_type = get_my_post_type();
    //通常投稿以外は、カスタム投稿のスラッグを表示
    if($post_type !== 'post'){
        return en_slug_adjust($post_type);
    }
    return false;
}
/**
* 英字スラッグの表示ヘルパー
*
* @param string 英字スラッグ
* @return string 整理された英字スラッグ
*/
function en_slug_adjust($slug)
{
    if(strpos($slug, '-') !== false){
        $slug = str_replace("-", " ", $slug);
    }
    return ucfirst($slug);
}
