<?php 

$name = "localhost";
$uname = "root";
$password = "";
$db_name = "ragnarspizza";

$conn = mysqli_connect($name, $uname, $password, $db_name);

// check the connection

if(!$conn) {
    echo "Connection Failed";
}

	// write query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	print_r($pizzas);

?>

<!DOCTYPE html>
<html> 
<head>
    
</head>
<body>


<?php include('templates/header.php')?>
<?php include('templates/footer.php')?>
    
   
</body>
</html>