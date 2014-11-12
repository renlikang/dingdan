<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xy_customer".
 *
 * @property integer $id
 * @property string $customer_code
 * @property string $customer_name
 * @property string $link_man
 * @property string $logo_linkman
 * @property string $office_address
 * @property string $warehouse_address
 * @property string $qc_require
 * @property string $subscribe
 * @property string $odo
 * @property string $good_order
 * @property string $signature
 * @property string $relatived_inspe
 * @property string $order_limit
 * @property string $good_pay
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
            [['customer_code', 'customer_name', 'link_man', 'logo_linkman', 'odo', 'good_order', 'signature', 'relatived_inspe', 'order_limit', 'good_pay','office_address', 'warehouse_address', 'subscribe'],'required','message'=>'{attribute}不能为空'],
            [['customer_code', 'customer_name', 'link_man', 'logo_linkman', 'odo', 'good_order', 'signature', 'relatived_inspe', 'order_limit', 'good_pay'], 'string', 'max' => 64],
            [['office_address', 'warehouse_address', 'qc_require', 'subscribe'], 'string', 'max' => 128],
            [['memo'], 'string', 'max' => 255],
            [['customer_code','customer_name'],'unique','message'=>'{attribute}已经存在']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'ID',
            'customer_code'     => '客户代码',
            'customer_name'     => '客户名称',
            'link_man'          => '联系人',
            'logo_linkman'      => '品牌负责人',
            'office_address'    => '办公地址及寄票对账',
            'warehouse_address' => '仓库地址及收货人信息',
            'qc_require'        => '收货要求',
            'subscribe'         => '预约',
            'odo'               => '出库单',
            'good_order'        => '订单',
            'signature'         => '签章',
            'relatived_inspe'   => '卫检',
            'order_limit'       => '订单期限',
            'good_pay'          => '货款及返利',
            'memo'              => '备注',
        ];
    }
}
