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


class Orders
{
    private $tableName = "order";
    private $orderId = "";
    private $type = "";


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

    function getOrders(){
        self.$this->type = $_REQUEST["type"];
        self.$this->orderId = $_REQUEST["orderId"];

        $mysqlPdo = new PdoMySQL();

        if($this->type == "all"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200,'订单列表返回成功',$allrows,'json');
        }else if($this->type == "delete"){

            $deleteRes = $mysqlPdo->delete($this->tableName,"id={$this->orderId}");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }
    }
}

$lister = Orders::getInstance();
$lister->getOrders();
?>