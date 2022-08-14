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
        return [];
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
