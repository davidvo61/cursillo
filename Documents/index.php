<!DOCTYPE html>
<html>
	<head>
		<title>Orlando Cursillo</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="imgs/icons/favicon.png" type="image/png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/content/schedule.js"></script>
		<script src="js/content/team_builder.js"></script>
		<script src="js/content/talks.js"></script>
		<script src="js/content/reporting.js"></script>
        
	</head>
	<body>
		<div class="container-fluid">
   			<div class="jumbotron">
    			<h1>Orlando Cursillo</h1> 
  			</div>
			<nav class="navbar navbar-default">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.html">Cursillo Management System</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#schedule" class="schedule">Schedule 
                      <span class="glyphicon glyphicon-calendar">       </span></a></li>
			      <li><a href="#team-builder" class="team-builder">Team Builder 
                      <span class="glyphicon glyphicon-user"></span></a></li>
			      <li><a href="#talks" class="talks">Talks <span class="glyphicon glyphicon-list-alt"></span></a></li> 
			      <li><a href="#reporting" class="reporting">Reporting 
                      <span class="glyphicon glyphicon-folder-open"></span></a></li> 
			    </ul>
			</nav>
			<div class="container-fluid switch-content">
				<a name="schedule"></a><div class="content schedule"></div>
				<a name="team-builder"></a><div class="content team-builder" style="display:none"></div>
				<a name="talks"></a><div class="content talks" style="display:none"></div>
				<a name="reporting"></a><div class="content reporting" style="display:none"></div>
			</div>
			<footer class="navbar-fixed-bottom">Orlando Cursillo, Inc.</footer>
		</div>
        
        
        
        
 
        
<?php
    $conn=mysqli_connect("127.0.0.1","root","Sydneymysql1","cursilloV5");
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$retval = mysqli_query($conn, "SELECT * FROM Person WHERE sponsorID = 5;");
if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}

while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
    echo "name is: {$row['firstName']}  <br> ";
}











$conn->close();

?>

	</body>
</html>