<?php
header('content-type:text/html;charset=utf-8');

//引入文件
include_once 'upload.func.php';
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';


$productName = $_REQUEST["productName"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    addPic();
}

function create()
{
    $table = 'product';
    $productBigKind = $_REQUEST['productBigKind'];
    $productSmallKind = $_REQUEST['productSmallKind'];
    $productLevel = $_REQUEST['productLevel'];
    $starLevel = $_REQUEST['starLevel'];
    $price = $_REQUEST['price'];
    $discountPrice = $_REQUEST['discountPrice'];
    $listingDate = $_REQUEST['listingDate'];
    $storage = $_REQUEST['storage'];
    $productDescription = $_REQUEST['productDescription'];
    $availableScope = $_REQUEST['availableScope'];
    $mainPic = "";
    $secPic = "";
    $watchTimes = '100';
    global $productName;
    $pdof = new PDO('mysql:host=localhost;dbname=db_cro', 'root', 'root');
    $sqlf = "insert into product (productName,productBigKind,productSmallKind,productLevel,productDescription,price,storage,discountPrice,listingDate,mainPic,secPic,starLevel,watchTimes,availableScope) values('" . $productName . "','" . $productBigKind . "','" . $productSmallKind . "','" . $productLevel . "','" . $productDescription . "','" . $price . "','" . $storage . "','" . $discountPrice . "','" . $listingDate . "','" . $mainPic . "','" . $secPic . "','" . $starLevel . "','" . $watchTimes . "','" . $availableScope . "')";
    $pdof->query("set names utf8");
    $stmtf = $pdof->query($sqlf);
    $allrow1 = $stmtf->fetch();
    if ($allrow1) {
        $productId = $allrow1[0];
    }

}

function addPic()
{
    global $productName;
    foreach ($_FILES as $fileInfo) {
        $files[] = uploadFile($fileInfo);
    }

//    if(count($files)>0){
    //        foreach($files as $keyname =>$value){
    //             echo "$value<br />";
    //        }
    //    }
    return "文件上传成功";
    echo $response;
}
