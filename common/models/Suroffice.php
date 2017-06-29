<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suroffice".
 *
 * @property integer $Id
 * @property string $name
 * @property string $areacode
 */
class Suroffice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suroffice';
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
            'name' => 'Name',
            'areacode' => 'Areacode',
        ];
    }
}
