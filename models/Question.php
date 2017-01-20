<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 *
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'answer', 'question', 'slug'], 'required'],
            [['category_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['seo_description', 'seo_keyword', 'seo_title'], 'string'],
            [['slug'], 'unique'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class'              => TimestampBehavior::className(),
                'value'              => new Expression('NOW()'),
                'createdAtAttribute' => 'created',
                'updatedAtAttribute' => 'modified',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'               => Yii::t('app', 'ID'),
            'title'            => Yii::t('app', 'Заголовок'),
            'category_id'      => Yii::t('app', 'Категория'),
            'type_id'          => Yii::t('app', 'Тип работы'),
            'slug'             => Yii::t('app', 'Алиас url'),
            'question'         => Yii::t('app', 'Вопрос'),
            'answer'           => Yii::t('app', 'Ответ'),
            'created'          => Yii::t('app', 'Дата создания'),
            'modified'         => Yii::t('app', 'Дата обновления'),
            'ref'              => Yii::t('app', 'Ref'),
            'seo_description'  => Yii::t('app', 'Seo description'),
            'seo_title'        => Yii::t('app', 'Seo заголовок'),
            'seo_keyword'      => Yii::t('app', 'Seo ключевые слова'),
        ];
    }
}
