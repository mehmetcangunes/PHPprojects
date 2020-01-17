<html>

	<head>
		<title>Hash Generator | base64 decoder & encoder</title>
		<meta charset="utf8">
	</head>

	<body>
		<h1>Hash Generator</h1> <br><br>
		<form method="get">
			<div class="main">
				<tr>
					<input type="text" name="text" >
					<td>
						<select name="hash">
							<option value="" selected> </option>
						  <option value="md5">md5</option>
						  <option value="sha1">sha1</option>
						  <option value="base64_encode">base64 encode</option>
						  <option value="base64_decode">base64 decode</option>
						</select>
					</td>
					<td><input type="submit" value="generate"></td>
				</tr>
			</div>
		</form>
	</body>

</html>
<?php

	if($_GET){
		
$hashes = $_GET['hash'];
switch ($hashes) {

	case 'md5':
		$text= $_GET['text'];
		if(empty($text)){
			echo "Boş yazamazsınız .";
		}else{
$hash = md5($text);
echo $hash;
		}
		break;
	
case 'sha1':
	$text = $_GET['text'];
	if(empty($text)){
		echo "Boş yazamazsınız.";
	}else{
		$hash= sha1($text);
		echo $hash;
	}
	break;

case 'base64_encode':
	$text = $_GET['text'];
	if(empty($text)){
		echo "Boş yazamazsınız.";
	}else{
		$encode = base64_encode($text);
		echo $encode;
	}
	break;

	case 'base64_decode':
		$text = $_GET['text'];
		if(empty($text)){
			echo "Boş yazamazsınız.";
		}else{
			$decode = base64_decode($text);
			echo $decode;
		}
		break;

}
}
?>
