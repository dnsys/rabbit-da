<?php
function adminer_object() {
  include_once "./plugin.php";
  include_once "./upload.php";
  $plugins = array(
    new AdminerFileUpload("./data/"),
  );

  class AdminerSoftware extends AdminerPlugin {

    function name() {
      // custom name in title and heading
      return 'rabbit';
    }
    
    function permanentLogin($Va = false) {
      // key used for permanent login
      return "lf123654";
    }
    
    function credentials() {
      // server, username and password for connecting to database
      return array('localhost', 'root', '');
    }
    
    function database() {
      // database name, will be escaped by Adminer
      return 'rabbyt_da';
    }
    
    function login($login, $password) {
      // validate user submitted credentials
      return ($login == 'rabbit' && $password == 'lf123654');
    }
    
    //function tableName($tableStatus) {
      // tables without comments would return empty string and will be ignored by Adminer
      // return h($tableStatus["Comment"]);
    //}
    
    //function fieldName($field, $order = 0) {
      // only columns with comments will be displayed and only the first five in select
      //return ($order <= 5 && !preg_match('~_(md5|sha1)$~', $field["field"]) ? h($field["comment"]) : "");
    //}
    
  }
  
  return new AdminerSoftware($plugins);
}

include "./editor.php";