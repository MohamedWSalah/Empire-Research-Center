<title>admin settings </title>
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
			<center> <img src="images/admin.png" alt="adminlogo" id="adminlogo"></center>
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
			 <form method="post" action="change_settings.php">
				  <table style="width:70%">
					<tr>
					  <th><h2>Settings</h2></th>
					</tr>
					<tr>
					  <td align="right"><label for="Username">Username</label></td>
							<td><input type="text" name="user" id="user" value=""><br><br></td> <!-- label for the id -->
					</tr>
					<tr>
					  <td align="right"> <label for="Email">Email</label> </td>
					  <td><input type="text" name="email" id="Email" value=""><br><br></td>
					</tr>
					<tr>
					  <td align="right"><label for="Profession">profession</label> </td>
					   <td> <input type="text" name="profession" id="Profession" value=""><br><br></td>
					</tr>
					<tr>
					  <td align="right"><label for="Nationality">Nationality</label> </td>
					   <td> <input type="text" name="nationality" id="Nationality" value=""><br><br></td>
					</tr>
					<td align="right"><label for="Phone">Phoneno</label> </td>
					   <td> <input type="text" name="phone" id="Phone" value=""><br><br></td>
					</tr>
					<td align="right"><label for="DOB">Birthdate</label> </td>
					   <td> <input type="text" name="DateOfBirth" id="DOB" value=""><br><br></td>
					</tr>
					<td align="right"> <input type="hidden" name="csrf_token" value=""><br><br></td>
					</tr>
					<tr>
					  <td align="right"><input type="button" value="submit"><br><br></td>
					</tr>
					<td align="right"> <button type="button" style="background-color: red;"><a href="destroysession.php">logout</a></button><br><br></td>
					</tr>
				  </table>
			</form>
		<div>
		
		
				
		<footer>

			

		</footer>
	</body>

</html>