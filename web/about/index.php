<?php

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О нас');
$APPLICATION->SetPageProperty('TITLE', 'О нас | We coders');
$APPLICATION->SetPageProperty("keywords", "о нас, о компании, мы");
$APPLICATION->SetPageProperty("description", "О компании");
?>
<p>Text for about page</p>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
