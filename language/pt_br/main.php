<?php
/**
* main.php [Brazilian Portuguese [pt_br]]
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
	'APPROVE_TOPIC'			=> 'Aprovar',
	'CHANGE_ICON'			=> 'Alterar ícone',
	'CHANGE_ICON_TOPIC'		=> 'Alterar ícone',
	'CHANGE_POSTER_TOPIC'	=> 'Alterar autor',
	'CHANGE_TIME_TOPIC'		=> 'Alterar data de publicação',
	
	'CONFIRM_CHANGE_TOPIC'		=> 'Tem certeza de que deseja modificar o tópico selecionado?',
	'CONFIRM_CHANGE_TOPICS'		=> 'Tem certeza de que deseja modificar os tópicos selecionados?',
	'CONFIRM_DELETE_TOPIC'		=> 'Tem certeza de que deseja deletar o tópico selecionado?',
	'CONFIRM_DELETE_TOPICS'		=> 'Tem certeza de que deseja deletar os tópico selecionados?',
	'CONFIRM_LOCK_TOPIC'		=> 'Tem certeza de que deseja trancar o tópico selecionado?',
	'CONFIRM_LOCK_TOPICS'		=> 'Tem certeza de que deseja trancar os tópicos selecionados?',
	'CONFIRM_RENAME_TOPIC'		=> 'Tem certeza de que deseja renomear o tópico selecionado?',
	'CONFIRM_RENAME_TOPICS'		=> 'Tem certeza de que deseja renomear os tópicos selecionados?',
	'CONFIRM_RESTORE_TOPIC'		=> 'Tem certeza de que deseja restaurar o tópico selecionado?',
	'CONFIRM_RESTORE_TOPICS'	=> 'Tem certeza de que deseja restaurar os tópicos selecionados?',
	'CONFIRM_UNLOCK_TOPIC'		=> 'Tem certeza de que deseja destrancar o tópico selecionado?',
	'CONFIRM_UNLOCK_TOPICS'		=> 'Tem certeza de que deseja destrancar os tópicos selecionados?',
	
	'DELETE_TOPIC'				=> 'Excluir',
	'DELETE_PERMANENTLY_TOPIC'	=> 'Excluir permanentemente',
	'LOCK_TOPIC'				=> 'Trancar',
	'MAKE_ANNOUNCE_TOPIC'		=> 'Alterar para Anúncio',
	'MAKE_GLOBAL_TOPIC'			=> 'Alterar para Global',
	'MAKE_NORMAL_TOPIC'			=> 'Alterar para Normal',
	'MAKE_STICKY_TOPIC'			=> 'Alterar para Fixo',
	
	'MARK_ANNOUNCE'			=> 'Marcar anúncios',
	'MARK_BY_STATUS'		=> 'Marca por estado',
	'MARK_BY_TYPE'			=> 'Marca por tipo',
	'MARK_GENERAL'			=> 'Geral',
	'MARK_GLOBAL'			=> 'Marcar tópicos globais',
	'MARK_LOCKED'			=> 'Marcar tópicos trancados',
	'MARK_MOVED'			=> 'Marcar tópicos movidos',
	'MARK_NORMAL'			=> 'Marcar tópicos normais',
	'MARK_STICKY'			=> 'Marcar tópicos fixos',
	'MARK_TOPICS'			=> 'Marcar tópicos',
	'MARK_UNLOCKED'			=> 'Marcar tópicos destrancados',
	
	'MOVE_TOPIC'			=> 'Mover',
	'NO_TOPIC_SELECTED'		=> 'Nenhum tópico selecionado',
	'OPTIONS_BASIC'			=> 'Opções básicas',
	'OPTIONS_ADVANCED'		=> 'Opções avançadas',
	'RENAME_TOPIC'			=> 'Renomear',
	'RESTORE_TOPIC'			=> 'Restaurar',
	'TOPIC_TYPE'			=> 'Tipo de tópico',
	'UNLOCK_TOPIC'			=> 'Destrancar',

	'ICON'					=> 'Ícone',
	'NOTHING'				=> 'Não houve alterações',
	'NOTIFY_POSTER'			=> 'Notificar a aprovação ao autor',
	'QM_ACCEPT'				=> 'Aceitar',
	'QM_CANCEL'				=> 'Cancelar',
	'SELECT_ACTION'			=> 'Selecione a ação',
	'WITH_SELECTED'			=> 'Com selecionado',

	'AUTHOR_CHANGE_SUCCESS'	=> 'O autor dos tópicos foi alterado corretamente.',
	'TOPIC_RENAMED_SUCCESS'	=> 'O tópico foi renomeado corretamente.',
	
	'CORE_INSTALL_ERROR'	=> 'Você não carregou todos os arquivos do pacote de instalação ou está tentando instalar um pacote antigo.<br />
		Por favor, certifique-se de enviar todos os arquivos (incluindo a pasta <em>core</em>) e use um pacote baixado do site oficial.',
));
