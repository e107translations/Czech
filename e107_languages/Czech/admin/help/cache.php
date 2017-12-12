<?php

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Cache";
$text = "Zapnutím Cache(Vyrovnávací paměť) se zrychlí reakce vašich stránek a sníží zatížení sql databáze dotazy.<br /><br /><b>Upozornění! Pokud provádíte úpravy vzhledu vašich stránek, pak tuto funkci vypněte. Provedené změny by se vám totiž nemusely projevit.</b>";
$ns -> tablerender($caption, $text);
?>
