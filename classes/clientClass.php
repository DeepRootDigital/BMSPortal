<?php

class client {
	public $name;
	public $details;
	public $assets;
	public $notifications;

	function __construct() {

		$this->name = 'ClientName';

		$this->details = array();
		$this->details['status'] = false;
		$this->details['accountmgr'] = 'Bob Afsari';

		$this->assets = array();
		$this->notifications = array();
	}

}

function setClientName($client, $name) {
	$client->name = $name;
}

function setClientStatus($client, $status) {
	$client->details['status'] = $status;
}

function setClientMgr($client, $clientmgr) {
	$client->details['accountmgr'] = $clientmgr;
}



?>