<?php
/**
* info_acp_quickmod.php [Brazilian Portuguese [pt_br]]
* @package cBB QuickMod
* @version v1.1.1 22/03/2019
* Brazilian Portuguese  translation by eunaumtenhoid [2017][ver 1.1.1] (https://github.com/phpBBTraducoes)
* @copyright (c) 2019 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_CAT_QUICKMOD'		        => 'QuickMod',
	'ACP_QUICKMOD_CONFIG'	        => 'Configuração principal',
	'ACP_QUICKMOD_CONFIG_EXPLAIN'	=> 'Aqui você pode gerenciar as principais opções de moderação.<br /> Para organizar os botões, arraste-o para a posição correta na lista inferior. A visibilidade dos botões na página viewforum depende das permissões do usuário e do estado do tópico.',
	'QM_MAIN_CONFIG'		=> 'Configuração principal',
	'QM_CONFIRM'			=> 'Confirmar diálogo',
	'QM_CONFIRM_EXPLAIN'	=> 'Ativar/Desativar a caixa de diálogo de confirmação nas ações rápidas.',
	'QM_BUTTON_MANAGE'		=> 'Gerenciar botões Quick',
	
	'QM_TYPE'				=> 'Exibir ícones',
	'QM_TYPE_EXPLAIN'		=> 'Defina o formato de exibição para as ações rápidas no fórum.',
	'QM_TYPE_ICON'			=> 'Ícones',
	'QM_TYPE_MENU'			=> 'Menu contextual',
	
	'BUTTONS_AVALIABLE'		    => 'Botões disponíveis',
	'BUTTONS_SELECTED'		    => 'Botões selecionados',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Documentação e suporte',
	'SAVE'                      => 'Salvar',

	'LOG_QUICKMOD_CONFIG'	=> '<strong>cBB QuickMod:</strong> Configuração alterada',
));
