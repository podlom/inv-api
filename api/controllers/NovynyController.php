<?php
/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

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
            'parent_id',
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }
}
