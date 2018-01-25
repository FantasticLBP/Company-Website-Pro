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
    private $tableName = "techServices";
    private $type = "";
    private  $moduleId = "";
    private $title = "";
    private  $content = "";
    private  $serviceId = "";


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

    function operateService()
    {
        self.$this->type = $_REQUEST["type"];
        self.$this->moduleId = $_REQUEST["moduleId"];
        self.$this->title = $_REQUEST["title"];
        self.$this->content = $_REQUEST["content"];
        self.$this->serviceId = $_REQUEST["serviceId"];


        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName,"moduleId=$this->moduleId");
            Response::show(200, '技术支持与服务模块信息返回成功', $allrows, 'json');
        }else if ($this->type === "delete") {
            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->serviceId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{
            $time = date("Y年m月d日");
            $data = ["moduleId"=>$this->moduleId,"title" => $this->title,"content"=>$this->content,"author"=>"admin","time"=>$time];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/newTechService.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newTechService.php?m=af"</script>';
            }
        }


    }
}

$techService = TechService::getInstance();
$techService->operateService();
?>

