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

class Speech
{
    private $tableName = "speech";
    private $type = "";
    private $editId = "";

    private $paragraph1 = "";
    private $paragraph2 = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
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

    public function getSpeech()
    {
        $this->editId = isset($_REQUEST["editId"]) ? $_REQUEST["editId"] : "";
        $this->type = isset($_REQUEST["type"]) ? $_REQUEST["type"] : "";

        $this->paragraph1 = isset($_REQUEST["paragraph1"]) ? $_REQUEST["paragraph1"] : "";
        $this->paragraph2 = isset($_REQUEST["paragraph2"]) ? $_REQUEST["paragraph2"] : "";

        $mysqlPdo = new PdoMySQL();

        if ($this->type === "detail") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '领导致辞返回成功', $allrows, 'json');
        } else if ($this->editId !== "" && isset($this->editId)) {
            $updateResulr = $mysqlPdo->update(["paragraph1" => $this->paragraph1, "paragraph2" => $this->paragraph2], $this->tableName, "id='$this->editId'");
            if ($updateResulr || $updateResulr == 0) {
                echo '<script type="text/javascript">window.location.href = "../admin/speech.php?success=1&type=update";</script>';
            }
        } else {
            $data = ["paragraph1" => $this->paragraph1, "paragraph2" => $this->paragraph2];
            $Res = $mysqlPdo->add($data, $this->tableName);
            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script type="text/javascript">window.location.href ="../admin/speech.php?success=1&type=add";</script>';
            } else {
                echo '<script type="text/javascript">window.location.href ="../admin/speech.php?success=0&type=add";</script>';
            }
        }

    }
}

$speech = Speech::getInstance();
$speech->getSpeech();
