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

class Manufacture
{
    private $tableName = "manufacture";
    private $type = "";
    private $requirement = "";
    private $title = "";
    private $content = "";
    private $manufactureId = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
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

    public function operateService()
    {
        self . $this->type = $_REQUEST["type"];
        self . $this->title = $_REQUEST["title"];
        self . $this->content = $_REQUEST["content"];
        self . $this->manufactureId = $_REQUEST["manufactureId"];
        self . $this->requirement = $_REQUEST["requirement"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '代加工服务模块信息返回成功', $allrows, 'json');
        } else if ($this->type === "delete") {
            $deleteRes = $mysqlPdo->delete($this->tableName, "id=$this->manufactureId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200, "删除成功", "", "json");
            } else {
                Response::show(201, "删除失败", "", "json");
            }
        } else {
            $time = date("Y年m月d日");
            $data = ["title" => $this->title, "content" => $this->content, "requirement" => $this->requirement, "time" => $time];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script>window.location.href = "../admin/newoem.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newoem.php?m=af"</script>';
            }
        }

    }
}

$manufactureService = manufacture::getInstance();
$manufactureService->operateService();
