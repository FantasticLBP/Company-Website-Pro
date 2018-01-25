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



class CompanyIntroducation
{
    private $tableName = "companyIntr";
    private $type = "";

    protected static $_instance = null;

    protected function  __construct()
    {

    }

    protected function  __clone()
    {
        // TODO: Implement __clone() method.
    }


    public static function  getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function getIntroducation()
    {
        $this->type = $_REQUEST["type"];
        $mysqlPdo = new PdoMySQL();
        if($this->type != "" && !empty($this->type) && $this->type === "detail"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '公司介绍返回成功', $allrows, 'json');
        }

    }
}

$tmp = CompanyIntroducation::getInstance();
$tmp->getIntroducation();
?>

