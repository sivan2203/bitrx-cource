<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult)): ?>
    <div class="header-main-menu hidden-xs">
        <nav id="primary-menu">
            <ul class="main-menu text-right">
                <?php foreach ($arResult as $item): ?>
                    <li>
                        <a href="<?= $item['LINK'];?>"><?= $item['TEXT'];?></a>
                    </li>
                <? endforeach; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>

<!--<li>-->
<!--    <a href="services.html"> Услуги-->
<!--        <span class="indicator"><i class="fa fa-angle-down"></i></span></a>-->
<!--    <ul class="dropdown">-->
<!--        <li>-->
<!--            <a href="services_landing.html">Лендинг</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="services_online_shop.html">Интернет-магазин</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
