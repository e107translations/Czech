<?php


if (!defined('e107_INIT')) { exit; }

$text = "Zde máte možnost definice důležitých Meta Tagů, případně možnost přidávat své vlastní.
<br /><br />
Při vkládání vlastních Meta Tagů, se snažte dbát na správném tvaru xhtml zápisu.
<br /><br />
Správný tvar:<br />
&lt;meta.... /&gt;
<br /><br />
Špatný tvar:<br />
&lt;meta... &gt;";

$ns -> tablerender("Nápověda - Meta Tagy", $text);
?>
