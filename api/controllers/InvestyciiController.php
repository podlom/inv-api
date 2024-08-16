<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class InvestyciiController
 *
 * @package api\controllers
 */
class InvestyciiController extends ActiveController
{
    public $modelClass = 'api\models\InvestsUk';

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