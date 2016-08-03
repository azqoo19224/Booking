<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <title>activity-Back</title>
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
    <form  meta='post'>
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
            <input type="text" name="activity_num"/>
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
            <input type="datetime-local" name="activity_time"/> 
          </td>
        </tr>
        <tr>
          <td>活動結束報名時間</td>
          <td> 
            <input type="datetime-local" name="activity_end"/> 
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="btnOK" value="送出"/>
          </td>
        </tr>
      </table>
    </form>
  </div>
  

</body>
</html>