<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use Yii;
use common\models\NewsUk as CommonNewsUk;

/**
 * This is the model class for table "{{%news_uk}}".
 *
 * @property int $id
 * @property int|null $image_id
 * @property int|null $user_id
 * @property int|null $route_id
 * @property int|null $parent_id
 * @property string $h1
 * @property int $deleted
 * @property string $published
 * @property string $short_text
 * @property string|null $subpath
 * @property string|null $created
 * @property string|null $updated
 * @property string $attr (DC2Type:json_array)
 * @property int $status
 * @property int $class
 * @property float|null $rating
 * @property int|null $sort1
 * @property int|null $past2
 * @property string|null $picture_url
 * @property int|null $category_id
 * @property string|null $category_title
 */
class NewsUk extends CommonNewsUk
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
