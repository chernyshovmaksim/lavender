<?php

namespace Cherry\LaraThumb\Services;


use Intervention\Image\Facades\Image;

class LaraThumbService
{
    public static function src($path, $params): string
    {
        $fullPath = public_path() . $path;
        $imgPath = 'public' . $path;
//        $img = Image::make($imgPath);
//        dd($img);
        return $path;
    }
}
