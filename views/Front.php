<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet">
    <title>activity-Front</title>
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
      <form  meta='post' action="Front/btnSubmit">
        <table style="text-align:center;margin:0 auto;">
            <tr>
              <td>
                員工編號:  
              <td>
              <td>
                <input type="text" name="txtNumber"/>
              </td>
            </tr>
            <tr>
              <td>
                員工姓名:  
              <td>
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