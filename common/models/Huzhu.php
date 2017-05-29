<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "huzhu".
 *
 * @property integer $Id
 * @property string $text
 */
class Huzhu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'huzhu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'text' => 'Text',
        ];
    }
}
