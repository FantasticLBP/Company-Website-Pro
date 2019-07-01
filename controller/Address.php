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

class EditAddress
{
    private $tableName = "user";
    private $type = "";
    private $address = ""; //收货地址
    private $identifier = "";
    private $name = "";

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

    public function getAddress()
    {

        self . $this->type = $_REQUEST["type"];
        self . $this->identifier = $_REQUEST['identifier'];
        self . $this->name = $_REQUEST["name"];
        self . $this->address = $_REQUEST['address'];

        $mysqlPdo = new PdoMySQL();
        if ($this->type != "" && !empty($this->type) && $this->type == "show") {
            $allrow = $mysqlPdo->find($this->tableName, "username='{$this->name}' and identifier='{$this->identifier}'");
            if (count($allrow) == 1) {
                Response::show(200, "个人信息返回成功", $allrow);
            } else {
                Response::show(201, "个人信息获取失败");
            }
        } else {
            $result = $mysqlPdo->update(["address" => $this->address], $this->tableName, "username='{$this->name}' and identifier='{$this->identifier}'");
            if ($result) {
                Response::show(200, "收获地址更新成功");
            } else {
                Response::show(201, "收获地址更新失败");
            }
        }
    }
}

$manager = EditAddress::getInstance();
$manager->getAddress();
