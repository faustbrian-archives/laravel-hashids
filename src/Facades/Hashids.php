<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Hashids.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Hashids\Facades;

use Illuminate\Support\Facades\Facade;

class Hashids extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'hashids';
    }
}
