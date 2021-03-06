<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Yoffer',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            Yii::$app->user->isGuest ? '' : ['label' => 'Вопросы', 'url' => ['/room/']],
            Yii::$app->user->isGuest ?
                ['label' => 'Войти', 'url' => ['/user/login']] : // or ['/user/login-email']
                ['label' => 'Выйти (' . Yii::$app->user->displayName . ')',
                 'url' => ['/user/logout'],
                 'linkOptions' => ['data-method' => 'post']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"></p>
    </div>
</footer>

<?php $this->endBody() ?>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    hljs.initHighlightingOnLoad();
</script>
</body>
</html>
<?php $this->endPage() ?>
