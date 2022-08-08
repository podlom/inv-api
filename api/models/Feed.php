<?php

namespace api\models;


use yii\helpers\Url;
use yii\db\ActiveRecord;
use yii\web\Link;
use yii\web\Linkable;


class Feed extends ActiveRecord implements Linkable
{
    public static function tableName()
    {
        return '{{%feed}}';
    }

    /**
     * Returns a list of links.
     *
     * Each link is either a URI or a [[Link]] object. The return value of this method should
     * be an array whose keys are the relation names and values the corresponding links.
     *
     * If a relation name corresponds to multiple links, use an array to represent them.
     *
     * For example,
     *
     * ```php
     * [
     *     'self' => 'http://example.com/users/1',
     *     'friends' => [
     *         'http://example.com/users/2',
     *         'http://example.com/users/3',
     *     ],
     *     'manager' => $managerLink, // $managerLink is a Link object
     * ]
     * ```
     *
     * @return array the links
     */
    public function getLinks()
    {
        return [
            'news' => Url::to(['news/view', 'id' => $this->news_id], true),
            'analytics' => Url::to(['analytics/view', 'id' => $this->analytics_id], true),
            'project' => Url::to(['project/view', 'id' => $this->project_id], true),
        ];
    }
}