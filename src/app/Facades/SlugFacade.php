<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class SlugFacade extends Facade{
    protected static function getFacadeAccessor(): string
    {
        return 'Slug';
    }
}
