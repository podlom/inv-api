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
 * Class ReviewsController
 *
 * @package api\controllers
 */
class ReviewsController extends ActiveController
{
    public $modelClass = 'api\models\ReviewsEn';

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
            'image_url',
            'category',
            'first_name',
            'last_name',
            'company',
            'job',
            'rtext',
            'facebook_url',
            'linkedin_url',
            'published',
            'status',
            'lang',
        ];
    }
}
