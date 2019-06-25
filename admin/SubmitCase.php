<html>
    <head>
        <title>admin submit cases </title>
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
			 <form action="case.php" method="post" name="case" id="case" novalidate>
                Title:<br>
                <input type="text" name="title" value="" id="title">
                <br><br>
                Comment:<br>
                <textarea rows="8" cols="55" name="description" form="case" id="comment"></textarea>
                <br>
				<input type="hidden" name="csrf_token" value="">
				<br>
                <input type="submit" value="Submit" onclick="action2()">
                
            </form>
		<div>
		
				
		<footer>

			

		</footer>
	</body>

</html>