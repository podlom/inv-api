<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%Auth_Access_Role}}".
 *
 * @property string $id
 * @property string $description
 *
 * @property PermissionRole[] $permissionRoles
 * @property AuthAccessPermission[] $permissions
 * @property UserRole[] $userRoles
 * @property AuthUser[] $users
 */
class AuthAccessRole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Auth_Access_Role}}';
    }
}
