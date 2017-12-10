<?php

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Administrátoři";
$text = "Zde máte možnost upravovat pravomoce, nebo mazat Administrátory.<br /><br />
Pro vytvoření nového Administrátora, přejděte do <a href='users.php'>správy uživatelů</a> a příslušnému uživateli <i>udělte status Administrátora</i>.";
$ns -> tablerender($caption, $text);
?>
