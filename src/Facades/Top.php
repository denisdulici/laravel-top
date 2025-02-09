<?php

declare(strict_types=1);

namespace Leventcz\Top\Facades;

use Illuminate\Support\Facades\Facade;
use Leventcz\Top\Data\CacheSummary;
use Leventcz\Top\Data\DatabaseSummary;
use Leventcz\Top\Data\RequestSummary;
use Leventcz\Top\Data\RouteCollection;

/**
 * @method static RequestSummary http()
 * @method static DatabaseSummary database()
 * @method static CacheSummary cache()
 * @method static RouteCollection routes()
 */
class Top extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'top';
    }
}
