<?php namespace Atrakeur\Pmessagery\Models;

use \Illuminate\Database\Eloquent\Model AS Eloquent;

class Conversation extends Eloquent {

	protected $table = 'messagery_conversations';

	protected $guarded = array();

	public function owner() {
		return $this->hasOne('User');
	}

	public function users() {
		return $this->hasMany('User');
	}

}