<?php
namespace UmengPusher\Umeng\Android;

use UmengPusher\Umeng\AndroidNotification;

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
