<?php

/**
* Plugin Name: Validador de Diploma
* Plugin URI: http://sp.senac.br
* Description: Plugin Tela de Configuracao
* Version: 1.0.0
* Author: LFABM
* Author URI http://sp.senac.br
* License: CC BY
*
*/
// Activates debugging on WP
// wp-config.php constant WP_DEBUG

register_activation_hook(__FILE__ , 'lfabm_diploma_authentication_install');

function lfabm_diploma_authentication_install(){
	
	// Documentacao: https://codex.wordpress.org/Creating_Tables_with_plugins

	global $wpdb;

	$wpdb->query("CREATE TABLE wp_lfabm_diploma(id mediumint(9) NOT NULL AUTO_INCREMENT,time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL, name tinytext NOT NULL, codigo char(10) NOT NULL, UNIQUE KEY id (id))");

	$page_title = 'Validador de Diploma';

	$page_name = 'Plugin Validador de Diploma';


	//opções gravadas em wp_option
	delete_option("ifabm_diploma_authentication_page_title"); // deleta
	add_option("ifabm_diploma_authentication_page_title", $page_title, '', 'yes'); // depois adiciona

	delete_option("ifabm_diploma_authentication_page_name");
	add_option("ifabm_diploma_authentication_page_name", $page_name, '', 'yes');

	delete_option("ifabm_diploma_authentication_page_id");
	add_option("ifabm_diploma_authentication_page_id", '0', '', 'yes');


	$page = get_page_by_title($page_title);
	
	if(!$page){
		//cria o post
		$p = array();
		$p['post_title'] = $page_title;
		$p['post_content'] = '[ifabm_diploma_authentication_page_form]';
		$p['post_status'] = 'publish';
		$p['post_type'] = 'page';
		$p['ping_status'] = 'closed';
		$p['comment_status'] = 'closed';
		$p['post_category'] = array(1);//sem categoria

		//grava post
		$page_id = wp_insert_post($p);
	
	}else{
		//faz update no post caso o pluging ja tenha sido instalado previamente

		$page_id = $page->ID;

		//verifica se a pagina não esta na lixeira
		$page->post_status = 'publish';
		$page->post_content = '[ifabm_diploma_authentication_page_form]';
		$page_id = wp_update_post($page);
	}

	delete_option("ifabm_diploma_authentication_page_id");
	add_option("ifabm_diploma_authentication_page_id",$page_id);

}


register_deactivation_hook(__FILE__ , 'lfabm_diploma_authentication_disable');

function lfabm_diploma_authentication_disable(){
	
	global $wpdb;

	$wpdb->query("DROP TABLE IF EXISTS wp_lfabm_diploma");

	//pega o titulo e o nome da pag 
	$page_title = get_option("ifabm_diploma_authentication_page_title");
	$page_name = get_option("ifabm_diploma_authentication_page_name");

	//recupera o id da pagina do plugin
	$page_id = get_option('ifabm_diploma_authentication_page_id');

	if($page_id){
		wp_delete_post($page_id);//coloca a pagina na lixeira
	}

	delete_option("ifabm_diploma_authentication_page_title");
	delete_option("ifabm_diploma_authentication_page_name");
	delete_option("ifabm_diploma_authentication_page_id");
}

//Configuração do Plugin

add_action('admin_menu','lfabm_diploma_authentication_menu');

function lfabm_diploma_authentication_menu(){
	add_submenu_page('options-general.php','P&aacute;gina de Configuração do Plugin de Validade&ccedil;&atilde;o de Diploma',
					  'Configuração do Plugin do Validador de Diploma',
					  'administrator',
					  'lfabm_diploma_authentication-settings',
					  'lfabm_diploma_authentication_settings_page');
}
function lfabm_diploma_authentication_settings_page(){

	if(isset ($_POST['nome'])){ // se estiver setado
		if(!empty($_POST['nome'])){
			global $wpdb; 

			$cod = generateRandomString(); //'LIndih723kjh'; 
			if( $wpdb->query("INSERT INTO wp_lfabm_diploma (name,codigo) VALUES ('{$_POST['nome']}','$cod')")) {

				$msg = 'Diploma para: '.$_POST['nome'].', criado e gravado com sucesso, c&oacute;digo gerado: '.$cod;
			} else {

				$msg = 'Erro ao criar e gravar o diploma';
			}
		}
	}
	include ('templates/config_tp1.php');

}


function generateRandomString($length = 10){ // função para gerar codigos randomicos 

	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for($i = 0; $i < $length; $i++){
		$randomString .= $characters[rand(0,$charactersLength - 1)]; // mantenha o que tem aqui e junto mais o que estou passando
	}

	return $randomString;
}

function cria_shortcode($codigo){

	if(isset($_POST['codigo'])){

		global $wpdb;

		$diploma = $wpdb->get_results("SELECT name FROM wp_lfabm_diploma WHERE codigo = '{$_POST['codigo']}'");

		if(isset($diploma)){
			if(!empty($diploma)){
				$nome = 'Diploma Emitido para: ' .$diploma[0]->name; 
			}else{
				$nome = 'C&oacute;digo Inv&aacute;lido';
			}
		}
	}

	ob_start();
	require(__DIR__.'/templates/validador_tpl.php');
	return ob_get_clean();
}

//executa a função que gera a tea de validacao do diploma quando encontrar o shortcode passado como primeiro paramentro na funcao add_shortcode
add_shortcode('ifabm_diploma_authentication_page_form', 'cria_shortcode');

?>