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

        return $this->render('item', [
            'model' => $model,
            'currentType' => $currentType
        ]);
    }

    public function actionQuestions($typeId = 1)
    {
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
        return $this->render('prices');
    }
}
