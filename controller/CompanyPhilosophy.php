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



class CompanyPhilosophy
{
    private $tableName = "companyPhilosophy";
    private $type = "";
    private $editId = "";

    private  $philosophy = "";
    private  $goal = "";

    protected static $_instance = null;

    protected function  __construct()
    {

    }

    protected function  __clone()
    {
        // TODO: Implement __clone() method.
    }


    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function getPhilosophy()
    {
        $this->editId = isset($_REQUEST["editId"])?$_REQUEST["editId"]:"";

        $this->type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";

        $this->philosophy = isset($_REQUEST["philosophy"])?$_REQUEST["philosophy"]:"";
        $this->goal = isset($_REQUEST["goal"])?$_REQUEST["goal"]:"";


        $mysqlPdo = new PdoMySQL();

        if($this->type != "" && !empty($this->type) && $this->type === "detail"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '公司理念返回成功', $allrows, 'json');
        }else if ($this->editId !== "" && isset($this->editId)) {
            $updateResulr = $mysqlPdo->update(["philosophy" => $this->philosophy, "goal" => $this->goal], $this->tableName, "id='$this->editId'");
            if ($updateResulr || $updateResulr == 0) {
                echo '<script type="text/javascript">window.location.href = "../admin/philosophy.php?success=1&type=update";</script>';
            }
        }else{
            $data = ["philosophy" => $this->philosophy, "goal" => $this->goal];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script type="text/javascript">window.location.href ="../admin/philosophy.php?success=1&type=add";</script>';
            } else {
                echo '<script type="text/javascript">window.location.href ="../admin/philosophy.php?success=0&type=add";</script>';
            }
        }

    }
}

$philosophy = CompanyPhilosophy::getInstance();
$philosophy->getPhilosophy();
?>

