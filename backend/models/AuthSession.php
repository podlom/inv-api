<?php

namespace backend\models;


use Yii;
use common\models\AuthSession as CommonAuthSession;


/**
 * This is the model class for table "{{%Auth_Session}}".
 *
 * @property string $sess_id
 * @property string $data
 * @property string $time
 * @property int|null $user_id
 *
 * @property AuthUser $user
 */
class AuthSession extends CommonAuthSession
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sess_id', 'data', 'time'], 'required'],
            [['data'], 'string'],
            [['time'], 'safe'],
            [['user_id'], 'integer'],
            [['sess_id'], 'string', 'max' => 255],
            [['sess_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sess_id' => Yii::t('app', 'Sess ID'),
            'data' => Yii::t('app', 'Data'),
            'time' => Yii::t('app', 'Time'),
            'user_id' => Yii::t('app', 'User ID'),
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
