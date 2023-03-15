<?php

namespace api\models;


use Yii;
use common\models\UserRole as CommonUserRole;


/**
 * This is the model class for table "{{%user_role}}".
 *
 * @property int $user_id
 * @property string $role_id
 *
 * @property AuthAccessRole $role
 * @property AuthUser $user
 */
class UserRole extends CommonUserRole
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(AuthUser::className(), ['id' => 'user_id']);
    }
}
