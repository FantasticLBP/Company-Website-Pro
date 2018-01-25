<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/2/21
 * Time: 下午9:55
 */

header('content-type:text.html;charset=utf-8');
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
include_once '../Utils/fileHandler/upload.func.php';

class PublishProudct
{
    private $tableName = "product";
    private $productName = "";           //商品名称
    private $productBigKind = "";        //商品大种类
    private $productSmallKind = "";      //商品小种类
    private $productLevel = "";          //商品等级
    private $productDescription = "";    //商品介绍
    private $price = "";                 //商品单件
    private $storage = "";               //商品库存
    private $discountPrice = "";         //产品折扣价
    private $listingDate = "";           //上市日期
    private $starLevel = "";             //商品星级
    private $watchTimes = 0;            //浏览次数
    private $availableScope = "";        //适应范围
    private $image1 = "";                //商品图片1
    private $image2 = "";                //商品图片2
    private $image3 = "";                //商品图片3
    private $image4 = "";                //商品图片4
    private $image5 = "";                //商品图片5

    private $unit = "";                  //商品单位
    private  $expiration = "";           //有效期
    private  $productFeature = "";       //商品性状
    private  $useage = "";               //使用方法
    private  $condition = "";            //保存条件
    private  $operativenorm = "";        //执行标准


    protected static $_instance = null;

    protected function __construct()
    {
        //disallow new instance
    }

    protected function __clone()
    {
        //disallow clone
    }

    public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function publish()
    {
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


        foreach ($_FILES as $fileInfo) {
            //判断图片：如果上传的图片数组里面是不为空的图片则进行图片保存函数。
            if ($fileInfo["name"] != "") {
                $files[] = uploadFile($fileInfo, "../productPics");
            }
        }

        $PdoMySQL = new PdoMySQL();
        $data = ["productName" => $this->productName, "productBigKind" => $this->productBigKind, "productSmallKind" => $this->productSmallKind, "productLevel" => $this->productLevel, "productDescription" => $this->productDescription, "price" => $this->price, "storage" => $this->storage,
            "discountPrice" => $this->discountPrice, "listingDate" => $this->listingDate, "starLevel" => $this->starLevel,"watchTimes" => $this->watchTimes,"availableScope" => $this->availableScope, "image1" => substr($files[0], 3), "image2" => substr($files[1], 3), "image3" => substr($files[2], 3), "image4" => substr($files[3], 3), "image5" => substr($files[4], 3),"unit"=>$this->unit,"expiration"=>$this->expiration,"productFeature"=>$this->productFeature,"useage"=>$this->useage,"condition"=>$this->condition,"operativenorm"=>$this->operativenorm];

        $productRes = $PdoMySQL->add($data, $this->tableName);
        $lastInsertId = $PdoMySQL->getLastInsertId();
        if ($productRes) {
            //产品发布成功
            echo '<script type="text/javascript">alert("产品信息发布成功");window.location.href ="../admin/productList.php";</script>';
       } else {
            //产品发布失败
            echo '<script type="text/javascript">alert("产品信息发布失败，请稍后重试！");</script>';
        }


    }
}

$instance = PublishProudct::getInstance();
$instance->publish();
?>