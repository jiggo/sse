<?php 
namespace MAnfal\sse;

use Illuminate\Support\Facades\Facade;

class SSEDataFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'SSEData';
    }

}