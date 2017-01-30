<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;


$this->title = $model->seo_title;
$this->metaTags['description'] = $model->seo_description;
$this->metaTags['keyword'] = $model->seo_keyword;
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
</style>
<section id="bs-pricing-five" class="bs-pricing-five bg-white">
    <div class="container">
        <div class="page-header">
            <h3><?=$model->title;?>
            </h3>
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
                        <div class="panel-body">
                            <b>Вопрос:</b><br />
                            <?=$model->question;?>
                        </div>
                        <?php if ($model->is_show_answer): ?>
                            <div class="panel-body">
                                <b>Ответ:</b><br />
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
                    <br />
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="/questions/<?= $model->getPrevSlug();?>" class="btn btn-default">Предыдущий вопрос</a>
                        <a href="/prices" class="btn btn-success">Все вопросы и ответы</a>
                        <a href="/questions/<?= $model->getNextSlug();?>" class="btn btn-default">Следующий вопрос</a>
                    </div>
                    <br />

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

<section id="contact"  class="bg-primary">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Получите доступ к полной версии</h2>
            <p>Вы можете выбрать один из тарифов и получит доступ ко все вопросам и ответам</p>
            <a href="/prices" class="btn btn-default btn-xl sr-button">Ознакомиться с тарифами</a>
        </div>
    </div>
</section>

