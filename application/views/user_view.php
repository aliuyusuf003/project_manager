<!DOCTYPE html>
<html>
<head>
	<title>User view</title>
</head>
<body>
<h1><?php 


foreach ($results as $result) {
	echo $result->username.'<br>';
}
// echo $results;// this is for num_rows()


?></h1>
</body>
</html>