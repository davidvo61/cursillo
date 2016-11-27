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
        // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    //declare and initiate all variables using form
    $parish = $_POST["parish"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $preferedName = $_POST["preferedName"];
    $DOB = $_POST["DOB"];
    $age = $_POST["age"];
    $occupation = $_POST["occupation"];
    $homePhone = $_POST["homePhone"];
    $workPhone = $_POST["workPhone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $gender = $_POST["gender"];
    $isCatholic = $_POST["isCatholic"];
    $isConverted = $_POST["isConverted"];
    $convertedDate = $_POST["convertedDate"];
    $isReceivingEucharist = $_POST["isReceivingEucharist"];
    $maritalStatus = $_POST["maritalStatus"];
    $pastor = $_POST["pastor"];
    $associatedOrganizations = $_POST["associatedOrganizations"];
    $requireLowerBunk = $_POST["requireLowerBunk"];
    $medicalRequirements = $_POST["medicalRequirements"];
    $emer1Name = $_POST["emer1Name"];
    $emer1Phone = $_POST["emer1Phone"];
    $emer2Name = $_POST["emer2Name"];
    $emer2Phone = $_POST["emer2Phone"];
    $sponsorFirstName = $_POST["sponsorFirstName"];
    $sponsorLastName = $_POST["sponsorLastName"];
    $sponsorPhone = $_POST["sponsorPhone"];

    //todo: stuff below need to be inputted in DB. Some variables might not be here (depending on hasSpouse) if Brooke is able to hide it on the original form.
    $hasSpouse = $_POST["hasSpouse"];
    $spouseFirstName = $_POST["spouseFirstName"];
    $spouseLastName = $_POST["spouseLastName"];
    $spouseReligion = $_POST["spouseReligion"];
    $spouseAttendedCursillo = $_POST["spouseAttendedCursillo"];
    $date = $_POST["date"];

    //getting parishID using parish name from form, assuming our database have all the parishes all ready to go
    $retval = mysqli_query($conn, "SELECT parishID FROM Parish WHERE parish = '$parish';");
    if(! $retval ) {
        die('Could not get data: ' . mysql_error());
    }
    $row = mysqli_fetch_array($retval, MYSQL_ASSOC);
    $parishID = $row["parishID"];












    $sql = 
    "INSERT INTO `$db`.`Person` (`parishID`, `firstName`, `lastName`, `preferedName`, `DOB`, `age`, `occupation`, `homePhone`, `workPhone`, `email`, `address`, `city`, `state`, `zip`, `gender`, `isCatholic`, `isConverted`, `convertedDate`, `isReceivingEucharist`, `maritalStatus`, `associatedOrganizations`, `requireLowerBunk`, `medicalRequirements`, `emer1Name`, `emer1Phone`, `emer2Name`, `emer2Phone`) 

    VALUES ($parishID, '$firstName', '$lastName', '$preferedName', '$DOB', '$age', '$occupation', '$homePhone', '$workPhone', '$email', '$address', '$city', '$state', '$zip', '$gender', '$isCatholic', '$isConverted', '$convertedDate', '$isReceivingEucharist', '$maritalStatus', '$associatedOrganizations', '$requireLowerBunk', '$medicalRequirements', '$emer1Name', '$emer1Phone', '$emer2Name', '$emer2Phone');";

    //todo use parish id to int parish and pastor
    //todo hasSpouse, sponsor, children

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }





    //todo: need further implementation if spouseID does exist(One Solution is to set the variables 
    //below to null then come back and make the necessary changes after spouse summit a candidate form as well)
    //getting spouseID using both spouseFirstName and spouseLastName
    $retval1 = mysqli_query($conn, "SELECT personID FROM Person WHERE firstName = '$spouseFirstName' && lastName = '$spouseLastName';");
    if(! $retval1 ) {
        die('Could not get data: ' . mysql_error());
    }
    $row1 = mysqli_fetch_array($retval1, MYSQL_ASSOC);
    $spouseID = $row1["personID"];
    echo "<br>spouseID is: " . $spouseID . "<br>";

    //getting sponsorID using sponsorFirstName and sponsorLastName
    $retval3 = mysqli_query($conn, "SELECT personID FROM Person WHERE firstName = '$sponsorFirstName' && lastName = '$sponsorLastName';");
    if(! $retval3 ) {
        die('Could not get data: ' . mysql_error());
    }
    $row3 = mysqli_fetch_array($retval3, MYSQL_ASSOC);
    $sponsorID = $row3["personID"];
    echo "sponsorID is: " . $sponsorID . "<br>";

    //getting candidateID using first and last name
    $retval4 = mysqli_query($conn, "SELECT personID FROM Person WHERE firstName = '$firstName' && lastName = '$lastName';");
    if(! $retval4 ) {
        die('Could not get data: ' . mysql_error());
    }
    $row4 = mysqli_fetch_array($retval4, MYSQL_ASSOC);
    $candidateID = $row4["personID"];
    echo "candidateID is: " . $candidateID . "<br>";


    //lindking person/candidate to spouse
    if($hasSpouse == "Yes"){
        mysqli_query($conn, "INSERT INTO `$db`.`Spouse` (`SpouseID`, `personID`) VALUES ('$spouseID', '$candidateID');");
            echo "<br>hasSpouse is yes<br>";
    }
    //linking sponsor to candidate
    mysqli_query($conn, "INSERT INTO `$db`.`Candidate` (`candidateID`, `sponsorID`) VALUES ('$candidateID', '$sponsorID');");


    $conn->close();

?>