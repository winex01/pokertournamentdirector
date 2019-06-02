<?php 
$conn = new mysqli('localhost', 'root', '', 'tournamentdb');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT etotalplayers FROM ebuyin WHERE id = 101");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['etotalplayers'] . '<br>';
	}
}
?>
