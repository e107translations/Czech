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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda pro administrátory stránek";
$text = "Na této stránce můžete upravit předvolby administrátorů stránek nebo je odstranit. Administrátor bude mít oprávnění k přístupu pouze k funkcím, které jsou označeny.<br /><br />
Chcete-li přidat nového administrátora, přejděte na stránku správy uživatelů a přidejte stávajícímu uživateli status administrátora.";
$ns -> tablerender($caption, $text);
