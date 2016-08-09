<?php

class Backinsert 
{
    function __construct()
      {
         DB::pdoConnect();
      }
      //輸入活動資料
    function insertA() 
    {
        $t = time();
        $t .= $a = rand(1, 2000);
        $url = md5($t);
       
        $insertA=DB::$db->prepare("INSERT INTO `Activity` (`activity_name`, `max_total`, `start_time`, `end_time`, `carry`, `url`) 
            VALUES (:name, :num,:start_time, :end_time, :slt, :url)");
        $insertA->bindParam(":name", $_POST['activity_name']);
        $insertA->bindParam(":num", $_POST['max_num']);
        $insertA->bindParam(":start_time", $_POST['start_time']);
        $insertA->bindParam(":end_time", $_POST['end_time']);
        $insertA->bindParam(":slt", $_POST['sltOnOff']);
        $insertA->bindParam(":url", $url);
        $insertA->execute();
        $returnUrl = "<a href='../Front/url/$url'>建立成功!!點我進入</a><br>https://azqoo-azqoo19224.c9users.io/MVC/Front/url/".$url;
        return $returnUrl;
    }
    //找活動ID
    function searchID() 
    {
        $searchName = DB::$db->prepare("SELECT `id` FROM `Activity` WHERE `activity_name` = :name");
        $searchName->bindParam(":name",$_POST['activity_name']);
        $searchName->execute();
        $resurtName = $searchName->fetch(PDO::FETCH_ASSOC);
        return $resurtName;
    }

    //建立活動成員名單
    function insertJ($id) 
    {
        $i=0;
        foreach($_POST["join_number"] as $number) 
        {
          $insertj = DB::$db->prepare("INSERT INTO `join` (`id`,  `user_number`, `user_name`) VALUES (:id, :number, :name)");
          $insertj->bindParam(":id", $id['id']);
          $insertj->bindParam(":number", $number);
          $insertj->bindParam(":name", $_POST["join_name"][$i]);
          $insertj->execute();
          $i++;
        }
    
    }
  
}
