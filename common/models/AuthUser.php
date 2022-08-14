<?php

namespace common\models;


use Yii;


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
 *
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
class AuthUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Auth_User}}';
    }
}
