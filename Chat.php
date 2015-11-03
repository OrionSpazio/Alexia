<!Doctype html>
<html>
<body>
<?php
if ($_POST["password"]=="good"){
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "bcc07699641851";
$password = "3156dcd4";
$dbname = "alexiamessages";
$array = array($_POST["name"],":","&#13;&#10;","     ",$_POST["text"],"&#13;&#10;");
$text = implode("",$array);
$arrayMail = array($_POST["name"],":","\n","     ",$_POST["text"],"\n");
$textMail = implode("",$arrayMail);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO communications VALUES ('$text');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$message = wordwrap($textMail);
//mail("orionspazio@gmail.com","New chat message on Seg-Intel",$textMail);
//header("Location: http://alexia-gab.azurewebsites.net/Messages.php");
}
else{
	echo "wrong password";
}
?>
</body>
</html>