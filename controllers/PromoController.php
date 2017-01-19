<?php

namespace app\controllers;

use app\models\SearchQuestion;
use yii\web\Controller;

/**
 * PageController implements the CRUD actions for Page model.
 */
class PromoController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionQuestions()
    {
        $questions = SearchQuestion::find()->all();

        return $this->render('questions', ['questions' => $questions]);
    }

    public function actionPrices()
    {
        return $this->render('prices');
    }
}
