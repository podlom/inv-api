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
        return [
            [['permission_id', 'role_id'], 'required'],
            [['permission_id'], 'integer'],
            [['role_id'], 'string', 'max' => 255],
            [['permission_id', 'role_id'], 'unique', 'targetAttribute' => ['permission_id', 'role_id']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthAccessRole::className(), 'targetAttribute' => ['role_id' => 'id']],
            [['permission_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthAccessPermission::className(), 'targetAttribute' => ['permission_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'permission_id' => Yii::t('app', 'Permission ID'),
            'role_id' => Yii::t('app', 'Role ID'),
        ];
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
