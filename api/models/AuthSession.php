<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

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
