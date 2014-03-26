<?php namespace Atrakeur\Pmessagery;

use Illuminate\Support\Facades\Facade;

class PmessageryFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Pmessagery'; }

}