<?php

namespace Cherry\LaraThumb\Services;

class LaraThumbService
{
    public static function src($path): string
    {
        return $path . ' - ' . $path;
    }
}
