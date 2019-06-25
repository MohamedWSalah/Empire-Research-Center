<html>
    <head>
        <title>admin cases </title>
		<link href="includes/css/cascadestylesheet.css" rel="stylesheet" type="text/css">
        <!--The beginning of query cdn -->
				<script src="jquery-3.1.1.min.js"></script>
				<script src="jquery.easing.1.3.js"></script>
						<!--The End of jquery cdn -->
				<script src="javascript.js"></script>
    </head>
	<?php
		require 'initialize_session.php';
	?>
	<body id="bod">
		<div id="header">
			<center> <img src="images/admin.png" alt="adminlogo"	id="adminlogo">	</center>
			<h3 id="txt"><i>Admin Panel </i></h3>
		</div>

		<div id="sidebar">
			<ul style="list-style-type:none">
                        <li><a href="profile.php"> profile </a> </li> <br><br>
                        <li><a href="settings.php">settings </a></li><br><br>
						<li><a href="changepass.php"> Change password</a></li><br><br>
                        <li><a href="SubmitCase.php"> SubmitCase </a></li><br><br>
						<li><a href="allCases.php"> Cases </a></li>
				
			</ul>
		
		<div>
		
		<div id="content">
			<?php
				$db_host="localhost";//the host(ip) which is in our case localhost as the db server running locally
				$db_name="researchblog";//the db name
				$db_user="root";//the user which we created when we created the database
				$db_pass="";//the password which we generated automatically when we created the user
				$conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);

				if(mysqli_connect_error()){ //used to check if the connection had succeeded and it returns a string that contains an error message if it succeeeded and otherwise it returns null , so in this if statement the none empty string will be casted to true and null will be converted to the boolean value false
				// if there is a connection error the code will go into this code block
					echo mysqli_connect_error();// prints more details about why the connection failed
					exit;//stopps the script right where it is bec as the conn failed we don't want to continue to excute the script
				}
				$query1="SELECT * FROM cases"; //variable that holds sql statements that we want to use
				$result1=mysqli_query($conn,$query1); //variable that holds the function which sends the data to the db and takes the connection & the query as arguments.
				//the results from mysqli_query func and these res can be bool val FALSE if there is an error .
				if ($result1 === false ){
					echo mysqli_error($conn); //print the error
				}
				else 
				{
					$data_db=mysqli_fetch_all($result1); //gets the entire row in the db then used later to get the username from db
				
				
					foreach($data_db as $key){
					
						echo "Title: ". $key[1] . "</br>Comment: " . $key[2]."</br>";
		
				}
			}
				                
			?>
		</div>
		
				
		<footer>
		</footer>
	</body>
</html>