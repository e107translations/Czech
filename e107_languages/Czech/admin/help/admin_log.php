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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/admin_log.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda k systémovým protokolům";
if (e_QUERY) list($action,$junk) = explode('.', e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Datové filtry</b><br />
  Můžete zadat různé filtry, které omezují množství zobrazovaných dat. Ty se ukládají do souboru cookie, dokud se neodhlásíte.<br />
  Filtry počátečního a koncového data/času je třeba povolit pomocí příslušných zaškrtávacích polí.<br />
  Ostatní filtry jsou aktivní, pokud je v poli nějaká hodnota.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Na této stránce se zobrazí aktivita uživatelů, kterou jste se rozhodli zaznamenávat.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Zde se konfigurují různé možnosti pro systémové protokoly.<br /><br />
  <b>Základní nastavení</b><br />
  Nastaví počet zobrazených řádků v protokolu.<br /><br />
  <b>Protokol administrátora</b><br />
  Tento protokol uchovává události, dokud nejsou výslovně odstraněny, použijte tuto volbu pro odstranění starých událostí.<br /><br />
  <b>Protokol kontroly uživatelů</b><br />
  Tento protokol sleduje aktivitu uživatele. U registrovaných uživatelů se sledují pouze uživatelé zadané třídy - můžete nastavit, aby se sledovali všichni uživatelé, nebo vytvořit specifickou třídu uživatelů pro zaznamenávání.
  Poté určete typy aktivit, které chcete zaznamenávat.<br />
  Události registrace lze sledovat samostatně.<br /><br />
  <b>Průběžné protokoly</b><br />
  Tento protokol slouží ke sledování abnormálních událostí, pomáhá při ladění atd. lze jej vypnout. Události se automaticky odstraní po uplynutí nastaveného počtu dní.
  ";
  break;
case 'rolllog' :
  $text = "V průběžném protokolu se zobrazují různé abnormální události, které se jinak nezaznamenávají. Lze jej také použít k ladění a monitorování programu.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Na této stránce se zobrazují soubory ke stažení od uživatelů.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "This page displays user comments, with options to select by user ID, type and date. Unwanted comments can be deleted.";
  break;
case 'detailed' :
  $text = "The main system logs record time to a high degree of precision (if the underlying server supports it), and this page allows you to inspect entries
	occuring within a relatively small time window. Entries from the admin log, audit log and rolling log are merged, so that you can see the precise 
	relationships between events.";
  break;
case 'adminlog' :
default :
  $text = "Na této stránce se zobrazuje činnosti administrátorů.<br /><br />
  (V současné době se do kódu stále přidává protokolování, takže tento seznam není úplný.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
