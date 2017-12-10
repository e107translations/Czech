<?php


if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Banlist";
$text = "Zde můžete zakázat/povolit přístup uživatelům na vaše stránky.<br /><br />
Blokovat můžete jak IP adresy, tak e-mail adresy a to i s použitím zástupného znaku (*)<br /><br />
<b>Blokování IP adres:</b><br />
 - Vložením ve tvaru 123.123.123.123 , zabráníte přístup z dané IP adresy na vaše stránky.<br />
 - Vložením s použitím zástupného znaku 123.123.123.* zabráníte přístup celé třídě \"C\" IP adres.<br /><br />
<b>Blokování e-mailu</b><br />
 - Vložením e-mail adresy ve tvaru uzivatel@stranky.cz zabráníte registraci s použitím dané adresy.<br />
 - Vložením e-mail adresy s použitím zástupného znaku *@stranky.cz, zabráníte registracím s použitím jakékoli adresy, vedené pod uvedeným serverem.<br /><br />
<b>Blokování uživatelů</b><br />
To je možné provádět ze <a href=\"users.php\" />správy uživatelů</a>.";
$ns -> tablerender($caption, $text);
?>
