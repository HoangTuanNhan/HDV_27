<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PasswordResets;

/**
 * PasswordResetSearch represents the model behind the search form about `common\models\PasswordResets`.
 */
class PasswordResetSearch extends PasswordResets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'token'], 'safe'],
            [['create_at', 'update_at', 'deelte_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PasswordResets::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'deelte_at' => $this->deelte_at,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'token', $this->token]);

        return $dataProvider;
    }
}
