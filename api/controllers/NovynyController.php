<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\controllers;

use yii\filters\Cors;
use yii\base\DynamicModel;
use yii\rest\ActiveController;

/**
 * Class NewsukController
 *
 * @package api\controllers
 */
class NovynyController extends ActiveController
{
    public $modelClass = 'api\models\NewsUk';

    public function actions()
    {
        $actions = parent::actions();

        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'attributeMap' => [
                'categoryIn' => 'category_in',
                'categoryTitle' => 'category_title',
            ],
            'searchModel' => (new DynamicModel(['id', 'category_id', 'category_title']))->addRule(['id', 'category_id'], 'integer', ['min' => 1])->addRule(['category_title'], 'string', ['length' => [1, 255]]),
        ];

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
            'parent_id',
            'h1',
            'published',
            'short_text',
            'subpath',
            'created',
        ];
    }
}
