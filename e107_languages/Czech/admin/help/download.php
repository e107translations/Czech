<?php


if (!defined('e107_INIT')) { exit; }

$text = "Nahrávejte prosím vaše soubory do složky <i>".e_FILE."downloads</i> , obrázky do <i>".e_FILE."downloadimages</i> a miniatury obrázků do <i>".e_FILE."downloadthumbs</i> složky.
<br /><br />
Pro přidání souboru do sekce \"Ke stažení\", musí být nejprve vytvořena hlavní kategorie a pod ní podkategorie. Až pak bude možné soubor zpřístupnit na vašich stránkách.";
$ns -> tablerender("Nápověda - Ke stažení", $text);
?>
