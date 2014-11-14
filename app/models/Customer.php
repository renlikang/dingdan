<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xy_customer".
 *
 * @property integer $id
 * @property string $customer_code
 * @property string $customer_name
 * @property string $cw_csode
 * @property string $shop_name
 * @property string $souhuoren
 * @property string $souhuo_address
 * @property string $lianxifangshi
 * @property string $customer_type
 * @property integer $rebate_type
 * @property integer $rebate
 * @property string $account
 * @property string $file_address
 * @property string $memo
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_code','cw_csode','souhuoren','rebate_type','rebate','account','file_address','customer_name', 'shop_name', 'souhuo_address', 'lianxifangshi', 'customer_type', 'file_address',], 'required','message'=>'{attribute}不能为空'],
            [['rebate_type', 'rebate'], 'integer'],
            [['customer_code'],'unique','message'=>'{attribute}已经存在'],
            [['customer_code', 'cw_csode', 'souhuoren', 'account'], 'string', 'max' => 64],
            [['customer_name', 'shop_name', 'souhuo_address', 'lianxifangshi', 'customer_type', 'file_address'], 'string', 'max' => 128],
            [['memo'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_code' => '客户代码',
            'customer_name' => '客户名称',
            'cw_csode' => '仓位代码',
            'shop_name' => '门店名称',
            'souhuoren' => '收货人',
            'souhuo_address' => '收货地址',
            'lianxifangshi' => '联系方式',
            'customer_type' => '客户类型',
            'rebate_type' => '返利类型',
            'rebate' => '返利',
            'account' => '汇款账号',
            'file_address' => '文件寄送地址',
            'memo' => '备注',
        ];
    }
}
