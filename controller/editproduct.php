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

class EditProduct
{
    private $tableName = "product";
    private $productId = 0;
    private $type = "";

    private $productName = ""; //商品名称
    private $productBigKind = ""; //商品大种类
    private $productSmallKind = ""; //商品小种类
    private $productLevel = ""; //商品等级
    private $productDescription = ""; //商品介绍
    private $price = ""; //商品单件
    private $storage = ""; //商品库存
    private $discountPrice = ""; //产品折扣价
    private $listingDate = ""; //上市日期
    private $starLevel = ""; //商品星级
    private $watchTimes = 0; //浏览次数
    private $availableScope = ""; //适应范围
    private $image1 = ""; //商品图片1
    private $image2 = ""; //商品图片2
    private $image3 = ""; //商品图片3
    private $image4 = ""; //商品图片4
    private $image5 = ""; //商品图片5

    private $unit = ""; //商品单位
    private $expiration = ""; //有效期
    private $productFeature = ""; //商品性状
    private $useage = ""; //使用方法
    private $condition = ""; //保存条件
    private $operativenorm = ""; //执行标准

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

    public function getProduct()
    {
        self . $this->type = $_REQUEST["type"];
        self . $this->productId = $_REQUEST['id'];

        self . $this->productName = $_REQUEST["productName"];
        self . $this->productBigKind = $_REQUEST["productBigKind"];
        self . $this->productSmallKind = $_REQUEST["productSmallKind"];
        self . $this->productLevel = $_REQUEST["productLevel"];

        self . $this->productDescription = $_REQUEST["productDescription"];
        self . $this->price = $_REQUEST["price"];
        self . $this->storage = $_REQUEST["storage"];
        self . $this->discountPrice = $_REQUEST["discountPrice"];
        self . $this->listingDate = $_REQUEST["listingDate"];

        self . $this->starLevel = $_REQUEST["starLevel"];
        self . $this->watchTimes = 0;
        self . $this->availableScope = $_REQUEST["availableScope"];
        self . $this->availableScope = $_REQUEST["availableScope"];
        self . $this->availableScope = $_REQUEST["availableScope"];

        self . $this->unit = $_REQUEST["unit"];
        self . $this->expiration = $_REQUEST["expiration"];
        self . $this->productFeature = $_REQUEST["productFeature"];
        self . $this->useage = $_REQUEST["useage"];
        self . $this->condition = $_REQUEST["condition"];
        self . $this->operativenorm = $_REQUEST["operativenorm"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type != "" && !empty($this->type) && $this->type == "show") {
            $allrows = $mysqlPdo->find($this->tableName, "id=$this->productId");
            Response::show(200, '产品信息返回成功', $allrows, 'json');
        } else {
            $pdoMysql = new PdoMySQL();
            $this->productId = $_REQUEST["id"];

            //判断修改的时候是否上传了新图片，如果上传了新图片则全部更新table中的记录数据；如果没有上传新图片则只需要更新table中基本数据信息
            $whetherPostImage = false;
            foreach ($_FILES as $fileInfo) {
                if ($fileInfo["size"] > 0) {
                    $whetherPostImage = true;
                }
            }
            if ($whetherPostImage) {
                //先查该用户是否已经有头像，有头像先从头像文件夹中删除旧的头像
                $oldAvatorRow = $pdoMysql->find($this->tableName, "id='$this->productId'");
                if ($oldAvatorRow["image1"]) {
                    //删除商品图片1
                    $uploader = new upload('myAvator', '../productPics');
                    $uploader->deleteUploadedFile("../" . $oldAvatorRow["image1"]);
                }
                if ($oldAvatorRow["image2"]) {
                    //删除商品图片2
                    $uploader = new upload('myAvator', '../productPics');
                    $uploader->deleteUploadedFile("../" . $oldAvatorRow["image2"]);
                }
                if ($oldAvatorRow["image3"]) {
                    //删除商品图片3
                    $uploader = new upload('myAvator', '../productPics');
                    $uploader->deleteUploadedFile("../" . $oldAvatorRow["image3"]);
                }
                if ($oldAvatorRow["image4"]) {
                    //删除商品图片4
                    $uploader = new upload('myAvator', '../productPics');
                    $uploader->deleteUploadedFile("../" . $oldAvatorRow["image4"]);
                }
                if ($oldAvatorRow["image5"]) {
                    //删除商品图片5
                    $uploader = new upload('myAvator', '../productPics');
                    $uploader->deleteUploadedFile("../" . $oldAvatorRow["image5"]);
                }

                foreach ($_FILES as $fileInfo) {
                    //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
                    if ($fileInfo["name"] != "") {
                        $files[] = uploadFile($fileInfo, "../productPics");
                    }
                }

                $updateResulr = $pdoMysql->update(["productName" => $this->productName, "productBigKind" => $this->productBigKind, "productSmallKind" => $this->productSmallKind, "productLevel" => $this->productLevel, "productDescription" => $this->productDescription, "price" => $this->price, "storage" => $this->storage,
                    "discountPrice" => $this->discountPrice, "listingDate" => $this->listingDate, "starLevel" => $this->starLevel, "watchTimes" => $this->watchTimes, "availableScope" => $this->availableScope, "image1" => substr($files[0], 3), "image2" => substr($files[1], 3), "image3" => substr($files[2], 3), "image4" => substr($files[3], 3), "image5" => substr($files[4], 3), "unit" => $this->unit, "expiration" => $this->expiration, "productFeature" => $this->productFeature, "useage" => $this->useage, "condition" => $this->condition, "operativenorm" => $this->operativenorm], $this->tableName, "id='$this->productId'");
                if ($updateResulr) {
                    echo '<script type="text/javascript">alert("产品信息修改成功");window.location.href="../admin/productList.php";</script>';
                }
            } else {
                $updateResulr = $pdoMysql->update(["productName" => $this->productName, "productBigKind" => $this->productBigKind, "productSmallKind" => $this->productSmallKind, "productLevel" => $this->productLevel, "productDescription" => $this->productDescription, "price" => $this->price, "storage" => $this->storage,
                    "discountPrice" => $this->discountPrice, "listingDate" => $this->listingDate, "starLevel" => $this->starLevel, "watchTimes" => $this->watchTimes, "availableScope" => $this->availableScope, "unit" => $this->unit, "expiration" => $this->expiration, "productFeature" => $this->productFeature, "useage" => $this->useage, "condition" => $this->condition, "operativenorm" => $this->operativenorm], $this->tableName, "id='$this->productId'");
                if ($updateResulr || $updateResulr == 0) {
                    echo '<script type="text/javascript">window.location.href="../admin/editproduct.php?success=1";</script>';
                }

            }

        }
    }
}

$lister = EditProduct::getInstance();
$lister->getProduct();
