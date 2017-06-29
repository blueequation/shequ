<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $Id
 * @property string $name
 * @property string $password
 * @property integer $status
 * @property integer $is_delete
 * @property integer $is_admin
 * @property integer $user_level
 * @property integer $area_code
 * @property integer $creat_time
 * @property integer $update_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'is_delete', 'is_admin', 'user_level', 'area_code', 'creat_time', 'update_time'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['password'], 'string', 'max' => 32],
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
            'password' => 'Password',
            'status' => 'Status',
            'is_delete' => 'Is Delete',
            'is_admin' => 'Is Admin',
            'user_level' => 'User Level',
            'area_code' => 'Area Code',
            'creat_time' => 'Creat Time',
            'update_time' => 'Update Time',
        ];
    }
}
