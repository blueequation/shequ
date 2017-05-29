<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zzmm".
 *
 * @property integer $Id
 * @property string $text
 */
class Zzmm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zzmm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string', 'max' => 255],
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
