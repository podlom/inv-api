<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class InvestmentsController
 *
 * @package api\controllers
 */
class InvestmentsController extends ActiveController
{
    public $modelClass = 'api\models\InvestsEn';

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