<?php

declare(strict_types=1);

/**
 * @author    Taras Shkodenko <taras.shkodenko@gmail.com>
 * @copyright Shkodenko V. Taras, https://www.shkodenko.com/
 */

namespace api\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class InvestsRuSearch extends InvestsRu
{
    public function rules()
    {
        return [
            [['parent_id', 'route_id'], 'integer'],
            [['id', 'h1', 'published', 'short_text', 'subpath', 'created'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = InvestsRu::find();

        // Create ActiveDataProvider instance with the query
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // Load the search parameters
        $this->load($params);

        // If validation fails, return the data provider without applying any filters
        if (!$this->validate()) {
            return $dataProvider;
        }

        // Apply filtering conditions here
        $query->andFilterWhere(['parent_id' => $this->parent_id])
            ->andFilterWhere(['route_id' => $this->route_id]);

        // Add other conditions if necessary
        $query->andFilterWhere(['like', 'h1', $this->h1])
            ->andFilterWhere(['like', 'short_text', $this->short_text]);

        return $dataProvider;
    }
}
