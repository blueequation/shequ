<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Person;

/**
 * PersonSearch represents the model behind the search form about `common\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'huhao',  'nation', 'ryxz', 'jkzt', 'huzhu', 'created_at', 'updated_at', 'zzmm', 'whcd', 'zhiye'], 'integer'],
            [['village', 'name','sex', 'hkxz', 'date', 'sfid', 'phone', 'ylbxkh', 'zhkh', 'dmkh', 'jzkh', 'info', 'address', 'nowaddress'], 'safe'],
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
        $query = Person::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>10,],
            'sort'=>[
                'defaultOrder'=>[
                    'id'=>SORT_DESC,
                ],
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'huhao' => $this->huhao,
            'sex' => $this->sex,
            'date' => $this->date,
            'nation' => $this->nation,
            'hkxz' => $this->hkxz,
            'ryxz' => $this->ryxz,
            'jkzt' => $this->jkzt,
            'huzhu' => $this->huzhu,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'zzmm' => $this->zzmm,
            'whcd' => $this->whcd,
            'zhiye' => $this->zhiye,
        ]);

        $query->andFilterWhere(['like', 'village', $this->village])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'sfid', $this->sfid])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'ylbxkh', $this->ylbxkh])
            ->andFilterWhere(['like', 'zhkh', $this->zhkh])
            ->andFilterWhere(['like', 'dmkh', $this->dmkh])
            ->andFilterWhere(['like', 'jzkh', $this->jzkh])
            ->andFilterWhere(['like', 'info', $this->info])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'nowaddress', $this->nowaddress]);

        return $dataProvider;
    }
}
