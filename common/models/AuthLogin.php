<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%Auth_Login}}".
 *
 * @property string $login
 * @property int|null $user_id
 * @property string $token
 * @property string $expires
 *
 * @property AuthUser $user
 */
class AuthLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Auth_Login}}';
    }
}
