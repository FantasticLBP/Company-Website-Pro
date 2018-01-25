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


class UserInfo
{
    private $tableName = "user";
    private  $name = "";
    private  $identifier = "";
    private $id = "";



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

    function getInfo(){

        self.$this->id = $_REQUEST['id'];
        self.$this->name = $_REQUEST['name'];
        self.$this->identifier = $_REQUEST['identifier'];




        $mysqlPdo = new PdoMySQL();

        $userRow = $mysqlPdo->find("user","username='{$this->name}' and identifier='{$this->identifier}'");


        if(count($userRow)  > 0){
            Response::show(200,"用户信息返回成功",$userRow[0]);
        }else{
            Response::show(200,"暂无用户信息");
        }

    }
}

$manager = UserInfo::getInstance();
$manager->getInfo();
?>