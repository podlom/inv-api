<?php
/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\controllers;


use yii\base\DynamicModel;
use yii\rest\ActiveController;


/**
 * Class NewsukController
 *
 * @package api\controllers
 */
class NovynyController extends ActiveController
{
    public $modelClass = 'api\models\NewsUk';

    public function fields()
    {
        return [
            'id',
            'parent_id',
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }

    public function actions()
    {
        $actions = parent::actions();

        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'attributeMap' => [
                'categoryIn' => 'category_in',
                'categoryTitle' => 'category_title',
            ],
            'searchModel' => (new DynamicModel(['id', 'category_id', 'category_title']))->addRule(['id', 'category_id'], 'integer', ['min' => 1])->addRule(['category_title'], 'string', ['length' => [1, 255]]),
        ];

        return $actions;
    }
}
