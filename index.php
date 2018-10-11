<html>
	<head>
		<script type="text/javascript" src="sjcl/sjcl.js"></script>
		 <script src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="js-sha256/src/sha256.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/pbkdf2.js"></script>
	</head>
	<body>
		<form method="Post" action="index.php">
			<p>
				<label for="message">Message</label>
				<input type="textarea" id="message" name="message"/>
				<br />
			</p>
			<input type="submit" value="Envoyer" name="submit"/>
		</form>
		<script>
			$(document).ready(function(){

				var $message = $('#message');
			});

			var uniqid = function() {
			return (new Date().getTime() + Math.floor((Math.random()*10000)+1)).toString(16);
			};
				alert(uniqid());

				var keySize = 256;
				var ivSize = 128;
				var iterations = 100;

		/*	var password =sha256(uniqid);
			alert (password);*/

/*
				function encrypt($message){
					var salt = CryptoJS.lib.WordArray.random(128/8);

					var key = CryptoJS.PBKDF2(salt, {
						keySize: keySize/32,
						iterations: iterations
					});*/
		</script>
<html/>


<?php

		//Cas A
		if(isset($_POST['submit']))
		{
			$id = uniqid();
			//echo $id;
			$crypto = $_POST['message'];
			echo $crypto;

		}

?>
