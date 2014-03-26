<?php

return array(

	/**
	 * The closure used to determine if the user is connected and his user id
	 * Any "falsey" (false, 0 and below) return will be treated as the user is disconnected
	 * Any number above 0 will be user as an id to identify the current user
	 * 
	 * @type closure
	 */
	'user_closure' => function() 
	{
		if (Auth::check()) {
			return Auth::user()->id;
		}
		return false;
	}

);