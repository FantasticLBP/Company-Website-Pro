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

class BirthdayService
{
    private $tableName = "birthday";
    private $type = "";
    private $birthdayId = "";
    private $content = "";

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
        self . $this->birthdayId = $_REQUEST["birthdayId"];
        self . $this->content = $_REQUEST["content"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '生日福利信息返回成功', $allrows, 'json');
        } else if ($this->birthdayId != "") {
            $oldBirthdayImage = $mysqlPdo->find($this->tableName, "id='$this->birthdayId'");

            $oldBirthdayImage = $oldBirthdayImage[0];

            if ($oldBirthdayImage["image"]) {
                //删除商品图片1

                $uploader = new upload('myAvator', '../style/images');
                $uploader->deleteUploadedFile("../" . $oldBirthdayImage["image"]);
            }

            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $deleteRes = $mysqlPdo->update(["content" => $this->content, "time" => $time, "image" => substr($files[0], 3)], $this->tableName, "id=$this->birthdayId ");
            if ($deleteRes || $deleteRes == 0) {
                echo '<script>window.location.href = "../admin/birthday.php?m=us"</script>';
            } else {
                echo '<script>window.location.href = "../admin/birthday.php?m=uf"</script>';
            }
        } else {
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $time = date("Y年m月d日");

            $data = ["content" => $this->content, "time" => $time, "image" => substr($files[0], 3)];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();

            if ($Res) {
                echo '<script>window.location.href = "../admin/birthday.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/birthday.php?m=af"</script>';
            }
        }
    }
}

$birthdayService = BirthdayService::getInstance();
$birthdayService->operateService();
