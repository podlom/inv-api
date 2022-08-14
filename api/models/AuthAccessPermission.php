<?php

namespace api\models;


use Yii;
use common\models\AuthAccessPermission as CommonAuthAccessPermission;


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
class AuthAccessPermission extends CommonAuthAccessPermission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * Gets query for [[PermissionRoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermissionRoles()
    {
        return $this->hasMany(PermissionRole::className(), ['permission_id' => 'id']);
    }

    /**
     * Gets query for [[Roles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(AuthAccessRole::className(), ['id' => 'role_id'])->viaTable('{{%permission_role}}', ['permission_id' => 'id']);
    }
}
