<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%Auth_Session}}".
 *
 * @property string $sess_id
 * @property string $data
 * @property string $time
 * @property int|null $user_id
 *
 * @property AuthUser $user
 */
class AuthSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Auth_Session}}';
    }
}
