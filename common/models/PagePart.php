<?php

namespace common\models;


use Yii;


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
class PagePart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%PagePart}}';
    }
}
