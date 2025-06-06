<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use Yii;
use common\models\InvestsUk as CommonInvestsUk;


/**
 * This is the model class for table "{{%invests_uk}}".
 *
 * @property int $id
 * @property string $h1
 * @property int $status
 * @property int $deleted
 * @property string $published
 * @property string $short_text
 * @property string|null $subpath
 * @property string|null $created
 * @property string|null $updated
 * @property string $attr (DC2Type:json_array)
 * @property int $class
 * @property int|null $image_id
 * @property string|null $image_url
 * @property int|null $user_id
 * @property int|null $route_id
 * @property int|null $views_1
 * @property float|null $rating_2
 * @property int|null $parent_id
 */

class InvestsUk extends CommonInvestsUk
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