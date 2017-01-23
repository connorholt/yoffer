<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
               href="#collapse-<?=$model->id;?>">
                <?=($index +1);?>. <?=$model->title;?>
            </a>
            <?php if ($model->is_show_answer): ?>
            <i class="fa fa-lightbulb-o pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Ответ доступен бесплатно"></i>
            <?php endif;?>
            <?php if ($model->is_famous): ?>
            <i class="fa fa-graduation-cap pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Вопрос из известной компании"></i>
            <?php endif;?>
            <?php if ($model->is_often): ?>
            <i class="fa fa-line-chart pull-right grey" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Популярный вопрос"></i>
            <?php endif;?>
        </h4>
    </div>
    <div id="collapse-<?=$model->id;?>" class="panel-collapse collapse">
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
