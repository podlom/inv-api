<?php
/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

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
            'parent_id',
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }
}
