<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "village".
 *
 * @property integer $Id
 * @property string $name
 * @property string $areacode
 */
class Village extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'village';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
            [['areacode'], 'string', 'max' => 14],
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
