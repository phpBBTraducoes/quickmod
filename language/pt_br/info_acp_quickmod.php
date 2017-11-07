<?php
/**
* info_acp_quickmod.php [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese  translation by eunaumtenhoid (c) 2017 [ver 1.1.0] (https://github.com/phpBBTraducoes)
* @package language cBB QuickMod
* @version 1.1.0 17/01/2017
*
* @copyright (c) 2017 CaniDev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CAT_QUICKMOD'		=> 'QuickMod',
	'ACP_QUICKMOD_CONFIG'	=> 'Configuração principal',
	
	'QM_CONFIG_TITLE'		=> 'Configurar QuickMod',
	'QM_CONFIG_EXPLAIN'		=> 'Aqui você pode gerenciar as principais opções de moderação.<br /> Para organizar os botões, arraste-o para a posição correta na lista inferior. A visibilidade dos botões na página viewforum depende das permissões do usuário e do estado do tópico.',
	'QM_HELP'				=> 'Documentação e suporte',
	'QM_MAIN_CONFIG'		=> 'Configuração principal',
	'QM_CONFIRM'			=> 'Confirmar diálogo',
	'QM_CONFIRM_EXPLAIN'	=> 'Ativar / Desativar a caixa de diálogo de confirmação nas ações rápidas.',
	'QM_BUTTON_MANAGE'		=> 'Gerenciar botões Quick',
	
	'QM_TYPE'				=> 'Exibir ícones',
	'QM_TYPE_EXPLAIN'		=> 'Defina o formato de exibição para as ações rápidas no fórum.',
	'QM_TYPE_ICON'			=> 'Icons',
	'QM_TYPE_MENU'			=> 'Menu contextual',
	
	'BUTTONS_AVALIABLE'		=> 'Botões disponíveis',
	'BUTTONS_SELECTED'		=> 'Botões selecionados',

	'LOG_QUICKMOD_CONFIG'	=> '<strong>cBB QuickMod:</strong> Configuração alterada',
));
