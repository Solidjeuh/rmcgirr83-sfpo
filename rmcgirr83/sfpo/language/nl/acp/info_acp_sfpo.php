<?php
/**
*
* @package Show first post only to guest
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'ENABLE_SFPO' 			=> 'Schakel eerste bericht tonen alleen in voor gasten',
	'ENABLE_SFPO_EXPLAIN' 	=> 'Indien ingesteld op “ja” kunnen “niet” geregistreerde gebruikers/gasten alleen het eerste bericht van ieder onderwerp zien. De rest van de berichten in het onderwerp vraagt hen om in te loggen of te registreren.',
	'SFPO_CHARACTERS'		=> 'Aantal tekens dat moet worden weergegeven',
	'SFPO_CHARACTERS_EXPLAIN'	=> 'Voer het aantal tekens in dat moet worden weergegeven voor het eerste onderwerp (standaard is 150). Als u de waarde op 0 instelt, wordt deze functie uitgeschakeld.',
	'SFPO_CHARS'			=> 'Karakters',
));
