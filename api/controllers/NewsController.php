<?php

namespace api\controllers;


use yii\rest\ActiveController;


/**
 * Class NewsController
 *
 * @package api\controllers
 */
class NewsController extends ActiveController
{
    public $modelClass = 'api\models\Page';
}
