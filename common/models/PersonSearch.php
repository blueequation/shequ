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
            [['Id', 'huzhu', 'sex', 'age', 'nation', 'residence', 'ryxz', 'jkzt', 'zzmm', 'whcd', 'profession', 'remove', 'create_user', 'update_user'], 'integer'],
            [['city', 'area', 'suroffice', 'community', 'village', 'house_id', 'name', 'birthday', 'identity_id', 'ylbxkh', 'ylbxzh', 'dmzh', 'phone', 'address', 'address_now', 'remark', 'create_time', 'update_time'], 'safe'],
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

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'huzhu' => $this->huzhu,
            'sex' => $this->sex,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'nation' => $this->nation,
            'residence' => $this->residence,
            'ryxz' => $this->ryxz,
            'jkzt' => $this->jkzt,
            'zzmm' => $this->zzmm,
            'whcd' => $this->whcd,
            'profession' => $this->profession,
            'remove' => $this->remove,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'create_user' => $this->create_user,
            'update_user' => $this->update_user,
        ]);

        $query->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'suroffice', $this->suroffice])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'village', $this->village])
            ->andFilterWhere(['like', 'house_id', $this->house_id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'identity_id', $this->identity_id])
            ->andFilterWhere(['like', 'ylbxkh', $this->ylbxkh])
            ->andFilterWhere(['like', 'ylbxzh', $this->ylbxzh])
            ->andFilterWhere(['like', 'dmzh', $this->dmzh])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address_now', $this->address_now])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
