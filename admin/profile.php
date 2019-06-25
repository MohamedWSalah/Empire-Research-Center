<html>
    <head>
        <title>admin profile </title>
		<link href="includes/css/cascadestylesheet.css" rel="stylesheet" type="text/css">
        <!--The beginning of query cdn -->
				<script src="jquery-3.1.1.min.js"></script>
				<script src="jquery.easing.1.3.js"></script>
						<!--The End of jquery cdn -->
				<script src="javascript.js"></script>
    </head>
	<?php
		require 'initialize_session.php';
		require'user.php';
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
			<h2>welcome back admin !!</h2>
		<div>
		<?php
			//creating 4 variables with the neccessary connection data
			$db_host="localhost";//the host(ip) which is in our case localhost as the db server running locally
			$db_name="researchblog";//the db name
			$db_user="root";//the user which we created when we created the database
			$db_pass="";//the password which we generated automatically when we created the user
			$conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			$name = "";
			$password= "";
			$Email= "";
			$profession= "";
			$nationality= "";
			$phone= "";
			$DateOfBirth= "";
			$gender= "";
			//this method takes the variables and connects to the database and return a variable
			//that represents the connection to the database server.
			//---------------------------------------------------------------------------
			if(mysqli_connect_error()){ //used to check if the connection had succeeded and it returns a string that contains an error message if it succeeeded and otherwise it returns null , so in this if statement the none empty string will be casted to true and null will be converted to the boolean value false
			// if there is a connection error the code will go into this code block
				echo mysqli_connect_error();// prints more details about why the connection failed
				exit;//stopps the script right where it is bec as the conn failed we don't want to continue to excute the script
			}
			echo "Connected successfully"; //else lock prints connection successful 	


			$query1="SELECT username FROM users WHERE id=1"; //variable that holds sql statements that we want to use
			$query2="SELECT password FROM users WHERE id=1";
			$query3="SELECT email FROM users WHERE id=1";
			$query4="SELECT profession FROM users WHERE id=1";
			$query5="SELECT nationality FROM users WHERE id=1";
			$query6="SELECT phone_number FROM users WHERE id=1";
			$query7="SELECT date_of_birth FROM users WHERE id=1";
			$query8="SELECT gender FROM users WHERE id=1";
			$result1=mysqli_query($conn,$query1); //variable that holds the function which sends the data to the db and takes the connection & the query as arguments.
			//the results from mysqli_query func and these res can be bool val FALSE if there is an error .
			$result2=mysqli_query($conn,$query2);
			$result3=mysqli_query($conn,$query3);
			$result4=mysqli_query($conn,$query4);
			$result5=mysqli_query($conn,$query5);
			$result6=mysqli_query($conn,$query6);
			$result7=mysqli_query($conn,$query7);
			$result8=mysqli_query($conn,$query8);

			if ($result1 === false || $result2 === false || $result3 === false || $result4 === false || $result5 === false || $result6 === false || $result7 === false || $result8 === false ){
				echo mysqli_error($conn); //print the error
			}
			else 
			{
				$username_db=mysqli_fetch_row($result1); //get the username from db
				$password_db=mysqli_fetch_row($result2) ;// get the pass from db
				$Email_db= mysqli_fetch_row($result3) ;
				$profession_db= mysqli_fetch_row($result4) ;
				$nationality_db= mysqli_fetch_row($result5) ;
				$phone_db= mysqli_fetch_row($result6) ;
				$DateOfBirth_db= mysqli_fetch_row($result7) ;
				$gender_db= mysqli_fetch_row($result8) ;

			}
			$u = new user(1,$username_db[0],"",$Email_db[0],$profession_db[0],$nationality_db[0],$phone_db[0],$DateOfBirth_db[0],$gender_db[0]);
			var_dump($u);
		?>
				
		<footer>

			

		</footer>
	</body>

</html>