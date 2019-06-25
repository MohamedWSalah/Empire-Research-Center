<title>change password </title>
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
			 <form method="post" action="updatepass.php">
				  <table style="width:70%">
					<tr>
					  <th><h2>Change password </h2></th>
					<tr>
					  <td align="right"><label for="Current_password">Current Password</label> </td>
					  <td> <input type="password" name="Current_password" id="Current_password" value=""><br><br></td>
					</tr>
					<tr>
					  <td align="right"> <label for="New_passpassword">New Password</label> </td>
					  <td> <input type="password" name="New_password" id="New_pass" 	value=""><br><br></td>
					</tr>
					<tr>
					  <td align="right"><input type="button" value="save"><br><br></td>
					</tr>
				
				  </table>
			</form>
		<div>
		
		
				
		<footer>

			

		</footer>
	</body>

</html>