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



class EncouragementService
{
    private $tableName = "encouragement";
    private $type = "";
    private  $encouragementId = "";
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
        self.$this->encouragementId = $_REQUEST["encouragementId"];
        self.$this->content = $_REQUEST["content"];



        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '激励保障信息返回成功', $allrows, 'json');
        }else if ($this->encouragementId != "") {
            $oldEncouragementImage = $mysqlPdo->find($this->tableName, "id='$this->encouragementId'");

            $oldEncouragementImage = $oldEncouragementImage[0];

            if ($oldEncouragementImage["image"]) {
                //删除商品图片1

                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldEncouragementImage["image"]);
            }

            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $deleteRes = $mysqlPdo->update(["content"=>$this->content,"time"=>$time,"image" => substr($files[0], 3)],$this->tableName,"id=$this->encouragementId ");
            if ($deleteRes || $deleteRes == 0) {
                echo '<script>window.location.href = "../admin/encouragement.php?m=us"</script>';
            }else{
                echo '<script>window.location.href = "../admin/encouragement.php?m=uf"</script>';
            }
        }else{
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["content"=>$this->content,"time"=>$time,"image" => substr($files[0], 3)];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/encouragement.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/encouragement.php?m=af"</script>';
            }
        }
    }
}

$encouragementService = EncouragementService::getInstance();
$encouragementService->operateService();
?>

