<?php
namespace UmengPusher\Umeng\IOS;

use UmengPusher\Umeng\IOSNotification;

class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
