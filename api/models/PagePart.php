<?php

namespace api\models;


use Yii;
use common\models\PagePart as CommonPagePart;


/**
 * This is the model class for table "{{%PagePart}}".
 *
 * @property int $id
 * @property int|null $page_id
 * @property string|null $title
 * @property string|null $name
 * @property string|null $text
 * @property string|null $url
 * @property int $type
 *
 * @property AuthUser[] $authUsers
 * @property Digest $digest
 * @property Page $page
 * @property Page[] $pages
 */
class PagePart extends CommonPagePart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'type'], 'integer'],
            [['text'], 'string'],
            [['type'], 'required'],
            [['title', 'name', 'url'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'page_id' => Yii::t('app', 'Page ID'),
            'title' => Yii::t('app', 'Title'),
            'name' => Yii::t('app', 'Name'),
            'text' => Yii::t('app', 'Text'),
            'url' => Yii::t('app', 'Url'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * Gets query for [[AuthUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthUsers()
    {
        return $this->hasMany(AuthUser::className(), ['image_id' => 'id']);
    }

    /**
     * Gets query for [[Digest]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDigest()
    {
        return $this->hasOne(Digest::className(), ['image_id' => 'id']);
    }

    /**
     * Gets query for [[Page]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }

    /**
     * Gets query for [[Pages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['image_id' => 'id']);
    }
}
