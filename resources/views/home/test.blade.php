<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>First Laravel Project TEST</title>
</head>
<body>
	<h1>Laravel Test Dosyasının içindesiniz.</h1>
	Id no:{{$id}} <br>
	Name:{{$name}}
	<br>
	<?php
	echo "ID number:",$id;
	echo "<br>Name:",$name;
	?>
	<br>
	<a href="{{route('anasayfa')}}">ANASAYFA</a>

</body>
</html>