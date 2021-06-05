<?php

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О нас');
$APPLICATION->SetPageProperty('TITLE', 'О нас | We coders');
$APPLICATION->SetPageProperty("keywords", "о нас, о компании, мы");
$APPLICATION->SetPageProperty("description", "О компании");
?>
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_title",
                )
            );?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_text",
                        )
                    );?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_image",
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
