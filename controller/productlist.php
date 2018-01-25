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


class ProductList
{
    private  $tableName = "product";
    private  $type = "";
    private  $kind = "";
    private  $productId = "";
    private  $size = 28;
    private  $page = 0;
    private  $startPrice = 0;
    private  $endPrice = 0;
    private  $sales = 0;
    private  $productBigKind = "";
    private  $order = "";
    private  $direction = "";
    private  $id = "";

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

    function getProducts(){
        self.$this->type = $_REQUEST["type"];
        self.$this->kind = $_REQUEST["kind"];
        self.$this->productId = $_REQUEST["id"];
        self.$this->page = $_REQUEST["page"];


        self.$this->startPrice = $_REQUEST["startPrice"];
        self.$this->endPrice = $_REQUEST["endPrice"];
        self.$this->sales = $_REQUEST["sales"];
        self.$this->productBigKind  = $_REQUEST["productBigKind"];
        self.$this->order = empty($_REQUEST["order"])?"id":$_REQUEST["order"];
        self.$this->direction = empty($_REQUEST["direction"])?"DESC":$_REQUEST["direction"];
        self.$this->id = $_REQUEST["id"];

        $mysqlPdo = new PdoMySQL();

        if($this->type != "" && !empty($this->type)&&$this->type != "main" && empty($this->kind) && empty($this->id)){
            $Condition = "";
            if ($this->startPrice != "" || $this->endPrice != ""){
                $Condition = "price > ".$this->startPrice." and price < ".$this->endPrice;
            }

            if(!empty($this->type)){
                $Condition = $Condition.(empty($Condition)?"":" and ").'productLevel="'.$this->type.'"';
            }

            if(!empty($this->productBigKind)){
                $Condition = $Condition.(empty($Condition)?"":" and ").'productBigKind="'.$this->productBigKind.'"';
            }

            if(!empty($this->order)){
                $Condition = $Condition." order by ".$this->order;
            }

            if(!empty($this>$this->direction)){
                $Condition = $Condition." ".$this->direction;
            }

            $allrows = $mysqlPdo->find($this->tableName,$Condition,"","","","",[(intval($this->page)-1)*intval($this->size),intval($this->page)*intval($this->size)]);
            $totals =  $mysqlPdo->find($this->tableName,$Condition);
            $datas = ["datas"=>$allrows,"totals"=>count($totals)];
            Response::show(200,'产品列表返回成功',$datas,'json');
        }else if($this->type == "" && empty($this->type) && $this->kind == "delete" ){
            $result = $mysqlPdo->delete($this->tableName,"id=$this->productId");
            if($result){
                Response::show(200,'产品删除成功',"",'json');
            }
        }else if($this->type == "main"){
            $arrsy = [];

            $allrows = $mysqlPdo->find($this->tableName,"productLevel ='推荐商品'");
            if (count($allrows) > 3){
                $allrows = array_slice($allrows,0,3);
            }
            $arrsy["tuijian"] = $allrows;

            $allrows1 = $mysqlPdo->find($this->tableName,"productLevel ='普通商品'");
            if (count($allrows1) > 10){
                $allrows1 = array_slice($allrows1,0,10);
            }
            $arrsy["putong"] = $allrows1;

            $allrows2 = $mysqlPdo->find($this->tableName,"productLevel ='特价商品'");
            if(count($allrows2) > 5){
                $allrows2 = array_slice($allrows2,0,5);
            }
            $arrsy["tejia"] = $allrows2;

            if (count($arrsy) > 0 ){
                Response::show(200,'产品列表返回成功',$arrsy,'json');
            }
        }else if(!empty($this->id)){
            $product = $mysqlPdo->find($this->tableName,"id={$this->id}");
            $comments = $mysqlPdo->find("comment","productId={$this->id}");
            $recommend = $mysqlPdo->find($this->tableName,"productLevel ='推荐商品' and id !={$this->id}","","","","",[1,4]);
            $products = ["product"=>$product,"comments"=>$comments,"recommend"=>$recommend];
            Response::show(200,'产品详情返回成功',$products,'json');

        } else{
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200,'产品列表返回成功',$allrows,'json');
        }
    }
}

$lister = ProductList::getInstance();
$lister->getProducts();
?>