<!DOCTYPE html>

<html>
	<head>	
		<meta charset=utf-8 />
		<title>Candidate Application</title>
		<link rel=stylesheet href=css/style.css type=text/css>
        
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
                <h1>DIOCESE OF ORLANDO CURSILLO</h1>
                <h3>SPONSOR APPLICATION</h3>
                <h5><i>(Please fill out all information)</i></h5>  			
            </div>
  			<div class="container">
  			
  			
  			
  			<form method="post" action="sponsorSummit.php">
				<ol>
                    <legend>Sponsor Information:</legend>
					<li>
                        
						First Name <input name=firstName type=text required autofocus>
                        
                        Last Name <input name=lastName type=text required autofocus>
                                               
                        Date <input name=date type=date placeholder="Eg. yyyy-mm-dd" required><br>
                                                
                        Home Phone <input name=homePhone type=text placeholder="Eg. 1234567890" required>
                        
                        Work Phone <input name=workPhone type=text placeholder="Eg. 1234567890" required>
                        
                        Email Address <input name=email type=text placeholder="Eg. julia@yahoo.com" required><br>
                        
                        Address <input id="longTextBox" name=address type=text required ><br>
                        
                        City <input name=city type=text required>
                        
                        State <input name=state type=text required>
                        
                        Zip <input name=zip type=text required><br>
                        
                        Date You Made Your Weekend 
                        <input name=weekendDate type=date placeholder="Eg. yyyy-mm-dd" required>
                        
                        <br>Place You Made Your Weekend:<br>
                        Address <input id="longTextBox" name=addressWeekend type=text required ><br>
                        
                        City <input name=cityWeekend type=text required>
                        
                        State <input name=stateWeekend type=text required>
                        
                        Zip <input name=zipWeekend type=text required>
                        
                        <br>Are You In Permanent Group Reunion?<br>
                        <input type="radio" name="inGroupReunion" value="Yes" > Yes<br>
                        <input type="radio" name="inGroupReunion" value="No"> No
                        
                        <br>How Often Do You Attend Ultreya? 
                        <input id="shortTextBox" type="number" name="groupFrequency" >Times Per Month
					</li>
					
                    <br><legend><br>Candidate's Information:</legend>
					<li>
                        First Name <input name=C_FirstName type=text required autofocus>
                        
                        Last Name <input name=C_LastName type=text required autofocus>
                       
                        Preferred Name <input name=C_PreferedName type=text required autofocus><br>
                        
                        Is Your Candidate You Catholic?<br>
                        <input type="radio" name="C_IsCatholic" value="Yes" > Yes<br>
                        <input type="radio" name="C_isCatholic" value="No"> No<br>
                        <i>Ensure your candidate is Roman Catholic. Non-Catholics are encouraged to 
                            attend the Episcopal or Lutheran Cursillo or the Ecumenical Walk to Emmaus.</i><br><br>
                        
                        Is Your Candidate Married?<br>
                        <input type="radio" name="C_IsMarried" value="Yes" > Yes<br>
                        <input type="radio" name="C_IsMarried" value="No"> No<br><br>
                        
                        What Is The First Name of Your Candidate's Spouse?
                        <input name=CS_FirstName type=text required autofocus>
                        <br><i>If married, both husband and wife must submit applications at the same time because 
                            of the importance of being able to share the experience A separate sponsor application
                            must be completed for both. A Non-Catholic spouse is encouraged to attend the Episcopal 
                            or Lutheran Cursillo or the Ecumenical Walk to Emmaus.</i><br><br>
                        
                        Is Your Candidate's Spouse Being Sponsored For Cursillo?<br>
                        <input type="radio" name="CS_IsSponsored" value="Yes" > Yes<br>
                        <input type="radio" name="CS_IsSponsored" value="No"> No<br><br>
                        
                        Is Your Candidate Widowed or Divorsed?<br>
                        <input type="radio" name="CS_MarritalStatus" value="Widowed" > Widowed
                        <input id="shortTextBox" type="number" name="CS_YearsWidowed" >Years<br>
                        <input type="radio" name="CS_MarritalStatus" value="Divorsed"> Divorsed
                        <input id="shortTextBox" type="number" name="CS_YearsDivorsed" >Years<br><br>
                        
                        <i>Please keep in mind that Cursillo is not a “healing” ministry for 
                            emotional or tragic situations.</i><br>
                        
                        Does Your Candidate Have Any Physical, Emotional, Or Spiritual Needs That
                        The Teams Need To Be Aware Of?<br>
                        <textarea id="largeTextBox" name=C_OtherNeeds ></textarea><br>
					</li>
				<br><button type=submit>Summit!</button>
            </ol>
		</form>
  			</div>
  			<footer class="navbar-fixed-bottom">Orlando Cursillo, Inc.</footer>
		</div>
	</body>
</html>