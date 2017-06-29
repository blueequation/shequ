<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property integer $Id
 * @property string $name
 * @property string $areacode
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
            [['areacode'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'name' => '名称',
            'areacode' => '区域代码',
        ];
    }
}
