<?php

namespace backend\models;


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
        return [
            [['login', 'token', 'expires'], 'required'],
            [['user_id'], 'integer'],
            [['expires'], 'safe'],
            [['login', 'token'], 'string', 'max' => 255],
            [['login'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login' => Yii::t('app', 'Login'),
            'user_id' => Yii::t('app', 'User ID'),
            'token' => Yii::t('app', 'Token'),
            'expires' => Yii::t('app', 'Expires'),
        ];
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
