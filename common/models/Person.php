<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $village
 * @property integer $huhao
 * @property string $name
 * @property string $sex
 * @property string $date
 * @property string $sfid
 * @property integer $nation
 * @property string $hkxz
 * @property integer $ryxz
 * @property integer $jkzt
 * @property string $phone
 * @property string $ylbxkh
 * @property string $zhkh
 * @property string $dmkh
 * @property string $jzkh
 * @property string $info
 * @property integer $huzhu
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $zzmm
 * @property integer $whcd
 * @property integer $zhiye
 * @property string $address
 * @property string $nowaddress
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
            [['huhao',  'nation',  'ryxz', 'jkzt', 'huzhu', 'created_at', 'updated_at', 'zzmm', 'whcd', 'zhiye'], 'integer'],
            [['date'], 'safe'],
            [['sex'],'string','max' => 2],
            [['hkxz'],'string','max' => 6],
            [['village', 'name'], 'string', 'max' => 10],
            [['sfid'], 'string', 'max' => 18],
            [['phone'], 'string', 'max' => 11],
            [['ylbxkh', 'zhkh', 'dmkh', 'jzkh'], 'string', 'max' => 20],
            [['info'], 'string', 'max' => 500],
            [['address', 'nowaddress'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'village' => '村/庄',
            'huhao' => '户号',
            'name' => '姓名',
            'sex' => '性别',
            'date' => '出生日期',
            'sfid' => '身份证号码',
            'nation' => '民族',
            'hkxz' => '户口性质',
            'ryxz' => '人员性质',
            'jkzt' => '健康状况',
            'phone' => '手机号码',
            'ylbxkh' => '医疗保险卡号',
            'zhkh' => '中行卡号',
            'dmkh' => '地亩卡号',
            'jzkh' => '就诊卡号',
            'info' => '备注',
            'huzhu' => '户主（与户主关系）',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'zzmm' => '政治面貌',
            'whcd' => '文化程度',
            'zhiye' => '职业',
            'address' => '地址',
            'nowaddress' => '现居住地',
        ];
    }
    public function getVillage0(){
        return $this->hasOne(Village::className(),['id'=>'village']);
    }
    public function getJiankang0(){
        return $this->hasOne(Jiankang::className(),['id'=>'jkzt']);
    }
    public function getWhcd0(){
        return $this->hasOne(Whcd::className(),['id'=>'whcd']);
    }
    public function getZhiye0(){
        return $this->hasOne(Zhiye::className(),['id'=>'zhiye']);
    }
    public function getZzmm0(){
        return $this->hasOne(Zzmm::className(),['id'=>'zzmm']);
    }
    public function getXingzhi0(){
        return $this->hasOne(Xingzhi::className(),['id'=>'ryxz']);
    }
    public function getHuzhu0(){
        return $this->hasOne(Huzhu::className(),['id'=>'huzhu']);
    }
    public function getNation0(){
        return $this->hasOne(Nation::className(),['id'=>'nation']);
    }

    public function beforeSave($insert){
        if (parent::beforeSave($insert)){
            if($insert){
                $this->created_at=date_time_set();
                $this->updated_at=date_time_set();
            }
            else
            {
                $this->updated_at=date_time_set();
            }
            return true;
        }
        else
        {
            return false;
        }
    }
}
