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


class EditCompanyIntr
{
    private $tableName = "companyIntr";
    private $editId = "";
    private $type = "";

    private $description = "";        //公司介绍第一段（共2段）
    private $image1 = "";              //公司图片1
    private $image2 = "";              //公司图片2
    private $image3 = "";              //公司图片3
    private $image4 = "";              //公司图片4

    protected static $_instance = null;

    protected function  __construct()
    {

    }

    protected function  __clone()
    {
        // TODO: Implement __clone() method.
    }


    public function  getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function editIntr()
    {
        self . $this->editId = $_REQUEST["editId"];
        self . $this->type = $_REQUEST["type"];
        self . $this->description = $_REQUEST["descriptionCopy"];

        $mysqlPdo = new PdoMySQL();

        if ($this->type != "") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '公司介绍返回成功', $allrows, 'json');
        } else if ($this->editId !== "" && isset($this->editId)) {
            //修改
            //判断修改的时候是否上传了新图片，如果上传了新图片则全部更新table中的记录数据；如果没有上传新图片则只需要更新table中基本数据信息
            $whetherPostImage = false;
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["size"] > 0) {
                    $whetherPostImage = true;
                }
            }

            if ($whetherPostImage) {
                $oldCompanyImage = $mysqlPdo->find($this->tableName, "id='$this->editId'");

                $oldCompanyImage = $oldCompanyImage[0];

                if ($oldCompanyImage["image1"]) {
                    //删除商品图片1

                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $oldCompanyImage["image1"]);
                }

                if ($oldCompanyImage["image2"]) {
                    //删除商品图片2
                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $oldCompanyImage["image2"]);
                }

                if ($oldCompanyImage["image3"]) {
                    //删除商品图片3
                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $oldCompanyImage["image3"]);
                }
                if ($oldCompanyImage["image4"]) {
                    //删除商品图片4
                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $oldCompanyImage["image4"]);
                }

                foreach ($_FILES as $fileInfo) {
                    //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
                    if ($fileInfo["name"] != "") {
                        $files[] = uploadFile($fileInfo, "../style/images");
                    }
                }

                $updateResulr = $mysqlPdo->update(["description" => $this->description, "image1" => substr($files[0], 3), "image2" => substr($files[1], 3), "image3" => substr($files[2], 3), "image4" => substr($files[3], 3)], $this->tableName, "id='$this->editId'");

                if ($updateResulr) {
                    echo '<script type="text/javascript">window.location.href = "../admin/introduction.php?success=1&type=update";</script>';
                }
            } else {
                $updateResulr = $mysqlPdo->update(["description1" => $this->description1, "description2" => $this->description2], $this->tableName, "id='$this->editId'");
                if ($updateResulr || $updateResulr == 0) {
                    echo '<script type="text/javascript">window.location.href = "../admin/introduction.php?success=1&type=update";</script>';
                }
            }
        } else {

            //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }
            $data = ["description" => $this->description,  "image1" => substr($files[0], 3), "image2" => substr($files[1], 3), "image3" => substr($files[2], 3), "image4" => substr($files[3], 3)];
            $productRes = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($productRes) {
                //公司介绍发布成功
                echo '<script type="text/javascript">window.location.href ="../admin/introduction.php?success=1&type=add";</script>';
            } else {
                //公司介绍发布失败
                echo '<script type="text/javascript">window.location.href ="../admin/introduction.php?success=0&type=add";</script>';
            }
        }

    }
}

$editor = EditCompanyIntr::getInstance();
$editor->editIntr();
?>