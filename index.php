<!DOCTYPE html>
<html>
<head>
	<title>Submit Form Using AJAX PHP and javascript</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
<div id="mainform">
<div class="innerdiv">
<h2>Submit Form using AJAX,PHP and Javascripy</h2>

<form id="formSubmit" method="post">
<h3>Fill Your Information!</h3>
<div>
<label>Name: </label>
<input type="text" name="name" id="name">
<label>Email:</label>
<input type="text" name="email" id="email">
<label>Password:</label>
<input type="password" name="password" id="password">
<label>Contact No:</label>
<input type="text" name="contact" id="contact">
<input type="submit" >
</div>
</form>
<div id="clear"></div>
</div>
</body>
</html>

<script>
	$("#formSubmit").on('submit',function(e){
		e.preventDefault();
		var data = $("#formSubmit").serialize();
		console.log(data);
		$.ajax({
			method:"post",
			url:"./ajaxjs.php",
			data:data,
			success:function(data){
				$("#clear").html("<h2>Form submitted Successfully</h2>")
			}
		})

	})

</script>