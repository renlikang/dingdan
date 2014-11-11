create table `xy_customer`(
 `id` int(11) not null PRIMARY KEY AUTO_INCREMENT,
 `customer_code` varchar(64) not null default '' ,
 `customer_name` varchar(64) not null default '',
 `link_man` varchar(64) not null default '',
 `logo_linkman` varchar(64) not null default '',
 `office_address` varchar(128) not null default '',
 `warehouse_address` varchar(128) not null default '',
 `qc_require` varchar(128) not null default '',
 `subscribe` varchar(128) not null default '',
 `odo` varchar(64) not null default '',
 `good_order` varchar(64) not null default '',
 `signature` varchar(64) not null default '',
 `relatived_inspe` varchar(64) not null default '',
 `order_limit` varchar(64) not null default '',
 `good_pay` varchar(64) not null default '',
 `memo` varchar(255) not null default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8