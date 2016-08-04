<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet">
	  <!--<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>-->
	  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
	  	  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css"/> 
    <title>activity-Back</title>
    <?php  $this->js("jquery007");
           $this->js("jquery");
           $this->js("Back");
           $this->js("jquery.datetimepicker.full");
           $this->js("jquery.datetimepicker.min");
           $this->js("jquery.datetimepicker");
    ?>
 
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
    <form  method="post" action="Back/btnOK">
      <table style="text-align:center;margin:0 auto;">
        <tr>
          <td>活動名稱</td>
          <td>    
            <input type="text" name="activity_name"/>
          </td>
        </tr>
        <tr>
          <td>輸入限制人數</td>
          <td>
            <input type="text" name="max_num"/>
          </td>
        </tr>
        <tr>
          <td>  
            <label for="sltOnOff">是否可攜伴:</label> 
          </td>
          <td>
    				<select name="sltOnOff" id="sltOnOff" data-role="slider">
    					<option value="on" >可攜伴</option>
    					<option value="off">不可攜伴</option>
    				</select>
          </td>
        </tr>
        <tr>
          <td>活動開始報名時間</td>
          <td> 
            <input type="text" name="start_time" id='start_time'/> 
          </td>
        </tr>
        <tr>
          <td>活動結束報名時間</td>
          <td> 
            <input type="text" name="end_time" id='end_time'/> 
          </td>
        </tr>
      </table>

      <table id="table1" style="text-align:center;margin:0 auto;">
     
        <tr>
          <td colspan="2">設定可參加人員
          </td>
        </tr>
        <tr>
          <td>編號</td>
          <td>名稱</td>
        </tr>
        <tr>
          <td>
          <input name="join_number[]" type="text" size="12">
          </td>
          <td>
          <input name="join_name[]" type="text" size="12">
          </td>
        </tr>
       </table>
    
       <table style="text-align:center;margin:0 auto;">
        <tr>
          <td>
            <input type="button" value="增加" onclick="add_new_data()"> 
          </td>
          <td>
            <input type="button" value="減少" onclick="remove_data()"><br />
          <td/>  
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnOK" value="送出"/>
          </td>
        </tr>
        </table>
 
    </form>
  </div>
  

</body>
</html>