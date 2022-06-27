<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
$this->registerCssFile("@web/css/about.css");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="text-align:justify">
    Компания «Copy Star» занимается обслуживанием физических и юридических лиц и дает возможность приобретать любой товар в любом количестве из всего огромного ассортимента,
представленного на сайте компании.
Индивидуальный подход к каждому клиенту и выделение персонального
менеджера по продажам позволяет подобрать наиболее эффективное решение
и обеспечить достойный сервис, отвечающий всем пожеланиям.
    </p>
</div>