create table `xy_customer`(
 `id` int(11) not null PRIMARY KEY AUTO_INCREMENT,
 `customer_code` varchar(64) not null default '' COMMENT '客户代码',
 `customer_name` varchar(128) not null default '' COMMENT '客户名称',
 `cw_csode` varchar(64) not null default '' COMMENT '仓位代码',
 `shop_name` varchar(128) not null default '' COMMENT '门店名称',
 `souhuoren` varchar(64) not null default '' COMMENT '收货人',
 `souhuo_address` varchar(128) not null default '' COMMENT '收货地址',
 `lianxifangshi` varchar(128) not null default '' COMMENT '联系方式',
 `customer_type` varchar(128) not null default '' COMMENT '客户类型',
 `rebate_type` tinyint(1) not null default 1 COMMENT '1:月返 2：年返',
 `rebate` int(11) not null default 0 COMMENT '返利',
 `account` varchar(64) not null default '' COMMENT '汇款账号',
 `file_address` varchar(128) not null default '' COMMENT '文件寄送地址',
 `memo` varchar(1000) not null default '' COMMENT '备注'
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
