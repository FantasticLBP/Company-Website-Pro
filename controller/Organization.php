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

class Organization
{
    private $tableName = "organization";
    private $type = "";
    private $editId = "";

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

    public function getOrganization()
    {

        self . $this->type = $_REQUEST["type"];
        self . $this->editId = $_REQUEST["editId"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type == "detail") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '组织结构信息返回成功', $allrows, 'json');
        } else if ($this->editId !== "" && isset($this->editId)) {
            //修改
            //判断修改的时候是否上传了新图片，如果上传了新图片则全部更新table中的记录数据；如果没有上传新图片则只需要更新table中基本数据信息
            $whetherPostImage = false;
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["size"] > 0) {
                    $whetherPostImage = true;
                }
            }

            $organizationImage = $mysqlPdo->find($this->tableName, "id='$this->editId'");
            $organizationImage = $organizationImage[0];

            //删除公司荣誉图片1
            $uploader = new upload('myAvator', '../style/images');
            $uploader->deleteUploadedFile("../" . $organizationImage["structureImage"]);

            foreach ($_FILES as $fileInfo) {
                //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }

            $updateResulr = $mysqlPdo->update(["structureImage" => substr($files[0], 3)], $this->tableName, "id='$this->editId'");

            if ($updateResulr) {
                echo '<script type="text/javascript">window.location.href = "../admin/orgaization.php?success=1&type=update";</script>';
            }

        } else {
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }

            $data = ["structureImage" => substr($files[0], 3)];
            $stoneRes = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($stoneRes) {
                echo '<script type="text/javascript">window.location.href ="../admin/orgaization.php?success=1&type=add";</script>';
            } else {
                echo '<script type="text/javascript">window.location.href ="../admin/orgaization.php?success=0&type=add";</script>';
            }
        }

    }
}

$organization = Organization::getInstance();
$organization->getOrganization();
