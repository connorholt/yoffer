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
            [['created', 'modified', 'is_public', 'is_show_answer', 'is_often', 'is_famous', 'like', 'dislike'], 'safe'],
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
            'slug'             => Yii::t('app', 'Алиас url'),
            'question'         => Yii::t('app', 'Вопрос'),
            'answer'           => Yii::t('app', 'Ответ'),
            'created'          => Yii::t('app', 'Дата создания'),
            'modified'         => Yii::t('app', 'Дата обновления'),
            'ref'              => Yii::t('app', 'Ref'),
            'seo_description'  => Yii::t('app', 'Seo description'),
            'seo_title'        => Yii::t('app', 'Seo заголовок'),
            'seo_keyword'      => Yii::t('app', 'Seo ключевые слова'),
            'is_public'        => Yii::t('app', 'Опубликовать'),
            'is_show_answer'   => Yii::t('app', 'Показывать ответ бесплатно'),
            'is_often'         => Yii::t('app', 'Частовстречающийся'),
            'is_famous'        => Yii::t('app', 'Вопрос известной компании'),
            'like'             => Yii::t('app', 'За вопрос'),
            'dislike'          => Yii::t('app', 'Против вопроса'),
        ];
    }
}
