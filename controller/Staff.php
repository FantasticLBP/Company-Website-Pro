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
    private $tableName = "staff";
    private $type = "";
    private  $staffId = "";
    private  $staffTag = "";




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
        self.$this->staffId = $_REQUEST["staffId"];
        self.$this->staffTag = $_REQUEST["staffTag"];



        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '员工培养信息返回成功', $allrows, 'json');
        }else if ($this->type === "delete") {
            $oldStaffImage = $mysqlPdo->find($this->tableName, "id='$this->staffId'");

            $oldStaffImage = $oldStaffImage[0];

            if ($oldStaffImage["image"]) {
                //删除商品图片1

                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldStaffImage["image"]);
            }
            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->staffId ");
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

            $data = ["tag"=>$this->staffTag,"author"=>"admin","time"=>$time,"image" => substr($files[0], 3)];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/newStaff.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newStaff.php?m=af"</script>';
            }



        }


    }
}

$beliefService = BelifService::getInstance();
$beliefService->operateService();
?>

