<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "community".
 *
 * @property integer $Id
 * @property string $name
 * @property string $areacode
 */
class Community extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'community';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
            [['areacode'], 'string', 'max' => 12],
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
