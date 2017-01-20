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
            [['name', 'slug'], 'required'],
            [['category_id', 'type_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['description', 'form_description'], 'string'],
            [
                ['name', 'slug', 'ref', 'title', 'form_title', 'form_footer_text', 'form_button_text', 'footer_text'],
                'string',
                'max' => 255
            ],
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
            'name'             => Yii::t('app', 'Название страницы'),
            'category_id'      => Yii::t('app', 'Предмет'),
            'type_id'          => Yii::t('app', 'Тип работы'),
            'slug'             => Yii::t('app', 'Алиас url'),
            'created'          => Yii::t('app', 'Дата создания'),
            'modified'         => Yii::t('app', 'Дата обновления'),
            'ref'              => Yii::t('app', 'Ref'),
            'title'            => Yii::t('app', 'Заголовок страницы'),
            'description'      => Yii::t('app', 'Описание страницы'),
            'form_title'       => Yii::t('app', 'Заголовок формы'),
            'form_description' => Yii::t('app', 'Описание формы'),
            'form_footer_text' => Yii::t('app', 'Текст футера в форме'),
            'form_button_text' => Yii::t('app', 'Текст кнопки в форме'),
            'footer_text'      => Yii::t('app', 'Текст в футере страницы'),
        ];
    }
}
