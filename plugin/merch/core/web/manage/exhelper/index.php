<?php
if (!defined('IN_IA')) 
{
	exit('Access Denied');
}
require hunter_mall_PLUGIN . 'merch/core/inc/page_merch.php';
class Index_EweiShopV2Page extends MerchWebPage 
{
	public function main() 
	{
		global $_W;
		global $_GPC;
		include $this->template();
	}
}
?>