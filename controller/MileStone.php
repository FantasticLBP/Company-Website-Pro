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

class MileStone
{
    private $tableName = "milestone";
    private $type = "";
    private $editId = "";
    private $content = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getMileStone()
    {

        $this->type = isset($_REQUEST["type"]) ? $_REQUEST["type"] : "";
        $this->editId = isset($_REQUEST["editId"]) ? $_REQUEST["editId"] : "";
        $this->content = isset($_REQUEST["content"]) ? $_REQUEST["content"] : "";

        $mysqlPdo = new PdoMySQL();
        if ($this->type == "detail") {
            $allrows = $mysqlPdo->find($this->tableName, "", "", "", "", "time");
            Response::show(200, '公司里程碑信息返回成功', $allrows, 'json');
        } else if ($this->editId != "" && $this->type == "one") {
            $allrows = $mysqlPdo->find($this->tableName, "id=$this->editId", "", "", "", "time");
            Response::show(200, '公司里程碑信息返回成功', $allrows, 'json');
        } else if ($this->editId != "" && $this->type == "delete") {
            $allrows = $mysqlPdo->delete($this->tableName, "id=$this->editId");
            if ($allrows) {
                Response::show(200, '该程碑删除成功', $allrows, 'json');
            } else {
                Response::show(201, '该程碑删除失败', $allrows, 'json');
            }

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

                if ($oldCompanyImage["image"]) {
                    //删除商品图片1

                    $uploader = new upload('myAvator', '../style/images');
                    $uploader->deleteUploadedFile("../" . $oldCompanyImage["image"]);
                }

                foreach ($_FILES as $fileInfo) {
                    //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
                    if ($fileInfo["name"] != "") {
                        $files[] = uploadFile($fileInfo, "../style/images");
                    }
                }
                $time = date("Y年m月d日");
                $updateResulr = $mysqlPdo->update(["content" => $this->content, "time" => $time, "image" => substr($files[0], 3)], $this->tableName, "id='$this->editId'");

                if ($updateResulr) {
                    echo '<script type="text/javascript">window.location.href = "../admin/development.html?success=1&type=update";</script>';
                }
            } else {
                $time = date("Y年m月d日");
                $updateResulr = $mysqlPdo->update(["content" => $this->content, "time" => $this->time], $this->tableName, "id='$this->editId'");
                if ($updateResulr || $updateResulr == 0) {
                    echo '<script type="text/javascript">window.location.href = "../admin/development.html?success=1&type=update";</script>';
                }
            }
        } else {
            //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["name"] != "") {
                    $files[] = uploadFile($fileInfo, "../style/images");
                }
            }

            $data = ["content" => $this->content, "time" => date("Y年m月d日"), "image" => substr($files[0], 3), "publisher" => "admin"];
            $stoneRes = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($stoneRes) {
                echo '<script type="text/javascript">window.location.href ="../admin/development.html?success=1&type=add";</script>';
            } else {
                echo '<script type="text/javascript">window.location.href ="../admin/development.html?success=0&type=add";</script>';
            }
        }

    }
}

$milestone = MileStone::getInstance();
$milestone->getMileStone();
