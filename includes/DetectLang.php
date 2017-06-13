<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 08.02.2017
 * Time: 14:47
 */
class DetectLang
{
    public $lang_prefix = '';
    private $message;

    public function __construct()
    {
        if( $_SESSION['lang'] == 'en' ){
            $this->lang_prefix = '_en';
            $this->message = require_once 'lang/en.php';
        } else{
            $this->message = require_once 'lang/ru.php';
        }
    }

    public function text( $key ){
        if(array_key_exists($key,$this->message)){
            return $this->message[$key];
        }
        return 'undefined';
    }
}