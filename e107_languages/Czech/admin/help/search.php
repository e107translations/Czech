<?php


if (!defined('e107_INIT')) { exit; }

$text = "Pokud to váš SQL server podporuje, můžete přejít na SQL metodu vyhledávání, která je rychlejší než metoda PHP. Více v předvolbách.<br /><br />
Pokud vaše stránky obsahují jazyk jako je třeba čínština nebo japonština, pak používejte PHP metodu vyhledávání a vypněte v předvolbách funkci \"Vyhledávání pouze celých slov\".";
$ns -> tablerender("Nápověda - Hledání", $text);
?>
