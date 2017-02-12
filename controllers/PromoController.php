<?php

namespace app\controllers;

use app\models\Question;
use app\models\SearchQuestion;
use app\models\Type;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * PageController implements the CRUD actions for Page model.
 */
class PromoController extends Controller
{

    public $layout = 'promo';

    public function beforeAction($action)
    {
        parent::beforeAction($action);

        \Yii::$app->view->registerMetaTag([
            'description' => 'Подготовка к собеседованию на вакансию php разработчик, full stack разработчик',
        ]);
        \Yii::$app->view->registerMetaTag([
            'keywords' => 'Собеседование, php, fullstack, вопросы к собеседованию, задачи с собеседований, интервью php, php developer подготовка',
        ]);
        \Yii::$app->view->title = 'Your offer! Будь готов к своему офферу!';

        return true;
    }

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionQuestion($slug)
    {
        $model = Question::findOne([
            'slug' => $slug
        ]);

        $currentType = Type::findOne($model->category_id);

        if (!$currentType) {
            $currentType = Type::findOne(1);
        }

        \Yii::$app->view->clear();
        \Yii::$app->view->title = $model->seo_title;
        \Yii::$app->view->registerMetaTag([
            'description' => $model->seo_description,
        ]);
        \Yii::$app->view->registerMetaTag([
            'keywords' => $model->seo_keyword,
        ]);

        return $this->render('item', [
            'model' => $model,
            'currentType' => $currentType
        ]);
    }

    public function actionQuestions($typeId = 1)
    {
        \Yii::$app->view->title = 'Вопросы к собеседованию';

        $dataProvider = new ActiveDataProvider([
            'query' => Question::find()->where([
                'category_id' => $typeId,
                'is_public' => true
            ])->orderBy('created DESC'),
            'pagination' => [
                'pageSize' => 20
            ],
        ]);

        $currentType = Type::findOne($typeId);

        if (!$currentType) {
            $currentType = Type::findOne(1);
        }

        return $this->render('questions', [
            'dataProvider' => $dataProvider,
            'currentType' => $currentType
        ]);
    }

    public function actionPrices()
    {
        \Yii::$app->view->title = 'Получить доступ ко всем вопросам и ответам';

        return $this->render('prices');
    }

    public function actionPay($id)
    {
        \Yii::$app->view->title = 'Получить доступ ко всем вопросам и ответам';

        switch ($id) {
            case 1:
                $sum = 99;
                break;
            case 2:
                $sum = 499;
                break;
            case 3:
                $sum = 999;
                break;
            default:
                $sum = 10;
        }

        return $this->render('pay', ['sum' => $sum]);
    }
}
