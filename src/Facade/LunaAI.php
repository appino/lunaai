<?php

namespace Appino\LunaAi\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appino\LunaAi\Skeleton\SkeletonClass
 */
class LunaAI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lunaai';
    }
}
