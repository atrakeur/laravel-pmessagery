<?php namespace Atrakeur\Pmessagery\Facades;

use Illuminate\Support\Facades\Facade;

class Pmessagery extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pmessagery'; }

}