<?php

class FrontShow
{
    function __construct()
    {
         DB::pdoConnect();
    }

    function show($url)
    {
        $searchdate = DB::$db->prepare("SELECT `activity_name`, `max_total`, `start_time`, `end_time`,`carry`,`id` FROM `Activity` WHERE `url` = :url");
        $searchdate->bindParam(":url", $url);
        $searchdate->execute();
        $resultName = $searchdate->fetch(PDO::FETCH_ASSOC);
        return $resultName;
    }

    //找人數
    function searchCount()
    {
        $searchCount = DB::$db->prepare("SELECT SUM(`total`) FROM `join` WHERE id = :id");
        $searchCount->bindParam(":id", $_GET['id']);
        $searchCount->execute();
        $resultCount = $searchCount->fetch(PDO::FETCH_ASSOC);
        return $resultCount;
    }

    function checkjoin($id)
    {
        $checkMax = DB::$db->prepare("SELECT `max_total` FROM `Activity` WHERE `id` = :id");
        $checkMax->bindParam(":id", $id);
        $checkMax->execute();
        $max = $checkMax->fetch(PDO::FETCH_ASSOC);

        try {
            DB::$db->beginTransaction();

            $check = DB::$db->prepare("SELECT * FROM `join` WHERE `id` = :id AND`user_name` = :name AND `user_number` = :number");
            $check->bindParam(":id", $id);
            $check->bindParam(":name", $_POST['txtName']);
            $check->bindParam(":number", $_POST['txtNumber']);
            $check->execute();
            $checkjoin = $check->fetch(PDO::FETCH_ASSOC);

            $searchCount = DB::$db->prepare("SELECT SUM(`total`) FROM `join` WHERE id = :id FOR UPDATE");
            $searchCount->bindParam(":id", $id);
            $searchCount->execute();
            $resultCount = $searchCount->fetch(PDO::FETCH_ASSOC);

            $sum = $resultCount['SUM(`total`)'] + $_POST['number'];
            // 判斷人數
            if ($max["max_total"] >= $sum) {
                // 判斷資格
                if ($checkjoin) {
                    if ($checkjoin['total'] == false) {
                        $resule = "報名成功";

                        $this->addnum($id);
                    } else {
                        $resule = "你已經報名過了";
                    }
                } else {
                    $resule = "你不在名單內";
                }

            } else {
                $resule = "人數已滿";
            }
                sleep(3);
                DB::$db->commit();
        	    DB::$db = NULL;
                return $resule;

            } catch (PDOException $err) {
                DB::$db->rollback();
                echo "Error: " . $err->getMessage();
                exit();
                }

    }


    //更新人數
    function addnum($id)
    {
        $insert = DB::$db->prepare('UPDATE `join` SET `total` = :total WHERE `id` = :id AND `user_name` = :name AND `user_number` = :number');
        $insert->bindParam(":total", $_POST['number']);
        $insert->bindParam(":id", $id);
        $insert->bindParam(":name", $_POST['txtName']);
        $insert->bindParam(":number", $_POST['txtNumber']);
        $insert->execute();
    }
}
