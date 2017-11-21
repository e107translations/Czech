<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Czech Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/11/21 17:26:52
|
|        $URL: https://github.com/oxigeno2/e107 $
|        $Revision: 2.1.7 $
|        $Id: 2017/11/21 17:26:52 $
|        $Author: OxigenO2 $
+---------------------------------------------------------------+
*/

define("LANINS_001", "Verze %1$s");
define("LANINS_002", "Instalace");
define("LANINS_003", "1");
define("LANINS_004", "Volba jazyka");
define("LANINS_005", "Prosím vyberte si jazyk, který chcete mít při instalaci");
define("LANINS_007", "4");
define("LANINS_008", "kontrola verzí PHP & MySQL  / kontrola oprávnění přístupu k souborům");
define("LANINS_009", "Překontrolovat oprávnění přístupu k souborům");
define("LANINS_010", "Do souboru nelze zapsat:");
define("LANINS_010a", "Do adresáře nelze zapsat:");
define("LANINS_012", "Funkce MySQL neexistuje. Pravděpodobně není instalováno PHP rozšíření pro MySQL nebo nebyla instalace PHP kompilována s podporou MySQL.");
define("LANINS_013", "Nemohu zjistit verzi MySQL. Nejde o závažnou chybu, takže můžete pokračovat v instalaci, ale buďte si vědomi toho, že e107 vyžaduje MySQL >= 3.23, aby vše pracovalo správně.");
define("LANINS_014", "Oprávnění přístupu k souborům");
define("LANINS_015", "PHP Verze");
define("LANINS_017", "PASS");
define("LANINS_018", "Ujistěte se, že všechny soubory existují a mají nastaveno právo zápisu pro server. Běžně to znamená nastavení pomocí CHMOD na 777, ale záleží na prostředí. Pokud máte problémy, kontaktujte správce svého hostingu.");
define("LANINS_019", "Verze instalovaná na Vašem serveru není dostatečná pro zajištění provozu e107. e107 vyžaduje PHP minimálně ve verzi 4.3.0. Nainstalujte si novější verzi nebo kontaktujte správce svého hostingu.");
define("LANINS_021", "2");
define("LANINS_022", "Detaily MySQL Serveru");
define("LANINS_023", "Vložte prosím údaje nastavení MySQL.<br /><br />Pokud máte root práva, lze vytvořit databázi - zaškrtněte výběrové pole. Pokud práva rootu nemáte, musíte vytvořit databázi sami a nebo použít již existující.Pokud máte k dispozici pouze jednu databázi, použijte prefix, aby mohly s databází pracovat i jiné skripty.Pokud neznáte detaily nastavení MySQL serveru kontaktujte správce hostingu.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "MySQL Uživatelské jméno:");
define("LANINS_026", "MySQL Heslo:");
define("LANINS_027", "MySQL Databáze:");
define("LANINS_028", "Vytvořit Databázi?");
define("LANINS_029", "Prefix pro tabulky:");
define("LANINS_030", "Server MySQL, který chcete použít pro e107. Může obsahovat i číslo portu, např. hostname:port nebo cestu k lokální zásuvce (socket), např.:/path/to/socket\, v případě lokálního nastavení (localhost).");
define("LANINS_031", "Uživatelské jméno, které má e107 použít pro spojení se serverem MySQL");
define("LANINS_032", "Heslo k tomuto uživatelskému jménu");
define("LANINS_033", "Databáze, do které se má e107 umístit/nainstalovat, někdy též označováno jako schema. Pokud má uživatel práva pro vytvoření databáze, můžete zvolit, aby byla databáze vytvořena automaticky (v případě, že ještě neexistuje).");
define("LANINS_034", "Prefix, který má e107 používat při tvorbě tabulek databáze. To je užitečné hlavně pro vícero instalací e107 v rámci jedné databáze.");
define("LANINS_036", "3");
define("LANINS_037", "Ověření spojení s MySQL");
define("LANINS_038", " a tvorba databáze");
define("LANINS_039", "Ujistěte se, že jste vyplnili všechny údaje. Nejdůležitější jsou: jméno MySQL serveru, uživatelské jméno MySQL a heslo, název databáze MySQL (tyto údaje server MySQL vždy vyžaduje)");
define("LANINS_040", "Chyby");
define("LANINS_041", "S použitím vložených informací nemohl systém e107 navázat spojení se serverem MySQL.<br /> Vraťte se na předchozí stranu a ujistěte se, že jsou vložené údaje správné.");
define("LANINS_042", "Spojení se serverem bylo navázáno a ověřeno.");
define("LANINS_043", "Nelze vytvořit databázi. Ujistěte se prosím, že máte korektně nastavená práva pro vytváření databáze na serveru MySQL.");
define("LANINS_044", "Databáze byla úspěšně vytvořena.");
define("LANINS_045", "Klikněte na další krok.");
define("LANINS_046", "5");
define("LANINS_047", "Detaily administrátora");
define("LANINS_048", "Vrátit zpět na poslední krok");
define("LANINS_049", "Hesla, která byla vložena nejsou stejná. Vraťte se prosím zpět a zkuste to znovu.");
define("LANINS_050", "XML rozšíření");
define("LANINS_051", "nainstalováno");
define("LANINS_052", "nenainstalováno");
define("LANINS_055", "Potvrzení instalace");
define("LANINS_056", "6");
define("LANINS_057", "  e107 má nyní k dispozici všechny informace nezbytné pro instalaci. Klikněte prosím na tlačítko. Bude vytvořena databáze a uložena všechna nastavení.");
define("LANINS_058", "7");
define("LANINS_060", "Není možné přečíst soubor s daty pro sql.Ujistěte se, že soubor [b]core_sql.php[/b] existuje adresáři [b]/e107_core/sql[/b]  .");
define("LANINS_061", "e107 se nezdařilo vytvořit všechny tabulky databáze. Před tím, než to zkusíte znovu, vyčistěte databázi a odstraňte všechny problémy.");
define("LANINS_069", "e107 byl úspěšně nainstalován! Z bezpečnostních důvodů je nutné nastavit přístupová práva pro soubor [b]e107_config.php[/b] zpět na 644. Po té co kliknete na tlačítko níže, smažte soubor install.php.");
define("LANINS_070", "Systému e107 se nezdařilo uložit hlavní konfiguraci na Váš server. Ujistěte se prosím, že soubor [b]e107_config.php[/b] má korektně nastavena práva.");
define("LANINS_071", "Dokončuji instalaci");
define("LANINS_072", "Uživatelské jméno administrátora");
define("LANINS_073", "To je uživatelské jméno, které použijete k přihlášení do systému. Pokud jej chcete používat také jako své jméno, které bude zobrazeno veřejně.");
define("LANINS_074", "Veřejné jméno administrátora");
define("LANINS_076", "Heslo administrátora");
define("LANINS_077", "Sem zadejte heslo administrátora");
define("LANINS_078", "Potvrzení hesla administrátora");
define("LANINS_079", "Heslo administrátora vložte ještě jednou, pro potvrzení");
define("LANINS_080", "Email administrátora");
define("LANINS_081", "Vložte svou emailovou adresu");
define("LANINS_083", "Chybná odpověď od MySQL:");
define("LANINS_084", "Instalátor nemůže navázat spojení s databází");
define("LANINS_085", "Instalátor nemůže vybrat databázi:");
define("LANINS_086", "Jméno administrátora, heslo a email administrátora jsou povinné položky. Vraťte se na předchozí stránku a ujistěte se, že jsou tyto údaje správně vyplněny.");
define("LANINS_105", "Název databáze nebo předpony nesmí začínat čísly a následovat 'e' nebo 'E'  Název databáze a předpona nemůže být prázdný.");
define("LANINS_106", "Varování - E107 nemůže zapisovat do adresáře a/nebo souboru v seznamu. Pokud budete v instalaci pokračovat a správně nenastavíte přístupová práva složek/souborů, je možné, že určité části systému nebudou po instalaci dostupné. Je zapotřebí nejprve správně nastavit přístupová práva souborů.");
define("LANINS_107", "Název webu");
define("LANINS_108", "Můj web");
define("LANINS_109", "Vzhled webu");
define("LANINS_111", "Zahrnout obsah/nastavení");
define("LANINS_112", "Rychle reprodukujte náhled vzhledu nebo demo stránek. (Pokud je k dispozici)");
define("LANINS_113", "Prosím, zadejte název webu");
define("LANINS_114", "Prosím vyberte vzhled stránek");
define("LANINS_115", "Název vzhledu");
define("LANINS_116", "Typ vzhledu");
define("LANINS_117", "Předvolby webové stránky");
define("LANINS_118", "Instalace doplňků");
define("LANINS_119", "Nainstalovat všechny doplňky, které vyžaduje šablona vzhledu.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php již existuje!");
define("LANINS_122", "Pravděpodobně máte existující instalaci");
define("LANINS_123", "Volitelné: Vaše veřejné jméno nebo přezdívka. Ponechte prázdné pro použití uživatelského jména");
define("LANINS_124", "Zvolte prosím heslo s minimálně 8 znaky");
define("LANINS_125", "e107 byl úspěšně nainstalován!");
define("LANINS_126", "Z bezpečnostních důvodů byste nyní měli nastavit oprávnění na souboru e107_config.php zpět na 644.");
define("LANINS_127", "Databáze [x] již existuje. Přepsat? (budou ztraceny všechny existující údaje)");
define("LANINS_128", "Přepsat");
define("LANINS_129", "Databáze nebyla nalezena.");
define("LANINS_134", "Instalace");
define("LANINS_135", "z");
define("LANINS_136", "Existující databáze byla vymazána");
define("LANINS_137", "Byla nalezena existující databáze");
define("LANINS_141", "Vyplňte níže uvedený formulář s údaji o MySQL. Pokud tyto informace neznáte, obraťte se na poskytovatele hostingu. Pro další informace můžete umístit kurzor myši nad každé pole folmuráře.");
define("LANINS_142", "DŮLEŽITÉ: Prosím přejmenujte e107.htaccess na .htaccess");
define("LANINS_144", "DŮLEŽITÉ: Zkopírujte a vložte obsah souboru [b]e107.htaccess[/b] do souboru [b].htaccess[/b]. Prosím, dejte pozor, abyste NEPŘEPSALI existující data, která  v něm mohou být.");
define("LANINS_145", "e107 v2.x vyžaduje instalaci PHP [x]. Prosím, kontaktujte svého hostitele nebo si přečtěte informace v [y] před pokračováním.");
