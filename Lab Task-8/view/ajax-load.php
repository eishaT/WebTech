<!DOCTYPE html>
<html lang="en">
<head>
<style>
		table,td,tr,th{
			border:3px solid black;
			padding:30px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<?php

$search_value = $_POST["search"];

$conn = mysqli_connect('localhost', 'root', '', 'product') or die("Connection Failed");

$sql = "SELECT * FROM user_info WHERE buying LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border:"1px solid rosybrown";
  padding:"10px";
  border-collapse: "collapse">
              <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Price</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["Name"]}</td><td align='center'>{$row["buying"]}</td><td align='center'>{$row["quantity"]}</td>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
  
</body>
</html>

