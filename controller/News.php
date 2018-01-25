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



class News
{
    private $tableName = "news";
    private $type = "";
    private  $kindtype = "";
    private  $time = "";
    private $title = "";
    private  $content = "";
    private  $newsid = "";
    private  $size = 10;
    private  $page = 0;


    protected static $_instance = null;

    protected function  __construct()
    {

    }

    protected function  __clone()
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
        self.$this->type = $_REQUEST["type"];
        self.$this->title = $_REQUEST["title"];
        self.$this->content = $_REQUEST["content"];
        self.$this->newsid = $_REQUEST["newid"];
        self.$this->time = $_REQUEST["time"];
        self.$this->kindtype = $_REQUEST["kindtype"];
        self.$this->page = $_REQUEST['page'];

        $mysqlPdo = new PdoMySQL();

        if($this->type == "gs"){

            $totalRow = $mysqlPdo->find($this->tableName,"kindtype=1");
            $allrows = $mysqlPdo->find($this->tableName,"kindtype =1","","","","",[(intval($this->page)-1)*intval($this->size),$this->size]);
            $datas = ["total"=>count($totalRow),"data"=>$allrows];
            Response::show(200, '新闻资讯信息返回成功', $datas, 'json');
        }else if($this->type == "hy" ){

            $totalRow = $mysqlPdo->find($this->tableName,"kindtype=2");
            $allrows = $mysqlPdo->find($this->tableName,"kindtype =2","","","","",[(intval($this->page)-1)*intval($this->size),$this->size]);
            $datas = ["total"=>count($totalRow),"data"=>$allrows];
            Response::show(200, '新闻资讯信息返回成功', $datas, 'json');
        }if($this->type === "select" ){
            if($this->newsid == "" || $this->newsid == null){
                $allrows = $mysqlPdo->find($this->tableName);
                Response::show(200, '新闻资讯信息返回成功', $allrows, 'json');
            }else{
                $allrows = $mysqlPdo->find($this->tableName,"id=$this->newsid");
                Response::show(200, '新闻资讯信息返回成功', $allrows, 'json');
            }

        }else if ($this->type === "delete") {
            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->newsid ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{

            $data = ["title" => $this->title,"content"=>$this->content,"time"=>$this->time,"kindtype"=>$this->kindtype,"author"=>"admin"];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res){
                echo '<script>window.location.href = "../admin/newspublish.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newspublish.php?m=af"</script>';
            }
        }


    }
}

$newservice = News::getInstance();
$newservice->operateService();
?>

