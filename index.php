<html>
	<head>
		<script type="text/javascript" src="sjcl/sjcl.js"></script>
		
	</head>
	<body>
		<form method="Post" action="index.php">
			<p>
				<label for="message">Message</label>
				<input type="textarea" id="textarea.message" name="message"/>
				<br />
			</p>
			<input type="submit" value="Envoyer" name="submit"/>
		</form>
	<script> 
			var message;
			document.getElementById('textarea.message').innerHTML = message;
			var uniqid = function() {
			return (new Date().getTime() + Math.floor((Math.random()*10000)+1)).toString(16);
			};
			console.log(sjcl.encrypt(uniqid, message)); 
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
