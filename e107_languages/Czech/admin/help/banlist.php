<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Zakázání uživatelů na stránkách";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'Tato stránka umožňuje přenášet data ze seznamu zakázaných uživatelů na tyto stránky a z nich ve formě souborů CSV (proměnné oddělené čárkou).<br /><br />';
  $text .= "<b>Exportování dat</b><br />
  Vyberte typy zákazů, které chcete exportovat. Pole budou oddělena zvoleným oddělovačem a volitelně zahrnuta do zvolených uvozovek.<br /><br />";
  $text .= "<b>Importování dat</b><br />
  Můžete si vybrat, zda importované zákazy nahradí stávající zákazy, nebo zda seznam pouze doplní. Pokud importovaná data obsahují datum/čas vypršení platnosti, pak můžete můžete vybrat, zda se použije toto datum, nebo zda se použije datum tohoto webu.<br /><br />";
  $text .= "<b>Formát CSV</b><br />
  Formát jednotlivých řádků souboru je následující: IP/email, datum, platnost, typ, odůvodnění, poznámky.<br />
  Datum a doba platnosti jsou ve formátu RRRRMMDD_HHMMDD, přičemž nulová hodnota znamená 'neznámý' nebo 'neurčitý'.<br />
  Důležitá je pouze IP nebo e-mailová adresa; ostatní pole se importují, pokud jsou přítomna.<br /><br />
  <b>Poznámka:</b> Je třeba upravit soubor filetypes.xml, aby administrátoři mohli nahrávat soubory typu 'CSV'.";
  break;
case 'times' :
  $text = 'Tato stránka nastavuje výchozí chování pro různé typy zákazů.<br />
   Pokud je zadána nějaká zpráva, zobrazí se uživateli (pokud je to vhodné). Pokud zpráva začíná slovy \'http://\' nebo \'https://\' je přesměrována na zadanou adresu URL. V opačném případě se uživateli s největší pravděpodobností zobrazí prázdná obrazovka.<br />
  Zákaz bude platit po stanovenou dobu a poté bude při dalším přístupu na stránky zrušen.';
  break;
case 'options' :
  $text = '<b>Reverzní DNS</b><br />
    Pokud je tato možnost povolena, vyhledá se IP adresa uživatele a získá se přidružený název domény. Tím se získá přístup k externímu serveru, takže může dojít k může dojít ke zpoždění, než budou informace k dispozici - a pokud je server mimo provoz, může dojít k velmi dlouhému zpoždění.<br /><br />
	Můžete si vybrat, zda chcete vyhledávat názvy serverů při všech přístupech na stránky, nebo pouze při přidávání nového zákazu.<br /><br />
	<b>Maximální rychlost připojení</b><br />
	This sets the maximum number of site accesses permitted from a single user or IP address in any five-minute period, and is intended
	to detect denial of service attacks. At 90% of the selected limit, the user receives a warning; on reaching the limit they are banned.
	Different thresholds may be set for guests and logged-in users.<br /><br />
	<b>Retrigger Ban Period</b><br />
	This option is only relevant if the option to ban users for a specified time, rather than indefinitely, has been used. If enabled, and
	the user attempts to access the site, the ban period is extended (as if the ban had just started).
	';
  break;
case 'edit' :
case 'add' :
$text = "You can ban users from your site at this screen.<br />
Either enter their full IP address or use a wildcard to ban a range of IP addresses. You can also enter an email address to stop a user registering as a member on your site.<br /><br />
<b>Banning by IP address:</b><br />
Entering the IP address 123.123.123.123 will stop the user with that address visiting your site.<br />
Entering an IP address with one or more wildcards in the end blocks, such as 123.123.123.* or 214.098.*.*, will stop anyone in that IP range from visiting your 
site. (Note that there must be exactly four groups of digits or asterisks)<br /><br />
IPV6 format addresses are also supported, including '::' to represent a block of zero values. Each pair of digits in the end fields may be a separate wildcard<br /><br />
<b>Banning by email address</b><br />
Entering the email address foo@bar.com will stop anyone using that email address from registering as a member on your site.<br />
Entering the email address *@bar.com will stop anyone using that email domain from registering as a member on your site.<br /><br />
<b>Banning by user name</b><br />
This is done from the user administration page.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Zde můžete zadat IP adresy, o kterých víte, že jsou přátelské - obvykle se jedná o adresy hlavních správců webu, aby bylo zaručeno, že mohou. vždy získat přístup k webu.<br />
  Doporučujeme vám, abyste počet adres v tomto seznamu omezili na naprosté minimum; jednak kvůli bezpečnosti, jednak kvůli minimalizaci dopadu na výkon webu.";
  break;
case 'banlog' :
  $text = 'Zobrazí se seznam všech přístupů k webu zahrnující adresu, která je na seznamu zákazů nebo na bílé listině. Ve sloupci \'důvod\' je uveden výsledek.';
  break;
case 'white/list' :
  $text = "Na této stránce je zobrazen seznam všech IP adres a e-mailových adres, které jsou výslovně povoleny.<br />
    Tento seznam má přednost před seznamem zákazů - nemělo by být možné, aby adresa z tohoto seznamu byla zakázána.<br />
	Všechny adresy musí být zadány ručně.";
  break;
case 'list' :
default :
$text = 'Na této stránce je zobrazen seznam všech zakázaných IP adres, názvů hostitelů a e-mailových adres. 
(Zakázaní uživatelé se zobrazují na stránce správy uživatelů)<br /><br />
<b>Automatické zákazy</b><br />
e107 automaticky zakazuje jednotlivé IP adresy, pokud se pokusí zaplavit stránky, a také adresy s neúspěšným přihlášením.<br />
Tyto zákazy se také zobrazují v tomto seznamu. Můžete si vybrat (na stránce s možnostmi), co se má pro každý typ zákazu udělat.<br /><br />
<b>Odstranění zákazu</b><br />
Pro každý typ zákazu můžete nastavit dobu platnosti, v takovém případě se záznam odstraní po uplynutí doby platnosti zákazu. V opačném případě se
 zákaz zůstane zachován, dokud jej neodstraníte.<br />
Dobu zákazu můžete upravit na této stránce - časy se počítají od této chvíle.';
}
$ns -> tablerender($caption, $text);
