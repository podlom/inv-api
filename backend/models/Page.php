<?php

namespace backend\models;


use Yii;
use common\models\Page as CommonPage;


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
class Page extends CommonPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_id', 'user_id', 'route_id', 'parent_id', 'deleted', 'status', 'class', 'sort1', 'past2'], 'integer'],
            [['h1', 'published', 'short_text', 'attr', 'class'], 'required'],
            [['published', 'created', 'updated'], 'safe'],
            [['short_text', 'attr'], 'string'],
            [['rating'], 'number'],
            [['h1', 'subpath'], 'string', 'max' => 255],
            [['route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Routing::className(), 'targetAttribute' => ['route_id' => 'id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => PagePart::className(), 'targetAttribute' => ['image_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image_id' => Yii::t('app', 'Image ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'route_id' => Yii::t('app', 'Route ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'h1' => Yii::t('app', 'H 1'),
            'deleted' => Yii::t('app', 'Deleted'),
            'published' => Yii::t('app', 'Published'),
            'short_text' => Yii::t('app', 'Short Text'),
            'subpath' => Yii::t('app', 'Subpath'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'attr' => Yii::t('app', 'Attr'),
            'status' => Yii::t('app', 'Status'),
            'class' => Yii::t('app', 'Class'),
            'rating' => Yii::t('app', 'Rating'),
            'sort1' => Yii::t('app', 'Sort 1'),
            'past2' => Yii::t('app', 'Past 2'),
        ];
    }

    /**
     * Gets query for [[AnalyticsPage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnalyticsPage()
    {
        return $this->hasOne(AnalyticsPage::className(), ['page_id' => 'id']);
    }

    /**
     * Gets query for [[CoreAttributeSchemas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoreAttributeSchemas()
    {
        return $this->hasMany(CoreAttributeSchema::className(), ['page_id' => 'id']);
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
     * Gets query for [[LocaleGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocaleGroup()
    {
        return $this->hasOne(LocaleGroup::className(), ['pl' => 'id']);
    }

    /**
     * Gets query for [[LocaleGroup0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocaleGroup0()
    {
        return $this->hasOne(LocaleGroup::className(), ['ru' => 'id']);
    }

    /**
     * Gets query for [[LocaleGroup1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocaleGroup1()
    {
        return $this->hasOne(LocaleGroup::className(), ['uk' => 'id']);
    }

    /**
     * Gets query for [[LocaleGroup2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocaleGroup2()
    {
        return $this->hasOne(LocaleGroup::className(), ['en' => 'id']);
    }

    /**
     * Gets query for [[Metadata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMetadata()
    {
        return $this->hasOne(Metadata::className(), ['page_id' => 'id']);
    }

    /**
     * Gets query for [[PageParts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPageParts()
    {
        return $this->hasMany(PagePart::className(), ['page_id' => 'id']);
    }

    /**
     * Gets query for [[Pages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['parent_id' => 'id']);
    }

    /**
     * Gets query for [[Pages0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages0()
    {
        return $this->hasMany(Page::className(), ['id' => 'page_id'])->viaTable('{{%post_page}}', ['post_id' => 'id']);
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Page::className(), ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[PostPages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostPages()
    {
        return $this->hasMany(PostPage::className(), ['post_id' => 'id']);
    }

    /**
     * Gets query for [[PostPages0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostPages0()
    {
        return $this->hasMany(PostPage::className(), ['page_id' => 'id']);
    }

    /**
     * Gets query for [[PostRubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostRubrics()
    {
        return $this->hasMany(PostRubric::className(), ['post_id' => 'id']);
    }

    /**
     * Gets query for [[PostRubrics0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostRubrics0()
    {
        return $this->hasMany(PostRubric::className(), ['rubric_id' => 'id']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Page::className(), ['id' => 'post_id'])->viaTable('{{%post_page}}', ['page_id' => 'id']);
    }

    /**
     * Gets query for [[Posts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts0()
    {
        return $this->hasMany(Page::className(), ['id' => 'post_id'])->viaTable('{{%post_rubric}}', ['rubric_id' => 'id']);
    }

    /**
     * Gets query for [[Route]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Routing::className(), ['id' => 'route_id']);
    }

    /**
     * Gets query for [[Rubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRubrics()
    {
        return $this->hasMany(Page::className(), ['id' => 'rubric_id'])->viaTable('{{%post_rubric}}', ['post_id' => 'id']);
    }

    /**
     * Gets query for [[Types]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypes()
    {
        return $this->hasMany(CoreAttributeType::className(), ['id' => 'type_id'])->viaTable('{{%Core_Attribute_Schema}}', ['page_id' => 'id']);
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
