<html>
<body>
<center>
<textarea cols="100" rows="40" readonly>
<?php
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "bcc07699641851";
$password = "3156dcd4";
$dbname = "alexiamessages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT idcommunications FROM communications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["idcommunications"]. "&#13;&#10;";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</textarea>

<form action="Chat.php" method="post">
<textarea type="text" name="text" wrap="soft" rows="10" cols="100" >
</textarea>
<br>
Nom:<input type="text" name="name" size="15"><br>
Password:<input type="password" name="password"><br>
<input type="submit">
</center>
</form>
</body>
</html>