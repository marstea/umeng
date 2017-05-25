<?php
namespace UmengPusher\Umeng\Android;

use UmengPusher\Umeng\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
