<?php namespace Atrakeur\Pmessagery;

class Pmessagery {

	private $config;

	public function __construct(\Illuminate\Config\Repository $config) {
		$this->config = $config;
	}

	public function getInbox() {
		echo 'ok2';
	}

	public function getUserId() {
		$closure = $this->config->get(
			'Pmessagery::pmessagery.user_closure', 
			function() { return false; }
		);

		return $closure();
	}

	public function isUserConnected() {
		$user_id = $this->getUserId();
		return is_numeric($user_id) && $this->getUserId() > 0;
	}

}