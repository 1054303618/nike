<?php
    require "../lib/connect.php";
    $sid=$_POST["sid"];
    $name=$_POST["name"];
    $date=$_POST["date"];
    $sex=$_POST["sex"];
    $tel=$_POST["tel"];
    $note=$_POST["note"];
    $insert="insert into online(sid,name,date,sex,tel,note) values ('$sid','$name','$date','$sex','$tel','$note')";
    $result=$mysqli->query($insert);
    if($result){
        echo json_encode([
            "code"=>200,
            "msg"=>"插入成功"
        ]);
    }else{
        echo json_encode([
            "code"=>400,
            "msg"=>"插入失败".$mysqli->error
        ]);
    }
?>