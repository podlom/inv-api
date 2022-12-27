<?php

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class AnaliticsController
 *
 * @package api\controllers
 */
class AnaliticsController extends ActiveController
{
    public $modelClass = 'api\models\AnalyticsEn';

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