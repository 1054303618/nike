<?php
$pageId=$_GET['page_id'];
require_once '../lib/connect.php';
$nav=$mysqli->query("select * from nav where nid=$pageId")->fetch_assoc();
//$severItem=$mysqli->query("select * from service where")
$tpl=$nav['tmp'];
//var_dump($tpl);
$is=file_exists('../view/index/'.$tpl.'.html');
if($is){
    require "header.php";
    require "../view/index/".$tpl.".html";
    require "footer.php";
}else{
    require "../view/index/404.html";
}

