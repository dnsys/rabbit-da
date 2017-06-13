<?php
function dd( $v ){
    echo '<pre>';
    var_dump($v);
    die;
}
class DB {

    protected static $_instance;

    private $db;

    private function __construct(){
        $config = require_once 'config.php';
        try {
            $this->db = new PDO(
                "mysql:host={$config['database']['host']};dbname={$config['database']['dbname']}",
                $config['database']['user'], $config['database']['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec("set names utf8");
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    static public function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    private function __clone() {}
    private function __wakeup() {}

    public function getClients(){
        $params = ['agency'=>[],'brand'=>[]];
        $stmt = $this->db->query('SELECT * FROM clients');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if($row['type'] == 'agency'){
                $params['agency'][] = $row;
            } else {
                $params['brand'][] = $row;
            }
        }
        return $params;
    }

    public function getAllCountRow(){
        $stmt = $this->db->query('SELECT COUNT(*) AS `count` FROM cases where `status`="1"');

        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        return (int)$row['count'];
    }

    public function getCase(){
        $params = [];
        $stmt = $this->db->query('SELECT * FROM cases where `status`="1" LIMIT 0,10');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $params[] = $row;
        }
        return $params;
    }

    public function getCasePage($page){
        session_start();
        require_once 'DetectLang.php';
        $offset = ((int)$page <= 1) ? 0 : ((int)$page - 1) * 10;
        $params = [];
        $lang = new DetectLang();
        $stmt = $this->db->query("SELECT `id`, `name{$lang->lang_prefix}` as `name`, `icon_path` FROM cases where `status`=\"1\" LIMIT {$offset},10");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $params[] = $row;
        }
        return $params;
    }

    public function getCaseById($id){
        $stmt = $this->db->query("SELECT * FROM cases where id=".(int)$id);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getSliderCase($caseId){
        $params = [];
        $stmt = $this->db->query("SELECT * FROM case_slider where case_id=".(int)$caseId);
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $params[] = $row;
        }
        return $params;
    }

    public function getPrevCase($id){
        $stmt = $this->db->query("SELECT * FROM cases where id < " . (int)$id . "  and status = '1' order by id desc limit 1");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getNextCase($id){
        $stmt = $this->db->query("SELECT * FROM cases where id > " . (int)$id . "  and status = '1' order by id asc limit 1");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}