<?php

namespace App\Facades;

class Slug {
    /**
     * Функция транслитерации предложений и слов с великого и могучего на пендоский
     * @param string $title
     * */ 
    public static function convert($title): string
    {
        $converter = [
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

            'А' => 'a',    'Б' => 'b',    'В' => 'v',    'Г' => 'g',    'Д' => 'd',
            'Е' => 'e',    'Ё' => 'yo',    'Ж' => 'zh',   'З' => 'z',    'И' => 'i',
            'Й' => 'y',    'К' => 'k',    'Л' => 'l',    'М' => 'm',    'Н' => 'n',
            'О' => 'o',    'П' => 'p',    'Р' => 'r',    'С' => 's',    'Т' => 't',
            'У' => 'u',    'Ф' => 'f',    'Х' => 'h',    'Ц' => 'c',    'Ч' => 'ch',
            'Ш' => 'sh',   'Щ' => 'sch',  'Ь' => '',     'Ы' => 'y',    'Ъ' => '',
            'Э' => 'e',    'Ю' => 'yu',   'Я' => 'ya',
        ];
        $string =  strtr($title, $converter);
        return str_replace(' ', '_', $string);
    }

}