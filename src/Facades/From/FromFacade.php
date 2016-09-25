<?php
/**
 * Created by csi0n
 * User: huaqing.chen
 * Date: 9/25/16
 * Time: 19:08
 */

namespace csi0n\From\Facades\From;

use Illuminate\Support\Facades\Facade;

class FromFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FromRepository';
    }
}
