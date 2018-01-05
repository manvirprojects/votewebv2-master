<?php
$servername = "mysqlv2";
$username = "root";
$password = "india@123";
$db = "vote_dbv2";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>"; 

$vote = $_POST['team'];
switch ($vote) {
   case "srilanka":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=1";
   if ($conn->query($sql) === TRUE) {
    echo "THANKS FOR CASTING VOTE, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;


   case "pakistan":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=2";
   if ($conn->query($sql) === TRUE) {
    echo "THANKS FOR CASTING VOTE, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;


   case "india":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=3";
   if ($conn->query($sql) === TRUE) {
    echo "THANKS FOR CASTING VOTE, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;
   default:
      echo "<h2>VOTE FOR YOUR FAVOURITE TEAM</h2><br>";
}
"<br>";
$sql = "SELECT * FROM vote";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "        COUNTRY:     " . $row["teamname"]. " VOTES: " . $row["votes"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<html>
<head>
<title>VOTEAPP VERSION 2</title>
</head>
<fieldset>
<font color="green">
<legend align="center"><h2>VOTING APP Version v2</h2></legend>
<form name=voteappform method="POST">
<label aliign="center"> ASIA CUP TEAMS </label> </fieldset>
</font>
<fieldset>
<label> VOTE FOR WINNING TEAM </label>
</fieldset>
<input type="radio" name="team" id="srilanka" value="srilanka">Srilanka<br>
<input type="radio" name="team" id="pakistan" value="pakistan">Pakistan<br> 
<input type="radio" name="team" id="india" value="india">India<br>
<button type="Submit">vote</button>
</form>
</body>
</html>
