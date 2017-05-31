<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nation".
 *
 * @property integer $Id
 * @property string $text
 */
class Nation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nation';
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
