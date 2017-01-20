<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \sergeymakinen\facades\Session;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPage */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Вопросы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать вопрос'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Session::getFlash('error'); ?>
    <br />
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'slug',
                'value' => function ($data) {
                    return Html::a(Html::encode($data->slug), \yii\helpers\Url::to(['/' . $data->slug]), ['target' => '_blank']);
                },
                'format' => 'raw',
            ],
            // 'created',
            // 'modified',
            // 'ref',
            // 'title',
            // 'description:ntext',
            // 'form_title',
            // 'form_description:ntext',
            // 'form_footer_text',
            // 'form_button_text',
            // 'footer_text',

            ['class' => 'app\components\CustomActionColumn'],
        ],
    ]); ?>
</div>
