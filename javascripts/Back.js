$(document).ready(function()
{
      $('#start_time').datetimepicker();  
      $('#end_time').datetimepicker(); 
});
//顯示時間
$(document).ready(function()
{
		var now = new Date();
		var year = now.getFullYear();
		var month = now.getMonth()+1;
		var day = now.getDay();
		var hour = now.getHours();
		var min = now.getMinutes();
		if(month < 10){
			month = '0' + month;
		}
		if(day < 10){
			day = '0' + day;
		}
		if(hour < 10){
			hour = '0' + hour;
		}
		if(hour > 12){
			hour = hour-12;
			hour = '0' + (hour);
		}
		if(min < 10){
			min = '0' + min;
		}
		$('#start_time').val(year+"/"+month+"/"+day+" "+hour+":"+min);
		$('#end_time').val(year+"/"+month+"/"+day+" "+hour+":"+min);
	})
	
	
function add_new_data()
{
		
		 var num = document.getElementById("table1").rows.length;
	
		 if($("#max_num").val() < num-1){
		 	alert('人數上限');
		 }
		 else{
		 
		 var Tr = document.getElementById("table1").insertRow(num);
		 
		 Td = Tr.insertCell(Tr.cells.length);
		 Td.innerHTML='<input name="join_number[]" type="text" size="12">';
		 Td = Tr.insertCell(Tr.cells.length);
		 Td.innerHTML='<input name="join_name[]" type="text" size="12">';
		 }
}
function remove_data()
{
		
		 var num = document.getElementById("table1").rows.length;
		 if(num >2)
		 {
		  document.getElementById("table1").deleteRow(-1);
		 }
	}