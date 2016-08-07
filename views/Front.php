<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>activity-Front</title>
    <!--<script type="text/javascript" src="Front.js"></script>-->

    <!--<script src="javascripts/jquery.js"></script>-->
 
    
</head>
<body>
  <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
        <div class="container">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav nav-justified">
              <li><a href="Front">前台</a></li>
              <li><a href="Back">後台</a></li>
            </ul>
          </div>
        </div>
  </div>
  <div>
      <form align="center"  method="post" action="../../Front/btnSubmit/<?php echo $data['id']?>">
        <table align="center">
            <tr>
                <td id="url" style = "display: none;" ><?php echo $data['id']?></td>
                
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