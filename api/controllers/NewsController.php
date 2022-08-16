<?php

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class NewsController
 *
 * @package api\controllers
 */
class NewsController extends ActiveController
{
    public $modelClass = 'api\models\NewsRu';

    public function fields()
    {
        return [
            'id',
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }
}
