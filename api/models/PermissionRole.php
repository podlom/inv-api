<?php

namespace api\models;


use Yii;
use common\models\PermissionRole as CommonPermissionRole;


/**
 * This is the model class for table "{{%permission_role}}".
 *
 * @property int $permission_id
 * @property string $role_id
 *
 * @property AuthAccessPermission $permission
 * @property AuthAccessRole $role
 */
class PermissionRole extends CommonPermissionRole
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * Gets query for [[Permission]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermission()
    {
        return $this->hasOne(AuthAccessPermission::className(), ['id' => 'permission_id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(AuthAccessRole::className(), ['id' => 'role_id']);
    }
}
