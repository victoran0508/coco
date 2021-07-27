<?php

function add_filedate($filename)
{
    $file_path = get_template_directory().'/'.$filename;
    if (file_exists($file_path)) {
        $file_url = get_template_directory_uri().'/'.$filename;
        $put_query = date('ymdHis', filemtime($file_path));
        $file_href_output = $file_url.'?'.$put_query;
        return $file_href_output;
    }
}

/*
  read_scripts_and_css_files_file_name
    スクリプトとスタイルシートの読み込み
*/
function read_scripts_and_css_files()
{

  // Wordpressが読み込むjQueryをリセット
  if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array(), null);
  }
    wp_enqueue_script( 'fontplus', '//webfont.fontplus.jp/accessor/script/fontplus.js?go8Z-skfnuc%3D&aa=1&ab=2&cm=80', array(), NULL );
    wp_enqueue_script('behavior', get_template_directory_uri().'/js/behavior.js', array(), null, true);
    if (is_front_page()) {
        wp_enqueue_script('formUI', get_template_directory_uri().'/js/formUI.js', array(), null, true);
    }

    wp_enqueue_style('reset', get_template_directory_uri() .'/css/reset.adjust.css', '', null, 'all');
    // wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('reset'),NULL);
	wp_enqueue_style( 'GoogleFont', '//fonts.googleapis.com/css?family=Poppins:100', array('reset'),NULL);
    wp_enqueue_style('theme', get_template_directory_uri().'/css/theme.css', array('reset'), null, 'all');
    wp_enqueue_style('style', add_filedate('css/style.css'), array('reset'), null, 'all');
    wp_enqueue_style('sp', add_filedate('css/sp.css'), array('reset','style'), null, 'screen and (max-width:800px) and (min-width:0px)');
}

add_action('wp_enqueue_scripts', 'read_scripts_and_css_files');

/*読み込みjsにasync属性を付与する*/
// function add_async_to_script( $tag, $handle ) {
//      if ( 'fontplus' === $handle || 'behavior' === $handle ) { // wp_enqueue_scriptに指定したハンドル名以外はreturn
//          return str_replace( ' src', ' async src', $tag );
//      }
//      return $tag;
// }
// add_filter( 'script_loader_tag', 'add_async_to_script', 10, 2 );
