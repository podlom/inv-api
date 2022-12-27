<?php

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class AnalitikaController
 *
 * @package api\controllers
 */
class AnalitikaController extends ActiveController
{
    public $modelClass = 'api\models\AnalyticsRu';

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