<?php

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class AnalitykaController
 *
 * @package api\controllers
 */
class AnalitykaController extends ActiveController
{
    public $modelClass = 'api\models\AnalyticsUk';

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