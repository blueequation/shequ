<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suroffice".
 *
 * @property integer $Id
 * @property string $office
 * @property integer $code
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
            [['code'], 'integer'],
            [['office'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'office' => 'Office',
            'code' => 'Code',
        ];
    }
}
