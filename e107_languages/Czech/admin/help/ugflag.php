<?php


if (!defined('e107_INIT')) { exit; }

$text = "Pokud provádíte aktualizaci e107, nebo potřebujete aby vaše stránky byly dočasně nedostupné, můžete využít této funkce. 
Při aktivaci budou všichni uživatelé směrováni na stránku s vašim textem vysvětlujícím stav dostupnosti těchto stránek. 
Po pominutí důvodů k nedostupnosti můžete stránky opět zprovoznit odtržením této funkce.<br /><br />
<b>Upozornění!</b><br />Pokud je údržbový provoz aktivován, v žádném případě se neodhlašujte, protože by nebylo možné se opětovně přihlásit. 
V takovém případě by bylo nutné provést deaktivaci funkce editací v SQL databázi.";

$ns -> tablerender("Nápověda - Údržba", $text);
?>
