<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $Id
 * @property string $city
 * @property string $area
 * @property string $suroffice
 * @property string $community
 * @property string $village
 * @property string $house_id
 * @property integer $huzhu
 * @property string $name
 * @property integer $sex
 * @property string $birthday
 * @property integer $age
 * @property string $identity_id
 * @property integer $nation
 * @property integer $residence
 * @property integer $ryxz
 * @property integer $jkzt
 * @property integer $zzmm
 * @property integer $whcd
 * @property integer $profession
 * @property string $ylbxkh
 * @property string $ylbxzh
 * @property string $dmzh
 * @property integer $remove
 * @property string $phone
 * @property string $address
 * @property string $address_now
 * @property string $remark
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user
 * @property integer $update_user
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['huzhu', 'sex', 'age', 'nation', 'residence', 'ryxz', 'jkzt', 'zzmm', 'whcd', 'profession', 'remove', 'create_user', 'update_user'], 'integer'],
            [['birthday', 'create_time', 'update_time'], 'safe'],
            [['city', 'area', 'suroffice', 'community', 'village', 'house_id'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 32],
            [['identity_id'], 'string', 'max' => 18],
            [['ylbxkh', 'ylbxzh', 'dmzh'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 11],
            [['address', 'address_now', 'remark'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'city' => '城市',
            'area' => '区',
            'suroffice' => '办事处/乡镇',
            'community' => '社区',
            'village' => '村/庄',
            'house_id' => '户号',
            'huzhu' => '户主关系',
            'name' => '姓名',
            'sex' => '性别',
            'birthday' => '出生日期',
            'age' => '年龄',
            'identity_id' => '身份证号',
            'nation' => '民族',
            'residence' => '户口',
            'ryxz' => '人员性质',
            'jkzt' => '健康状态',
            'zzmm' => '政治面貌',
            'whcd' => '文化程度',
            'profession' => '职业',
            'ylbxkh' => '养老保险卡号',
            'ylbxzh' => '养老保险存折号',
            'dmzh' => '地亩存折号',
            'remove' => '是否拆迁',
            'phone' => '联系号码',
            'address' => '地址',
            'address_now' => '现居住地',
            'remark' => '备注',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'create_user' => 'Create User',
            'update_user' => 'Update User',
        ];
    }
}
