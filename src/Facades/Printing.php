<?php

namespace Rawilk\Printing\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rawilk\Printing\Printing
 *
 * @method static null|string|mixed defaultPrinterId()
 * @method static \Rawilk\Printing\Contracts\Printer|null defaultPrinter()
 * @method static \Rawilk\Printing\Contracts\PrintTask newPrintTask()
 * @method static \Rawilk\Printing\Contracts\Printer|null find($printerId = null)
 * @method static \Illuminate\Support\Collection printers()
 */
class Printing extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rawilk\Printing\Printing::class;
    }
}
