


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taunin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully, now we will show the users.<br>";
  

$sql = "SELECT id, sensor, location, value1, value2, value3, reading_time FROM sensordata ORDER BY reading_time DESC LIMIT 1 ";

//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["sensor"]. " - level: " . $row["location"]. " - value1: " . $row["value1"]. " - value2: " . $row["value2"]." - value3: " . $row["value3"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>
