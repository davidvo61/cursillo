<html>
<body>

<?php
    $conn=mysqli_connect("127.0.0.1","root","Sydneymysql1","cursilloV4");
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//getting parishID using parish name from form
$parish = $_POST["parish"];
$retval = mysqli_query($conn, "SELECT parishID FROM Parish WHERE parish = '$parish'");
if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}
$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
$parishID = $row["parishID"];
echo "parish id is: $parishID <br> ";







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

//todo: use info below to check if weekend exist
$weekendDate = $_POST["weekendDate"];
$addressWeekend = $_POST["addressWeekend"];
$cityWeekend = $_POST["cityWeekend"];
$stateWeekend = $_POST["stateWeekend"];
$zipWeekend = $_POST["zipWeekend"];
$inGroupReunion = $_POST["inGroupReunion"];
$groupFrequency = $_POST["groupFrequency"];

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



echo "first name is: $firstName <br>";
$sql = 
"INSERT INTO `cursilloV4`.`Person` (`parishID`, `firstName`, `lastName`, `date`, `homePhone`, `workPhone`, `email`, `address`, `city`, `state`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`, `zip`) 

VALUES ($parishID, '$firstName', '$lastName', '$date',  '$homePhone', '$workPhone', '$email', '$address', '$city', '$state', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip', '$zip');";

//todo use parish id to int parish and pastor
//todo hasSpouse, sponsor, children

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}








$conn->close();

?>

</body>
</html>