
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Client's List</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

		<meta charset="utf-8">
		<meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
		<link href="font-awesome.min.css" rel="stylesheet">
		<link href="Final_Project.css" rel="stylesheet">
		<link href="staff_login_page.css" rel="stylesheet">
	</head>
	<body style="background-color:powderblue;">	
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Client's List</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<div id="wb_IconFont1" style="position:absolute;left:1237px;top:30px;width:40px;height:40px;text-align:center;z-index:56;">
		<a href="./index.php"><div id="IconFont1"><i class="fa fa-times"></i></div></a></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




