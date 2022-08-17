<?php

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class NovostiController
 *
 * @package api\controllers
 */
class NovostiController extends ActiveController
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
