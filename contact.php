		<?php

			/*error_log("Before Sending Email");
			mail("mgoldberg@launchdm.com", "Test e-mail", "Hi, this is a test message!");
			use command shift r to hard refresh
			error_log("After Sending Email");*/

			$myemail  = "mgoldberg@launchdm.com";
			$ryanEmail  = "ryan@launchdm.com";

			$firstName = check_input($_POST['firstName'], "Enter your first name");
			$middleInitial = check_input($_POST['middleInitial'], "Enter your middle initial");
			$lastName = check_input($_POST['lastName'], "Enter your last name");
			$email = check_input($_POST['email'], "Enter your email");
			$street = check_input($_POST['street'], "Enter your street");
			$city = check_input($_POST['city'], "Enter your city");
			$state = check_input($_POST['state'], "Enter your state");
			//$state = $_POST['state'];
			$zip = check_input($_POST['zip'], "Enter your zip code");
			$department = $_POST['department'];
			$intrests = $_POST['intrest'];
			$comments = $_POST['extra'];

			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
    			show_error("E-mail address not valid");
			}

			function check_input($data, $problem='')
			{
   				$data = trim($data);
    			$data = stripslashes($data);
   				$data = htmlspecialchars($data);
   				if ($problem && strlen($data) == 0)
    			{
       				show_error($problem);
    			}
    			return $data;
			}

			$message = "Hello!

						Your contact form has been submitted by:

						First name: $firstName
						Middle initial: $middleInitial
						Last name: $lastName
						E-mail: $email
						Street: $street
						City: $city
						State: $state
						Zip code: $zip
						Department: $department
						Intrests: ". implode(', ', $intrests)."
						Other comments: $comments

						End of message
						";

			mail($myemail, "data", $message);
			mail($ryanEmail, "data", $message);

			function show_error($myError)
			{
			?>
    			<html>
    				<body>

   					 <b>Please correct the following error:</b><br />
   					 <?php echo $myError; ?>

    				</body>
    			</html>
			<?php
			exit();
			}	
		?>