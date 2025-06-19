<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use Yii;
use common\models\DigestReviewsEn as CommonDigestReviewsEn;

/**
 * This is the model class for table "{{%digest_reviews_en}}".
 *
 * @property int $id
 * @property string $image_url
 * @property string $category
 * @property string $first_name
 * @property string $last_name
 * @property string $company
 * @property string $job
 * @property string $rtext
 * @property string $facebook_url
 * @property string $linkedin_url
 * @property string|null $published
 * @property string|null $created
 * @property string|null $updated
 * @property int $status
 * @property string $lang
 */
class DigestReviewsEn extends CommonDigestReviewsEn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    public static function primaryKey()
    {
        return ['id'];
    }
}
