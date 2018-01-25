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
require_once '../Utils/fileHandler/upload.class.php';
require_once '../Utils/fileHandler/upload.func.php';



class BelifService
{
    private $tableName = "talents";
    private $type = "";
    private  $belefId = "";
    private $title = "";
    private  $content = "";


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
        self.$this->belefId = $_REQUEST["belefId"];

        self.$this->title = $_REQUEST["title"];
        self.$this->content = $_REQUEST["content"];





        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '人才理念信息返回成功', $allrows, 'json');
        }else if ($this->type === "delete") {

            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->belefId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{

            $time = date("Y年m月d日");

            $data = ["title" =>$this->title,"content"=>$this->content,"author"=>"admin","time"=>$time];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/newBelief.php?m=as"</script>';
            } else {
               echo '<script>window.location.href = "../admin/newBelief.php?m=af"</script>';
        }



        }


    }
}

$beliefService = BelifService::getInstance();
$beliefService->operateService();
?>

