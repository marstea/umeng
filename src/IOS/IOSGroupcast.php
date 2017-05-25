<?php
namespace UmengPusher\Umeng\IOS;

use UmengPusher\Umeng\IOSNotification;

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
