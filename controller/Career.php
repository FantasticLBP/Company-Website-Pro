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



class CareerService
{
    private $tableName = "employee";

    protected static $_instance = null;

    protected function  __construct()
    {

    }

    protected function  __clone()
    {
        // TODO: Implement __clone() method.
    }


    public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function generateCareer()
    {
        $mysqlPdo = new PdoMySQL();
        $allrows = $mysqlPdo->find($this->tableName);
        $careers = [];
        foreach($allrows as $row){
            array_push($careers,$row["job"]);
        }
        Response::show(200, '工作种类返回成功', $careers, 'json');
    }
}

$careerService = CareerService::getInstance();
$careerService->generateCareer();
?>

