<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/2/20
 * Time: 上午9:15
 */

header('content-type:text.html;charset=utf-8');
error_reporting(0);
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'Response.php';
require_once '../Utils/fileHandler/upload.class.php';
require_once '../Utils/fileHandler/upload.func.php';


class Honor
{
    private $tableName = "honor";
    private $type = "";
    private $editId = "";

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

    function getHonor()
    {

        $this->type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";
        $this->editId = isset($_REQUEST["editId"])?$_REQUEST["editId"]:"";

        $mysqlPdo = new PdoMySQL();
        if ($this->type == "detail") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '公司荣誉信息返回成功', $allrows, 'json');
        }else if ($this->editId !== "" && isset($this->editId)) {
            //修改
            //判断修改的时候是否上传了新图片，如果上传了新图片则全部更新table中的记录数据；如果没有上传新图片则只需要更新table中基本数据信息
            $whetherPostImage = false;
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["size"] > 0) {
                    $whetherPostImage = true;
                }
            }

            $honorImage = $mysqlPdo->find($this->tableName, "id='$this->editId'");
            $honorImage = $honorImage[0];

            for($i = 1 ;$i < 10 ;$i++){
                if ($honorImage["image".$i]) {
                    //删除公司荣誉图片1
                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $honorImage["image".$i]);
                }
            }

            foreach ($_FILES as $fileInfo) {
                //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }

            $updateResulr = $mysqlPdo->update(["image1" => substr($files[0], 3),"image2" => substr($files[1], 3),"image3" => substr($files[2], 3),"image4" => substr($files[3], 3),"image5" => substr($files[4], 3)
                ,"image6" => substr($files[5], 3),"image7" => substr($files[6], 3),"image8" => substr($files[7], 3),"image9" => substr($files[8], 3)], $this->tableName, "id='$this->editId'");

            if ($updateResulr) {
                echo '<script type="text/javascript">window.location.href = "../admin/honor.php?success=1&type=update";</script>';
            }

        }else{
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }

            $data = ["image1" => substr($files[0], 3),"image2" => substr($files[1], 3),"image3" => substr($files[2], 3),"image4" => substr($files[3], 3),"image5" => substr($files[4], 3)
                ,"image6" => substr($files[5], 3),"image7" => substr($files[6], 3),"image8" => substr($files[7], 3),"image9" => substr($files[8], 3)];
            $stoneRes = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($stoneRes) {
                echo '<script type="text/javascript">window.location.href ="../admin/honor.php?success=1&type=add";</script>';
            } else {
                echo '<script type="text/javascript">window.location.href ="../admin/honor.php?success=0&type=add";</script>';
            }
        }

    }
}

$honor = Honor::getInstance();
$honor->getHonor();
?>