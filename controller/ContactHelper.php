<?php

require_once "../model/PdoMySQL.class.php";
require_once "../model/config.php";
require_once "Response.php";

class ContactHelper
{

    protected static $_instance = null;
    private $mysqlPdo;
    protected function __construct()
    {
        //disallow new instance
    }
    protected function __clone()
    {
        //disallow clone
    }
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function contactGenerate()
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");
        $data = $allrows[0];
        Response::show(200, "公司基本信息返回成功", $data, "json");
    }
}

$contacter = ContactHelper::getInstance();
$contacter->contactGenerate();
