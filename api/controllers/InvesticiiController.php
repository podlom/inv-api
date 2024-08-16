<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class InvesticiiController
 *
 * @package api\controllers
 */
class InvesticiiController extends ActiveController
{
    public $modelClass = 'api\models\InvestsRu';

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