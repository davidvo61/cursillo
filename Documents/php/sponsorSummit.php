<html>
<body>

<?php
//    $hostname = "localhost";
//    $username = "admin91YuBuK";
//    $password = "xYJHmrKbwTrw";
//    $db = "cursilloV6";
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "Sydneymysql1";
    $db = "cursilloV4";
    $conn=mysqli_connect($hostname, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$date = $_POST["date"];
$homePhone = $_POST["homePhone"];
$workPhone = $_POST["workPhone"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$isSponsor = $_POST["isSponsor"];

//todo: use info below to check if weekend exist
$dateWeekend = $_POST["dateWeekend"];
$addressWeekend = $_POST["addressWeekend"];
$cityWeekend = $_POST["cityWeekend"];
$stateWeekend = $_POST["stateWeekend"];
$zipWeekend = $_POST["zipWeekend"];
$inGroupReunion = $_POST["inGroupReunion"];
$groupFrequency = $_POST["groupFrequency"];
$parish = $_POST["parish"];

//todo: use info below to check candidate
$C_FirstName = $_POST["C_FirstName"];
$C_LastName = $_POST["C_LastName"];
$C_PreferedName = $_POST["C_PreferedName"];
$C_IsCatholic = $_POST["C_IsCatholic"];
$C_IsMarried = $_POST["C_IsMarried"];
$CS_FirstName = $_POST["CS_FirstName"];
$CS_IsSponsored = $_POST["CS_IsSponsored"];
$CS_MarritalStatus = $_POST["CS_MarritalStatus"];
$CS_YearsWidowed = $_POST["CS_YearsWidowed"];
$CS_MarritalStatus = $_POST["CS_MarritalStatus"];
$CS_YearsDivorsed = $_POST["CS_YearsDivorsed"];
$C_OtherNeeds = $_POST["C_OtherNeeds"];


echo "first name is: $firstName <br>parishID is: $parishID <br>";


//todo: right now we are using the first and last name of sponsor to identify who the sponsor is
//it is better to use username and password because the sponsor might be updating their names and 
//that will be a problem. same applies to candidate
$retval = mysqli_query($conn, "SELECT personID FROM Person WHERE firstName='$firstName' && lastName='$lastName'");
if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}
$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
$sponsorID = $row["personID"];
//create or update sponsor info:
$sql = "UPDATE `$db`.`Person` SET `firstName`='$firstName', `lastName`='$lastName', `homePhone`='$homePhone', `workPhone`='$workPhone', `email`='$email', `address`='$address', `city`='$city', `state`='$state', `zip`='$zip' WHERE `personID`='$sponsorID';";
if($isSponsor == "No"){
    mysqli_query($conn, "INSERT INTO `$db`.`Sponsor` (`sponsorID`) VALUES ('$sponsorID');");
    echo "isSponsor is NO<br>";
}

//find the id of the candidate in the system. candidate should have already summit the form to be in the database
$retval2 = mysqli_query($conn, "SELECT personID FROM Person WHERE firstName='$C_FirstName' && lastName='$C_LastName'");
if(! $retval2 ) {
    die('Could not get data: ' . mysql_error());
}
$row2 = mysqli_fetch_array($retval2, MYSQL_ASSOC);
$candidateID = $row2["personID"];
//linking candidate to sponsor
mysqli_query($conn, "INSERT INTO `$db`.`Candidate` (`candidateID`, `sponsorID`) VALUES ('$candidateID', '$sponsorID');");


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>