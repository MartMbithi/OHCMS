<?php

/*
 * This file is part of consoletvs/charts.
 *
 * (c) Erik Campobadal <soc@erik.cat>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConsoleTVs\Charts\Facades;

use ConsoleTVs\Charts\Builder;
use Illuminate\Support\Facades\Facade;

/**
 * This is the charts facade class.
 *
 * @author Erik Campobadal <soc@erik.cat>
 */
class Charts extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Builder::class;
    }
}
