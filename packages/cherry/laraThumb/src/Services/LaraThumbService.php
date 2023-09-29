<?php

namespace Cherry\LaraThumb\Services;
use Intervention\Image\Facades\Image;

class LaraThumbService
{
    public static function src($path, $params): string
    {
        if(isset($params['w'])){

            dd($params['w']);
        }
        return $path;
    }
}
