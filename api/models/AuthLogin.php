<?php

namespace api\models;


use Yii;
use common\models\AuthLogin as CommonAuthLogin;


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
class AuthLogin extends CommonAuthLogin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
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
