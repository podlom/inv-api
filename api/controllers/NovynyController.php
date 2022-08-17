<?php

namespace api\controllers;


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
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }
}
