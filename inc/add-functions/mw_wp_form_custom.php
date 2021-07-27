<?php
//----------------------------------------------
//　mw wp formのメール内容を編集
//----------------------------------------------
/**
* @param object $Mail
* @param array $values
* @param MW_WP_Form_Data $Data
* @return object メールオブジェクト
*/
function mw_wp_form_respond_main( $Mail, $values, $Data ) {
    // $Data->get( 'hoge' ) で送信されたデータが取得できます。
    $content_body = $Mail->body;

    $menu_output = '';
    for($i=1;$i<=5;++$i){
        $menu_a_field_name = 'menu'.$i.'-a';
		$menu_b_field_name = 'menu'.$i.'-b';
        $menu_a_data = $Data->get( $menu_a_field_name );
		$menu_b_data = $Data->get( $menu_b_field_name );
        if($menu_a_data || $menu_b_data){
            if($menu_a_data){
                $menu_output .= '['.$menu_a_data.'] ';
            }
            if($menu_b_data){
				$menu_output .= $menu_b_data;
	        }
            $menu_output .= "\n";
        }
    }

    if($menu_output){
        $replace_str = "◎ご希望の診療メニュー\n".$menu_output."\n◎同じ部位にアートメイクをされた経験";
        $content_body = str_replace("◎同じ部位にアートメイクをされた経験", $replace_str, $content_body);
    }


    $Mail->body = $content_body; // 変更本文を戻す
    // $Mail->send(); で送信もできます。
    return $Mail;
}
add_filter( 'mwform_auto_mail_mw-wp-form-5', 'mw_wp_form_respond_main', 10, 3 );
add_filter( 'mwform_admin_mail_mw-wp-form-5', 'mw_wp_form_respond_main', 10, 3 );
