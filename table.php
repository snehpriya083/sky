<html>
<head>

<title> DATA IN TABULAR FORM</title>
</head>
<body>
<table bgcolor="grey" width="80%"border="3"cellspacing="0">
<thead>
<h2 align="center"><u>STUDENT RECORD</u></h2>
      <tr>
	  <td>ID</td>
	   <td>NAME</td>
	    <td>EMAIL</td>
		 <td>GENDER</td>
		 </tr>
	 </thead> 
	 <tbody id="mytable">
	 </tbody>
	 
</table>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	$.ajax({
		url:"ajax.php",
		type:"GET",
		datatype:"json",
		success: function(data){
			var tablebody="";
			$.each(data, function(index, std){
				tablebody += "<tr>";
				tablebody += "<td>" + std.id + "</td>";
				tablebody += "<td>" + std.name + "</td>";
				tablebody += "<td>" + std.email+ "</td>";
				tablebody += "<td>" + std.gender + "</td>";
				tablebody += "</tr>";
			});
			$("#mytable").html(tablebody);
		}
	});
});
				</script>
				</body>
				
</html> 