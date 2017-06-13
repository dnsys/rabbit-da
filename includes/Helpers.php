<?php

class Helpers
{
    static function checkVideo($fileName)
    {
        $ext = self::getExt($fileName);
        if (in_array($ext, ['mp4', 'webm', 'ogv'])) {
            return true;
        }
        return false;
    }

    static function getExt($path)
    {
        return end(explode('.', $path));
    }

    static function insertVideo($path)
    {
        $types = [
            'mp4' => 'video/mp4',
            'webm' => 'video/webm',
            'ogv' => 'video/ogg',
        ];

        return "<video autoplay loop>
                   <source src='/admin/data/case_slider/icon-{$path}' type='{$types[self::getExt($path)]}'>
                </video>";
    }

    static function printSlid($path)
    {
        if (self::checkVideo($path)) {
            return self::insertVideo($path);
        }
        return "<div><img src='/admin/data/case_slider/icon-{$path}' alt=''></div>";
    }
}