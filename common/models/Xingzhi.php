<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xingzhi".
 *
 * @property integer $Id
 * @property string $text
 */
class Xingzhi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xingzhi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string', 'max' => 30],
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
