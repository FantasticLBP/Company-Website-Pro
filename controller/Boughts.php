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

class Boughts
{
    private $tableName = "order";
    private $identifier = "";
    private $name = "";
    private $status = "";

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

    public function getBoughts()
    {

        self . $this->identifier = $_REQUEST['identifier'];
        self . $this->name = $_REQUEST["name"];
        self . $this->product = $_REQUEST['product'];
        self . $this->status = $_REQUEST['status'];

        $mysqlPdo = new PdoMySQL();

        $userRow = $mysqlPdo->find("user", "username='{$this->name}' and identifier='{$this->identifier}'");
        $userid = $userRow[0]["id"];

        $boughtRow = $mysqlPdo->find($this->tableName, "userid='{$userid}' and status={$this->status}");

        if (count($boughtRow) > 0) {
            Response::show(200, "购物信息返回成功", $boughtRow);
        } else {
            Response::show(200, "暂无购物信息");
        }

    }
}

$manager = Boughts::getInstance();
$manager->getBoughts();
