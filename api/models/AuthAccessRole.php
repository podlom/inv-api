<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use Yii;
use common\models\AuthAccessRole as CommonAuthAccessRole;

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
class AuthAccessRole extends CommonAuthAccessRole
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
        return $this->hasMany(PermissionRole::className(), ['role_id' => 'id']);
    }

    /**
     * Gets query for [[Permissions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermissions()
    {
        return $this->hasMany(AuthAccessPermission::className(), ['id' => 'permission_id'])->viaTable('{{%permission_role}}', ['role_id' => 'id']);
    }

    /**
     * Gets query for [[UserRoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserRoles()
    {
        return $this->hasMany(UserRole::className(), ['role_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(AuthUser::className(), ['id' => 'user_id'])->viaTable('{{%user_role}}', ['role_id' => 'id']);
    }
}
