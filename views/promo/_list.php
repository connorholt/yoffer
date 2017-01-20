<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
               href="#collapse-3">
                <?=$model->title;?>
            </a>
        </h4>
    </div>
    <div id="collapse-3" class="panel-collapse collapse">
        <div class="panel-body">
            <b>Вопрос:</b><br />
            <?=$model->question;?>
        </div>
        <div class="panel-footer">
            <div class="btn-group btn-group-sm"><span class="btn">Понравился вопрос?</span><a class="btn btn-success" href="/prices"><i class="fa fa-thumbs-up"></i> Да</a> <a class="btn btn-danger" href="/prices"><i class="fa fa-thumbs-down"></i> Нет</a></div>
            <div class="btn-group btn-group-sm pull-right"><a class="btn btn-success" href="/prices">Узнать ответ</a></div>
        </div>
    </div>
</div>