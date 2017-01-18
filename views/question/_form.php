<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\WorkType;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
/* @var $form yii\widgets\ActiveForm */

if (!isset($isBatchUpdate)) {
    $isBatchUpdate = false;
}

?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (!$isBatchUpdate) : ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(
        ArrayHelper::map(WorkType::find()->all(), 'author24_id', 'name'),
        [
            'prompt'=>'Выберите тип..'
        ]
    ); ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <hr \>

    <?php endif; ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'form_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'form_footer_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_button_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'footer_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Обновить на всех страницах') : Yii::t('app', 'Сохранить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
