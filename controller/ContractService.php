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



class ContractService
{
    private $tableName = "contratcs";
    private $type = "";
    private  $contractId = "";
    private $title = "";
    private  $content = "";
    private  $time = "";
    private  $size = 10;
    private  $page = 0;
    private $image1 = "";                //附图1
    private $image2 = "";                //附图2
    private $image3 = "";                //附图3


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
        self.$this->contractId = $_REQUEST["contractId"];

        self.$this->title = $_REQUEST["contractTitle"];
        self.$this->content = $_REQUEST["content"];
        self.$this->time = $_REQUEST['time'];
        self.$this->page = $_REQUEST['page'];




        $mysqlPdo = new PdoMySQL();
        if($this->type == "" || $this->type == "null"){

            Response::show(202,"类型不能为空");

        }else if($this->type === "selectAll"){

            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, 'CRO合同服务模块信息返回成功', $allrows, 'json');
        }
        else if($this->type === "select"){
            $total = $mysqlPdo->find($this->tableName);

            $allrows = $mysqlPdo->find($this->tableName,"","","","","",[(intval($this->page)-1)*intval($this->size),$this->size]);
            $data = ["total"=>count($total),"data"=>$allrows];
            Response::show(200, 'CRO合同服务模块信息返回成功', $data, 'json');
        }else if($this->type === "zx"){
            $allrows = $mysqlPdo->find($this->tableName,"","","time DESC");
            Response::show(200, 'CRO合同服务模块最新信息返回成功', $allrows, 'json');
        }else if($this->type === "jx"){
            $allrows = $mysqlPdo->find($this->tableName,"","","id DESC");
            Response::show(200, 'CRO合同服务模块精选信息返回成功', $allrows, 'json');
        }else if($this->type === "rm"){
            $allrows = $mysqlPdo->find($this->tableName,"","","pageview DESC");
            Response::show(200, 'CRO合同服务模块热门信息返回成功', $allrows, 'json');
        }else if($this->type === "detail"){
            $allrows = $mysqlPdo->find($this->tableName,"id=$this->contractId");
            Response::show(200, 'CRO合同服务模块热门信息返回成功', $allrows, 'json');
        } else if($this->type === "delete") {
            $oldContractImage = $mysqlPdo->find($this->tableName, "id='$this->contractId'");

            $oldContractImage = $oldContractImage[0];

            if ($oldContractImage["image1"]) {
                //删除商品图片1

                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldContractImage["image1"]);
            }

            if ($oldContractImage["image2"]) {
                //删除商品图片2
                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldContractImage["image2"]);
            }

            if ($oldContractImage["image3"]) {
                //删除商品图片3
                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldContractImage["image3"]);
            }

            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->contractId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["title" =>$this->title,"content"=>$this->content,"author"=>"admin","time"=>$time,"image1" => substr($files[0], 3), "image2" => substr($files[1], 3), "image3" => substr($files[2], 3)];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/newContract.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newContract.php?m=af"</script>';
            }



        }


    }
}

$contractService = ContractService::getInstance();
$contractService->operateService();
?>

