<?php

namespace common\models;


use Yii;


/**
 * This is the model class for table "{{%Page}}".
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
 *
 * @property AnalyticsPage $analyticsPage
 * @property CoreAttributeSchema[] $coreAttributeSchemas
 * @property PagePart $image
 * @property LocaleGroup $localeGroup
 * @property LocaleGroup $localeGroup0
 * @property LocaleGroup $localeGroup1
 * @property LocaleGroup $localeGroup2
 * @property Metadata $metadata
 * @property PagePart[] $pageParts
 * @property Page[] $pages
 * @property Page[] $pages0
 * @property Page $parent
 * @property PostPage[] $postPages
 * @property PostPage[] $postPages0
 * @property PostRubric[] $postRubrics
 * @property PostRubric[] $postRubrics0
 * @property Page[] $posts
 * @property Page[] $posts0
 * @property Routing $route
 * @property Page[] $rubrics
 * @property CoreAttributeType[] $types
 * @property AuthUser $user
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Page}}';
    }
}
