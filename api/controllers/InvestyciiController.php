<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;
use api\models\InvestsUkSearch;

/**
 * Class InvestyciiController
 *
 * @package api\controllers
 */
class InvestyciiController extends ActiveController
{
    public $modelClass = 'api\models\InvestsUk';

    public function actions()
    {
        $actions = parent::actions();

        // Override the `index` action to use the search model
        $actions['index']['prepareDataProvider'] = function ($action) {
            $searchModel = new InvestsUkSearch();
            return $searchModel->search(\Yii::$app->request->queryParams);
        };

        return $actions;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Додаємо CORS
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => [
                    'https://api.inventure.com.ua',
                    'https://inventure.com.ua',
                    'https://www.inventure.com.ua',
                    'http://localhost:3000',
                    'https://inventure-pricing-ivgk.vercel.app',
                ],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age' => 86400,
            ],
        ];

        return $behaviors;
    }

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