<html>
	<head>
		<script src="sjcl/core/aes.js"></script>
	</head>
	<body>
		<form method="Post" action="index.php">
			<p>
				<label for="message">Message</label>
				<input type="textarea" name="message"/>
				<br />
			</p>
			<input type="submit" value="Envoyer" name="submit"/>
		</form>
	<script> 
			var uniqid = function() {
			return (new Date().getTime() + Math.floor((Math.random()*10000)+1)).toString(16);
			};
			var sjcl = require('./sjcl'); 
			console.log(sjcl.encrypt(uniquid, message); 
	</script>
<html/>


<?php
		//Cas A
		if(isset($_POST['submit']))
		{
			$id = uniqid();
			//echo $id;
			
		}
		
?>