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

class TravelService
{
    private $tableName = "travel";
    private $type = "";
    private $travelId = "";
    private $kind = "";

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
        self . $this->travelId = $_REQUEST["travelId"];
        self . $this->kind = $_REQUEST["kind"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '旅游福利信息返回成功', $allrows, 'json');
        } else if ($this->type === "delete") {
            $oldTravelImage = $mysqlPdo->find($this->tableName, "id='$this->travelId'");

            $oldTravelImage = $oldTravelImage[0];

            if ($oldTravelImage["image"]) {
                //删除商品图片1

                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldTravelImage["image"]);
            }
            $deleteRes = $mysqlPdo->delete($this->tableName, "id=$this->travelId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200, "删除成功", "", "json");
            } else {
                Response::show(201, "删除失败", "", "json");
            }
        } else {
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["kind" => $this->kind, "author" => "admin", "time" => $time, "image" => substr($files[0], 3)];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();

            if ($Res) {
                echo '<script>window.location.href = "../admin/newTravel.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newTravel.php?m=af"</script>';
            }

        }

    }
}

$travelService = TravelService::getInstance();
$travelService->operateService();
