<?php

namespace backend\models;


use Yii;
use common\models\NewsEn as CommonNewsEn;


/**
 * This is the model class for table "{{%news_en}}".
 *
 * @property int $id
 * @property int|null $image_id
 * @property int|null $user_id
 * @property int|null $route_id
 * @property int|null $parent_id
 * @property string $h1
 * @property int $deleted
 * @property string $published
 * @property string $short_text
 * @property string|null $subpath
 * @property string|null $created
 * @property string|null $updated
 * @property string $attr (DC2Type:json_array)
 * @property int $status
 * @property int $class
 * @property float|null $rating
 * @property int|null $sort1
 * @property int|null $past2
 * @property string|null $picture_url
 * @property string|null $category_title
 */
class NewsEn extends CommonNewsEn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'image_id', 'user_id', 'route_id', 'parent_id', 'deleted', 'status', 'class', 'sort1', 'past2'], 'integer'],
            [['h1', 'published', 'short_text', 'attr', 'class'], 'required'],
            [['published', 'created', 'updated'], 'safe'],
            [['short_text', 'attr'], 'string'],
            [['rating'], 'number'],
            [['h1', 'subpath', 'picture_url', 'category_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image_id' => Yii::t('app', 'Image ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'route_id' => Yii::t('app', 'Route ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'h1' => Yii::t('app', 'H 1'),
            'deleted' => Yii::t('app', 'Deleted'),
            'published' => Yii::t('app', 'Published'),
            'short_text' => Yii::t('app', 'Short Text'),
            'subpath' => Yii::t('app', 'Subpath'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'attr' => Yii::t('app', 'Attr'),
            'status' => Yii::t('app', 'Status'),
            'class' => Yii::t('app', 'Class'),
            'rating' => Yii::t('app', 'Rating'),
            'sort1' => Yii::t('app', 'Sort 1'),
            'past2' => Yii::t('app', 'Past 2'),
            'picture_url' => Yii::t('app', 'Picture Url'),
            'category_title' => Yii::t('app', 'Category Title'),
        ];
    }
}
