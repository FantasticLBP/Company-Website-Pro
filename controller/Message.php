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




class MessagesService
{
    private $tableName = "message";
    private $type = "";
    private  $messageId = "";
    private  $username = "";
    private  $email = "";
    private  $phone = "";
    private  $content = "";


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
        self.$this->messageId = $_REQUEST["messageId"];
        self.$this->username = $_REQUEST["username"];
        self.$this->content = $_REQUEST["content"];
        self.$this->phone = $_REQUEST["phone"];
        self.$this->email = $_REQUEST["email"];



        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '留言列表信息返回成功', $allrows, 'json');
        }else if ($this->type === "delete") {

            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->messageId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{

            $time = date("Y年m月d日");
            $data = ["username"=>$this->username,"phone"=>$this->phone,"email"=>$this->email,"content" => $this->content,"time"=>$time];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();

            if ($Res){
                echo '<script>window.location.href = "../contact-us.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../contact-us.php?m=af"</script>';
            }




        }


    }
}

$messageService = MessagesService::getInstance();
$messageService->operateService();
?>

