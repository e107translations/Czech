<?php


if (!defined('e107_INIT')) { exit; }

$text = "Zde máte možnost spravovat soubory/adresáře vašich stránek. Pokud se při nahrávání či přesunu souborů vyskytne chyba o nedostatečných přístupových právech, pak nastavte přístupová práva nadřazeného adresáře na CHMOD 777.";
$ns -> tablerender("Nápověda - Správce souborů", $text);
?>
