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



class EmployeeService
{
    private $tableName = "employee";
    private $type = "";
    private  $employeefId = "";
    private $job = "";
    private  $place = "";
    private  $vacancy = "";
    private  $basecondition = "";

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
        self.$this->employeefId = $_REQUEST["employeefId"];
        self.$this->job = $_REQUEST["job"];
        self.$this->place = $_REQUEST["place"];
        self.$this->vacancy = $_REQUEST["vacancy"];
        self.$this->basecondition = $_REQUEST["basecondition"];





        $mysqlPdo = new PdoMySQL();
        if($this->type === "select"){
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '人才引进信息返回成功', $allrows, 'json');
        }else if ($this->type === "delete") {

            $deleteRes = $mysqlPdo->delete($this->tableName,"id=$this->employeefId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200,"删除成功","","json");
            }else{
                Response::show(201,"删除失败","","json");
            }
        }else{

            $time = date("Y年m月d日");

            $data = ["job" =>$this->job,"place"=>$this->place,"vacancy"=>$this->vacancy,"time"=>$time,"basecondition"=>$this->basecondition];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();

            if ($Res){
                echo '<script>window.location.href = "../admin/newTalent.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../admin/newTalent.php?m=af"</script>';
            }



        }


    }
}

$employeeService = EmployeeService::getInstance();
$employeeService->operateService();
?>

