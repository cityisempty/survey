<?php

namespace Cityisempty\FilamentSurvey\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cityisempty\FilamentSurvey\FilamentSurvey
 */
class FilamentSurvey extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cityisempty\FilamentSurvey\FilamentSurvey::class;
    }
}
