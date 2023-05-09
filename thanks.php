<html>
	<head>
		<title>Form receipt</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<p>
			First Name: <?php echo $_POST["first_name"]; ?> <br />
			Email: <?php echo $_POST["email"]; ?> <br />
			Password: <?php echo $_POST["password"]; ?> <br />
			Your response to choose one is <?php echo $_POST["yes_no"]; ?> <br />
			Your responses to choose multiple are <?php echo $_POST["choice_1"]; ?> <?php echo $_POST["choice_2"]; ?> <?php echo $_POST["choice_3"]; ?> <?php echo $_POST["choice_4"]; ?> <br/>
			Your response to choose from the list is <?php echo $_POST["drop-down"]; ?> <br />
			Your response to type a paragraph is <?php echo $_POST["para"]; ?> <br />
		</p>
	
	
	
	
	
	</body>
</html>