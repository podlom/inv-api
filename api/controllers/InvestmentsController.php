<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras@shkodenko.com>
 */

namespace api\controllers;


use yii\rest\ActiveController;
use api\models\InvestsEnSearch;

/**
 * Class InvestmentsController
 *
 * @package api\controllers
 */
class InvestmentsController extends ActiveController
{
    public $modelClass = 'api\models\InvestsEn';

    public function actions()
    {
        $actions = parent::actions();

        // Override the `index` action to use the search model
        $actions['index']['prepareDataProvider'] = function ($action) {
            $searchModel = new InvestsEnSearch();
            return $searchModel->search(\Yii::$app->request->queryParams);
        };

        return $actions;
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