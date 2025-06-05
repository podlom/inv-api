<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;
use api\models\InvestsRuSearch;

/**
 * Class InvesticiiController
 *
 * @package api\controllers
 */
class InvesticiiController extends ActiveController
{
    public $modelClass = 'api\models\InvestsRu';

    public function actions()
    {
        $actions = parent::actions();

        // Override the `index` action to use the search model
        $actions['index']['prepareDataProvider'] = function ($action) {
            $searchModel = new InvestsRuSearch();
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