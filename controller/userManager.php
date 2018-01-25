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



class UserManager
{
    private $tableName = "user";
    private $userId = "";
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

    function getUsers()
    {
        self.$this->userId = $_REQUEST["id"];
        self.$this->type = $_REQUEST["type"];
        $mysqlPdo = new PdoMySQL();

        if($this->type != "" && !empty($this->type) && $this->type === "detail"){
            $allrows = $mysqlPdo->find($this->tableName,"id=$this->userId");
            Response::show(200, '用户列表返回成功', $allrows, 'json');
        }else if($this->type != "" && !empty($this->type) && $this->type === "delete"){
            $result = $mysqlPdo->delete($this->tableName,"id=$this->userId");
            if($result){
                Response::show(200,'用户删除成功',"",'json');
            }
        }else{
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '用户列表返回成功', $allrows, 'json');
        }




    }
}

$lister = UserManager::getInstance();
$lister->getUsers();
?>

