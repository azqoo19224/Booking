<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>activity-Front</title>
    
    <?php 
      $this->js("jquery");
      $this->js("Front");
    ?>

</head>
<body>
  <div>
      <form align="center"  method="post" action="/MVC/Front/btnSubmit/<?php echo $data['id']?>">
        <table align="center">
            <tr>
                <td id="ID" style = "display: none;"><?php echo $data['id']?></td>
                
                <td>活動名稱</td>
                <td><?php echo $data['activity_name']?></td>
            </tr>
            <tr>
                <td>活動可參加人數</td>
                <td><?php echo $data['max_total']?></td>
            </tr>
            <tr>
                <td>活動開始時間</td>
                <td><?php echo $data['start_time']?></td>
            </tr>
            <tr>
                <td>活動結束時間</td>
                <td><?php echo $data['end_time']?></td>
            </tr>
            <tr>
                <td>是否可攜伴</td>
                <td><?php  if($data['carry']==1){
                        echo "可攜伴"; 
                 ?>
                </td>
                <td><input type="text" name="number" id='number' value="1"/> </td>
                <?php
                  
                } 
                else{
                  echo "不可攜伴";
                  ?>
                </td><td style = "display: none;" ><input type="text" name="number" id='number' value="1"/></td>
                <?php 
                }
                ?>
               
            </tr>
              
            <tr>
              <td>已報名人數:</td>
              <td id="max">
                
              </td>
            </tr>
             <tr>
              <td>員工編號:</td>
              <td>
                <input type="text" name="txtNumber"/>
              </td>
            </tr>
            <tr>
              <td>員工姓名:</td>
              <td>
                <input type="text" name="txtName"/>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <input type="submit" name="btnSubmit" value="Submit"/>
              </td>
            </tr>
            
        </table>    
      </form>
  </div>
</body>
</html>