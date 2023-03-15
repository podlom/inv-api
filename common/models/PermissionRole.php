<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%permission_role}}".
 *
 * @property int $permission_id
 * @property string $role_id
 *
 * @property AuthAccessPermission $permission
 * @property AuthAccessRole $role
 */
class PermissionRole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%permission_role}}';
    }
}
