<?php namespace Atrakeur\Pmessagery\Controllers;

use \Pmessagery;

class MessageryBaseController extends \BaseController {

	public function inbox() {
		Pmessagery::test();
		echo 'ok';
	}

}