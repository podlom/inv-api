<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%Auth_Access_Permission}}".
 *
 * @property int $id
 * @property string $title
 * @property string $type
 *
 * @property PermissionRole[] $permissionRoles
 * @property AuthAccessRole[] $roles
 */
class AuthAccessPermission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Auth_Access_Permission}}';
    }
}
