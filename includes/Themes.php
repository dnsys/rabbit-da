<?php

/**
 * Created by PhpStorm.
 * User: SVYAT
 * Date: 09.02.2017
 * Time: 17:19
 */
class Themes
{
    const THEME_LEGACY = 'legacy';
    const THEME_CARROT = 'carrot';
    const THEME_SPRING = 'spring_melody';

    private $currentTheme = "";

    private $listThemes = array(
        self::THEME_CARROT,
        self::THEME_LEGACY,
        self::THEME_SPRING
    );


    function __construct()
    {
        if( isset($_COOKIE['theme']))
        {
            $themeCookie = $_COOKIE['theme'];

            if(in_array($themeCookie, $this->listThemes))
            {
                $this->currentTheme = $themeCookie;
            }
        }
        else
        {
            $time = time()+3600*24*7;
            setcookie('theme', self::THEME_LEGACY, $time, "/");
            $this->currentTheme = self::THEME_LEGACY;
        }
    }

    /**
     * @return string
     */
    public function getCurrentTheme()
    {
        return $this->currentTheme;
    }

    public function changeTheme($newTheme)
    {
        if(in_array($newTheme, $this->listThemes))
        {
            $this->currentTheme = $newTheme;

            $time = time()+3600*24*7;
            setcookie('theme', $this->currentTheme, $time, "/");
        }
    }
}