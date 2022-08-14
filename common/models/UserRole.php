<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%user_role}}".
 *
 * @property int $user_id
 * @property string $role_id
 *
 * @property AuthAccessRole $role
 * @property AuthUser $user
 */
class UserRole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_role}}';
    }
}
