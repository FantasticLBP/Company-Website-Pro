<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/4/4
 * Time: 上午11:37
 */
//header('content-type:text.html;charset=utf-8');
//error_reporting(0);
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'Response.php';

class TechService
{
    private $techServiceTableName = "techServices";
    private $techKindsTableName = "techKinds";

    private $serviceId = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function operateService()
    {
        self . $this->serviceId = $_REQUEST["serviceId"];

        $mysqlPdo = new PdoMySQL();
        $allrows = $mysqlPdo->find($this->tech, "moduleId=$this->moduleId");

        Response::show(200, '技术支持与服务模块信息返回成功', $allrows, 'json');

    }
}

$techService = TechService::getInstance();
$techService->operateService();
