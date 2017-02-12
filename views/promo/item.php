<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<style>
    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #5cb85c;
        border-color: #5cb85c;
    }

    section {
        padding: 40px 0;
    }
    i.grey {
        color: darkgray;
    }
    p, pre {
        font-size: 14px !important;
    }

    .breadcrumb-arrow {
        height: 36px;
        padding: 0;
        line-height: 36px;
        list-style: none;
        background-color: #e6e9ed
    }
    .breadcrumb-arrow li:first-child a {
        border-radius: 4px 0 0 4px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px
    }
    .breadcrumb-arrow li, .breadcrumb-arrow li a, .breadcrumb-arrow li span {
        display: inline-block;
        vertical-align: top
    }
    .breadcrumb-arrow li:not(:first-child) {
        margin-left: -5px
    }
    .breadcrumb-arrow li+li:before {
        padding: 0;
        content: ""
    }
    .breadcrumb-arrow li span {
        padding: 0 10px
    }
    .breadcrumb-arrow li a, .breadcrumb-arrow li:not(:first-child) span {
        height: 36px;
        padding: 0 10px 0 25px;
        line-height: 36px
    }
    .breadcrumb-arrow li:first-child a {
        padding: 0 10px
    }
    .breadcrumb-arrow li a {
        position: relative;
        color: #fff;
        text-decoration: none;
        background-color: #3bafda;
        border: 1px solid #3bafda
    }
    .breadcrumb-arrow li:first-child a {
        padding-left: 10px
    }
    .breadcrumb-arrow li a:after, .breadcrumb-arrow li a:before {
        position: absolute;
        top: -1px;
        width: 0;
        height: 0;
        content: '';
        border-top: 18px solid transparent;
        border-bottom: 18px solid transparent
    }
    .breadcrumb-arrow li a:before {
        right: -10px;
        z-index: 3;
        border-left-color: #3bafda;
        border-left-style: solid;
        border-left-width: 11px
    }
    .breadcrumb-arrow li a:after {
        right: -11px;
        z-index: 2;
        border-left: 11px solid #2494be
    }
    .breadcrumb-arrow li a:focus, .breadcrumb-arrow li a:hover {
        background-color: #4fc1e9;
        border: 1px solid #4fc1e9
    }
    .breadcrumb-arrow li a:focus:before, .breadcrumb-arrow li a:hover:before {
        border-left-color: #4fc1e9
    }
    .breadcrumb-arrow li a:active {
        background-color: #2494be;
        border: 1px solid #2494be
    }
    .breadcrumb-arrow li a:active:after, .breadcrumb-arrow li a:active:before {
        border-left-color: #2494be
    }
    .breadcrumb-arrow li span {
        color: #434a54
    }
</style>

<section style="margin-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/questions/">Вопросы</a></li>
            <li class="active"><?=$model->title;?></li>
        </ol>
    </div>
</section>

<section id="bs-pricing-five" class="bs-pricing-five bg-white"  style="padding-top: 0px;">
    <div class="container">
        <div class="page-header">
            <h1><?=$model->title;?></h1>
        </div>
        <div class="row">
            <div id="faq" class="col-md-9">
                <div class="panel-group" id="accordion">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" href="#collapse-<?=$model->id;?>">

                            </a>
                            <?php if ($model->is_show_answer): ?>
                                <i class="fa fa-lightbulb-o pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Ответ доступен бесплатно"></i>
                            <?php endif;?>
                            <?php if ($model->is_famous): ?>
                                <i class="fa fa-graduation-cap pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Вопрос из известной компании"></i>
                            <?php endif;?>
                            <?php if ($model->is_often): ?>
                                <i class="fa fa-star pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Популярный вопрос"></i>
                            <?php endif;?>
                        </h4>
                    </div>
                    <div id="collapse-<?=$model->id;?>" class="">
                        <div class="btn-group btn-group-sm"><span class="btn">Вопрос</span></div>
                        <div class="panel-body">
                            <?=$model->question;?>
                        </div>
                        <?php if ($model->is_show_answer): ?>
                            <hr />
                            <div class="btn-group btn-group-sm"><span class="btn">Ответ</span></div>
                            <div class="panel-body">
                                <?=$model->answer;?>
                            </div>
                        <?php endif;?>
                        <?php if (!empty($model->hint)): ?>
                            <div class="panel-body">
                                <b>Совет:</b><br />
                                <?=$model->hint;?>
                            </div>
                        <?php endif;?>
                        <div class="panel-footer">
                            <div class="btn-group btn-group-sm"><span class="btn">Понравился вопрос?</span><a class="btn btn-success" href="/prices"><i class="fa fa-thumbs-up"></i> Да</a> <a class="btn btn-danger" href="/prices"><i class="fa fa-thumbs-down"></i> Нет</a></div>
                            <?php if (!$model->is_show_answer): ?>
                                <div class="btn-group btn-group-sm pull-right"><a class="btn btn-success" href="/prices">Узнать ответ</a></div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="lead">Категории</p>
                <div class="list-group">
                    <?php

                    foreach (\app\models\Type::find()->all() as $type) {
                        echo '<a href="/questions/'. $type->id .'" class="list-group-item '. (($currentType->id == $type->id) ? 'active' : '') .'">'. $type->name .'</a>';
                    }
                    ?>
                </div>

                <!--            <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/search?count=6&locale=RU&links_color=868686&border_color=868686&text=php&area=113&show_region=true&specialization=1&currency=RUR&only_with_salary=true&salary=200000&experience=between3And6&employment=full&employment=project"></script>-->
            </div>
        </div>
    </div>
</section>


<aside>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="/questions/<?= $model->getPrevSlug();?>" class="btn btn-default btn-xl sr-button"><< Предыдущий вопрос</a>
                        <a href="/questions/<?= $model->getNextSlug();?>" class="btn btn-default btn-xl sr-button">Следующий вопрос >></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</aside>


<section id="contact"  class="bg-primary">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Получите доступ к полной версии</h2>
            <p>Вы можете выбрать один из тарифов и получит доступ ко все вопросам и ответам</p>
            <a href="/prices" class="btn btn-default btn-xl sr-button">Получить доступ</a>
        </div>
    </div>
</section>

