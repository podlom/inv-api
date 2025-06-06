<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use Yii;
use common\models\AuthUser as CommonAuthUser;

/**
 * This is the model class for table "{{%Auth_User}}".
 *
 * @property int $id
 * @property string|null $email
 * @property string $name
 * @property string $passwd
 * @property int $status
 * @property string $attr (DC2Type:json_array)
 * @property int|null $image_id
 * @property AuthLogin[] $authLogins
 * @property AuthSession[] $authSessions
 * @property PagePart $image
 * @property InvoiceUser[] $invoiceUsers
 * @property PaymentInvoice[] $invoices
 * @property Page[] $pages
 * @property PollVote[] $pollVotes
 * @property AuthAccessRole[] $roles
 * @property UserRole[] $userRoles
 * @property PollVariant[] $variants
 */
class AuthUser extends CommonAuthUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * Gets query for [[AuthLogins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthLogins()
    {
        return $this->hasMany(AuthLogin::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[AuthSessions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthSessions()
    {
        return $this->hasMany(AuthSession::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Image]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(PagePart::className(), ['id' => 'image_id']);
    }

    /**
     * Gets query for [[InvoiceUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceUsers()
    {
        return $this->hasMany(InvoiceUser::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(PaymentInvoice::className(), ['id' => 'invoice_id'])->viaTable('{{%invoice_user}}', ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Pages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[PollVotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPollVotes()
    {
        return $this->hasMany(PollVote::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Roles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(AuthAccessRole::className(), ['id' => 'role_id'])->viaTable('{{%user_role}}', ['user_id' => 'id']);
    }

    /**
     * Gets query for [[UserRoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserRoles()
    {
        return $this->hasMany(UserRole::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Variants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVariants()
    {
        return $this->hasMany(PollVariant::className(), ['id' => 'variant_id'])->viaTable('{{%Poll_Vote}}', ['user_id' => 'id']);
    }
}
