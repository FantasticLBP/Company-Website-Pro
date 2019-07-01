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

class FAQListService
{
    private $tableName = "faqquestion";
    private $type = "";
    private $messageId = "";
    private $title = "";
    private $content = "";

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

    public function operateService()
    {
        self . $this->type = $_REQUEST["type"];
        self . $this->messageId = $_REQUEST["messageId"];
        self . $this->title = $_REQUEST["faqTitle"];
        self . $this->content = $_REQUEST["basecondition"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '问题常见稳日信息返回成功', $allrows, 'json');
        } else if ($this->type === "delete") {

            $deleteRes = $mysqlPdo->delete($this->tableName, "id=$this->messageId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200, "删除成功", "", "json");
            } else {
                Response::show(201, "删除失败", "", "json");
            }
        } else {

            $time = date("Y年m月d日");
            $data = ["author" => "admin", "title" => $this->title, "content" => $this->content, "time" => $time];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script>window.location.href = "../admin/newfaq.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newfaq.php?m=af"</script>';
            }

        }

    }
}

$faqListService = FAQListService::getInstance();
$faqListService->operateService();
