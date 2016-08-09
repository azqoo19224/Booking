$(document).ready(function()
{

function getTotal(){
	$.ajax({
	        type:"GET",
	        url:"/MVC/Front/searchCount",
	        data: {'id' : $("#ID").text()},
	        dataType:"text",
	        error:function(Xhr)
	        {
	          console.log("error");
	        },
	        success:function(data)
	        { 
	          $("#max").text(data);
	          
	          setInterval(getTotal, 2000);
	        }
	   });
}

getTotal();
    
});

