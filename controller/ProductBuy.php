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


class ProductBuy
{
    private $tableName = "order";
    private $productTable = "product";
    private $type = "";

    private $productid = "";
    private $userid = "";
    private $linkman = "";
    private $price = "";
    private $status = "";
    private $orderTime = "";
    private $payMethod = "";
    private $productName = "";
    private $amount = "";
    private $productLevel = "";
    private $storage = "";
    private $orderID = "";
    private $message = "";

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

    function operateService()
    {
        self . $this->type = $_REQUEST["type"];
        self . $this->storage = $_REQUEST['storage'];

        self . $this->productid = $_REQUEST["productid"];
        self . $this->userid = base64_decode($_COOKIE['auth']);

        self . $this->linkman = $_REQUEST["linkman"];
        self . $this->price = $_REQUEST["price"];

        self . $this->status = $_REQUEST["status"];

        self . $this->orderTime = $_REQUEST["orderTime"];
        self . $this->payMethod = $_REQUEST["payMethod"];
        self . $this->productName = $_REQUEST["productName"];

        self . $this->amount = $_REQUEST["amount"];
        self . $this->productLevel = $_REQUEST["productLevel"];
        self . $this->orderID = $_REQUEST["orderid"];
        self . $this->message = $_REQUEST["message"];


        $mysqlPdo = new PdoMySQL();

        if ($this->type == "buy") {

            $idRows = $mysqlPdo->find($this->tableName);
            $productCount = 0;
            $price = 0;
            $updateid = 0;
            foreach ($idRows as $row) {
                if ($row["productid"] == $this->productid) {
                    $price = $row["price"] / $row["amount"];      //单价
                    $productCount = intval($row["amount"]);
                    $productCount += 1;                         //数量

                    $price = intval($productCount * $price);            //总价

                    $updateid = $row["id"];
                }
            }

            //如果在订单表中有购物记录，则直接更新订单的数量信息，以及减少商品的数量
            if ($productCount > 0) {
                $buyResult = $mysqlPdo->update(["amount" => $productCount, "price" => $price], "`order`", "id={$updateid}");
                if ($buyResult) {
                    $storage = ($this->storage > 1) ? $this->storage - 1 : 0;


                    $productResult = $mysqlPdo->update(["storage" => $storage], $this->productTable, "id=$this->productid ");

                    if ($productResult) {
                        Response::show(200, "添加到购物城成功");
                    } else {
                        Response::show(201, "添加到购物车失败");

                    }

                } else {
                    Response::show(201, "添加到购物车失败");

                }


            } //完全新的订单则新增购物记录，以及减少商品的数量
            else {
                $time = date("Y-m-d H:m");
                $data = ["productid" => $this->productid, "userid" => $this->userid, "linkman" => $this->linkman, "price" => $this->price, "status" => "0", "orderTime" => $time, "payMethod" => "", "productName" => $this->productName, "amount" => $this->amount, "productLevel" => $this->productLevel];


                /*
                 * 购买商品2步骤：1、订单表增加一个购买记录
                 *              2、商品表商品数量减1
                 */

                $Res = $mysqlPdo->add($data, $this->tableName);
                $lastInsertId = $mysqlPdo->getLastInsertId();
                if ($Res) {
                    //更新商品数量
                    $storage = ($this->storage > 1) ? $this->storage - 1 : 0;


                    $productResult = $mysqlPdo->update(["storage" => $storage], $this->productTable, "id=$this->productid ");

                    if ($productResult) {
                        Response::show(200, "添加到购物城成功", $lastInsertId);
                    } else {
                        //如果失败则删除订单
                        $orderDelRes = $mysqlPdo->delete($this->tableName, "id={$lastInsertId}");
                        if ($orderDelRes) {
                            Response::show(201, "添加到购物车失败");
                        } else {
                            Response::show(202, "出现异常");
                        }
                    }
                } else {
                    Response::show(201, "添加到购物城失败");
                }
            }


        } else if ($this->type == "commit") {
            $res = $mysqlPdo->update(["message" => $this->message,"status"=>1], "`order`", "id in ({$this->orderID})");
            if ($res){
                Response::show(200, "提交成功");

            }else{
                Response::show(201, "提交失败");

            }
        } else {
            $deleteRow = $mysqlPdo->find($this->tableName, "id={$this->orderID}");
            if (count($deleteRow) > 0) {
                $goodsCount = $deleteRow[0]["amount"];
                $productId = $deleteRow[0]["productid"];

                $del = $mysqlPdo->delete($this->tableName, "id={$this->orderID}");

                $productRow = $mysqlPdo->find($this->productTable, "id={$productId}");

                if (count($productRow) > 0) {
                    $storage = $productRow[0]["storage"];

                    $storage += $goodsCount;
                    $res = $mysqlPdo->update(["storage" => $storage], $this->productTable, "id={$productId}");
                    if ($res) {
                        Response::show(200, "订单删除成功");
                    } else {
                        Response::show(201, "订单删除失败");

                    }
                }


            } else {
                Response::show(202, "系统异常");
            }

        }


    }
}

$buyService = ProductBuy::getInstance();
$buyService->operateService();


?>

