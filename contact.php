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
			$number = check_input($_POST['number'], "Enter your phone number");
			$street = check_input($_POST['street'], "Enter your street");
			$city = check_input($_POST['city'], "Enter your city");
			$state = check_input($_POST['state'], "Enter your state");
			//$state = $_POST['state'];
			$zip = check_input($_POST['zip'], "Enter your zip code");
			$department = $_POST['department'];
			$intrests = $_POST['intrest'];
			$comments = $_POST['extra'];


			function check_input($data, $problem='')
			{
				$data = trim($data);
    			$data = stripslashes($data);
   				$data = htmlspecialchars($data);
   				if($data == NULL){
   					$Global['error'] = true;
   				}else{
   					return $data;
   				}
			}


			/*if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
    			error_log("E-mail address not valid");
			}*/

			$formFields = array(
				array(
					'fieldLabel' => "First Name",
					'fieldName' => 'fieldName',
					'fieldValue' => $firstName
				),
				array(
					'fieldLabel' => "Middle Initial",
					'fieldName' => 'fieldName',
					'fieldValue' => $middleInitial
				),
				array(
					'fieldLabel' => "Last Name",
					'fieldName' => 'fieldName',
					'fieldValue' => $lastName
				),
				array(
					'fieldLabel' => "Email",
					'fieldName' => 'fieldName',
					'fieldValue' => $email
				),
				array(
					'fieldLabel' => "Street",
					'fieldName' => 'fieldName',
					'fieldValue' => $street
				),
				array(
					'fieldLabel' => "City",
					'fieldName' => 'fieldName',
					'fieldValue' => $city
				),
				array(
					'fieldLabel' => "State",
					'fieldName' => 'fieldName',
					'fieldValue' => $state
				),
				array(
					'fieldLabel' => "Zip code",
					'fieldName' => 'fieldName',
					'fieldValue' => $zip
				)
			);

			// $valueArray = array($firstName, $middleInitial, $lastName, $email, $street, $city, $state, $zip);
			/*foreach ($formFields as $field) {
				if(empty($field['fieldValue'])){

					echo 'please fill in the following feilds for: ' . $field['fieldLabel'];
				}
				//error_log($feilds);
			}*/

			/*if(empty($firstName)||empty($middleInitial)||empty($lastName)||empty($email)||empty($street)||empty($city)||empty($state)||empty($zip)){
				echo 'please fill in all of the feilds';
				return false;
			}*/



			/*
		$firstName = "";
		$error_css = "";

		if (isset($_POST['submit'])) {
   			if(isset($_POST['firstName']))
        		$firstName = $_POST['firstName'];
    		else
        		$error_css='background-color:red';
		}

/*?>

<label for="username">Username:</label>
<input id="username" type="text" value="<?php echo $username; ?>" name="username" title='Username' style="<?php echo $error_css; ?>"/>*/

			/*function check_input($data, $problem='')
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

			if (count($error) > 0) {
        		show_error($data);
    		}*/


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


			/*session_start();
			if (isset($_SESSION['error']['email'])) {
    			echo '<input  type="text" class="contact_input error" name="email" maxlength="80" size="30" value="' . $_SESSION['error']['email'] . '">';
			} else {
   			// empty input
			}
			session_destroy();*/

			/*function show_error($myError)
			{
				$Global['firstNameError'] = true;
			?>
    			<html>
    				<body>

   					 <b>Please correct the following error:</b><br />
   					 <?php echo $myError; ?>

    				</body>
    			</html>
			<?php
			exit();
			}	*/
		?>

<head>
		<title>Submition Form</title>
	</head>

	<body>

		<header id = main>
			<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
			Please Fill Out Form
		</header>

		<div id = "bar">
			<p>
				Address: 1103 Rocky Drive, Suite 202, Reading, PA 19609
			</p>
			<p>
			Phone Number: 610-898-1330
			</p>
			<div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;"><div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=1103+Rocky+Drive,+Reading&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embedded-map-html" rel="nofollow" href="https://www.hostingreviews.website/compare/network-solutions-vs-ipage" id="enable-map-data">rate ipage with network solutions</a><style>#my-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=90bcf724-febf-2885-7c6a-d987af684644&c=embedded-map-html&u=1464704127" defer="defer" async="async"></script>
		</div>


		<div id = "instructionsDiv">
			<header id="requiredInstructions">Required feilds are <b>bold</b>.</header>
			<form action= "contact.php"  method="post">
			
			<?php foreach ($formFields as $field) {
				if(empty($field['fieldValue'])){
					echo 'Please fill in the following feilds for: ' . $field['fieldLabel'];
				}
				//error_log($feilds);
			}?>

		</div>


		<?php
			//$first = aqua;
			//$middle = aqua;
			//$last = aqua;
			//$email = aqua;
			//$number = aqua;
			//$street = aqua;
			//$city = aqua;
			//$state = aqua;
			//$zip = aqua;
		?>	

		<div>	

			<header id = left>Name</header>
			<p id = left>
				<b>First Name:</b> <input id = <?php if (empty($firstName))echo "red"; ?> type="text" name="firstName" VALUE="<?php print $firstName; ?>"/><br />
				<b>Middle Initial:</b> <input  id = <?php if (empty($middleInitial))echo "red"; ?> type="text" name="middleInitial" VALUE="<?php print $middleInitial; ?>"/><br />
				<b>Last Name:</b> <input id = <?php if (empty($lastName))echo "red"; ?> type="text" name="lastName" VALUE="<?php print $lastName; ?>"/><br />
				<b>Email:</b> <input  id = <?php if (empty($email))echo "red"; ?> type="text" name="email" VALUE="<?php print $email; ?>"/><br />
				<b>Phone Number:</b> <input id = <?php if (empty($number))echo "red"; ?> type="text" name="number" VALUE="<?php print $number; ?>"/><br />
			</p>
		</div>

		<div>
			<header id = right>Address</header>
			<p id = right>
				<b>Street:</b> <input id = <?php if (empty($street))echo "red"; ?> type="text" name="street" VALUE="<?php print $street; ?>"/><br />
				<b>City:</b> <input id = <?php if (empty($city))echo "red"; ?> type="text" name="city" VALUE="<?php print $city; ?>"/><br />
				<b>State:</b> 
					<select  name="state">
					<option value="">--Select a state--</option>
 					<option value="Alabama">Alabama</option>
  					<option value="Alaska">Alaska</option>
  					<option value="Arizona">Arizona</option>
  					<option value="Arkansas">Arkansas</option>
  					<option value="California">California</option>
  					<option value="Colorado">Colorado</option>
  					<option value="Connecticut">Connecticut</option>
  					<option value="Delaware">Delaware</option>
  					<option value="Florida">Florida</option>
  					<option value="Georgia">Georgia</option>
  					<option value="Hawaii">Hawaii</option>
  					<option value="Idaho">Idaho</option>
  					<option value="Illinois">Illinois</option>
  					<option value="Iniana">Iniana</option>
  					<option value="Iowa">Iowa</option>
  					<option value="Kansas">Kansas</option>
  					<option value="Kentucky">Kentucky</option>
  					<option value="Louisiana">Louisiana</option>
  					<option value="Maine">Maine</option>
  					<option value="Maryland">Maryland</option>
  					<option value="Massachusets">Massachusets</option>
  					<option value="Michigan">Michigan</option>
  					<option value="Minnesota">Minnesota</option>
  					<option value="Mississippi">Mississippi</option>
  					<option value="Missouri">Missouri</option>
  					<option value="Montana">Montana</option>
  					<option value="Nebraska">Nebraska</option>
  					<option value="Nevada">Nevada</option>
  					<option value="New Hamshire">New Hamshire</option>
  					<option value="New Jersey">New Jersey</option>
  					<option value="New Mexico">New Mexico</option>
  					<option value="New York">New York</option>
  					<option value="North Carolina">North Carolina</option>
  					<option value="North Dakota">North Dakota</option>
  					<option value="Ohio">Ohio</option>
  					<option value="Oklahoma">Oklahoma</option>
  					<option value="Oregon">Oregon</option>
  					<option value="Pennsylvania">Pennsylvania</option>
  					<option value="Rhode Island">Rhode Island</option>
  					<option value="South Carolina">South Carolina</option>
  					<option value="South Dakota">South Dakota</option>
  					<option value="Tennessee">Tennessee</option>
  					<option value="Texas">Texas</option>
  					<option value="Utah">Utah</option>
  					<option value="Vermont">Vermont</option>
  					<option value="Virginia">Virginia</option>
  					<option value="Washington">Washington</option>
  					<option value="West Virginia">West Virginia</option>
  					<option value="Wisconsin">Wisconsin</option>
  					<option value="Wyoming">Wyoming</option>
					</select><br />
				<b>Zip Code:</b> <input id = <?php if (empty($zip))echo "red"; ?> type="text" name="zip" VALUE="<?php print $zip; ?>"/><br />
			</p>	
		</div>

		<div>
			<header id = left>Department</header>
			<p id = left>
				<input type="radio" name="department" value="Development" <?php if (isset($department) && $department=="Development") echo "checked";?>> Development<br>
				<input type="radio" name="department" value="Sales" <?php if (isset($department) && $department=="Sales") echo "checked";?>> Sales<br>
				<input type="radio" name="department" value="Management" <?php if (isset($department) && $department=="Management") echo "checked";?>> Project Management<br>
				<input type="radio" name="department" value="Design" <?php if (isset($department) && $department=="Design") echo "checked";?>> Design<br>
				<input type="radio" name="department" value="Marketing" <?php if (isset($department) && $department=="Marketing") echo "checked";?>> Marketing<br>
				<input type="radio" name="department" value="SalesBuddy" <?php if (isset($department) && $department=="SalesBuddy") echo "checked";?>> SalesBuddy<br>
			</p>
		</div>

		<div>
			<header id = right>Areas of Intrest</header>
			<p id = right>	
				<input type="checkbox" name="intrest[]" value="reading" <?php if(isset($_POST['intrest[reading]'])) echo "checked='checked'"; ?>>I like to read.<br>
				<input type="checkbox" name="intrest[]" value="drawing" <?php if(isset($_POST['intrest[drawing]'])) echo "checked='checked'"; ?>>I like to draw.<br>
				<input type="checkbox" name="intrest[]" value="videoGames" <?php if(isset($_POST['intrest[videoGames]'])) echo "checked='checked'"; ?>>I like to play video games.<br>
				<input type="checkbox" name="intrest[]" value="computers" <?php if(isset($_POST['intrest[computers]'])) echo "checked='checked'"; ?>>I like computers.<br>
				<input type="checkbox" name="intrest[]" value="sports" <?php if(isset($_POST['intrest[sports]'])) echo "checked='checked'"; ?>>I like sports.<br>
				<input type="checkbox" name="intrest[]" value="cars" <?php if(isset($_POST['intrest[cars]'])) echo "checked='checked'"; ?>>I like cars.<br>
				<input type="checkbox" name="intrest[]" value="politics" <?php if(isset($_POST['intrest[politics]'])) echo "checked='checked'"; ?>>I like politics.<br>
			</p>
		</div>

		<div>
			<p id = left>Additional Information: <input type="text" name="extra" VALUE="<?php print $comments; ?>"/><br /></p>
		</div>

		<div id="submit">
			<input id="form-submitted" type="hidden" name="formSubmitted" value="true" />
			<input id="submit" type="submit" value="Submit">
		</div>	



		</form>








	</body>

	<!--<?php
			/*function test(){
				echo "sigh";
			}
			/*error_log("Before Sending Email");
			mail("mgoldberg@launchdm.com", "Test e-mail", "Hi, this is a test message!");
			use command shift r to hard refresh
			error_log("After Sending Email");*/

			/*$myemail  = "mgoldberg@launchdm.com";
			$ryanEmail  = "ryan@launchdm.com";

			$firstName  = "a";
			$middleInit = $_POST['middleInitial'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$street = $_POST['street'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$department = $_POST['department'];
			$intrests = $_POST['intrests'];
			$comments = $_POST['comments'];
			$intrests = $_POST['intrests'];

			function submitted(){	
				$firstName = check_input($_POST['firstName'], "Enter your first name", "firstName");
				$middleInitial = check_input($_POST['middleInitial'], "Enter your middle initial", "middleInitial");
				$lastName = check_input($_POST['lastName'], "Enter your last name", "lastName");
				$email = check_input($_POST['email'], "Enter your email", "email");
				$street = check_input($_POST['street'], "Enter your street", "street");
				$city = check_input($_POST['city'], "Enter your city", "city");
				$state = check_input($_POST['state'], "Enter your state", "state");
				//$state = $_POST['state'];
				$zip = check_input($_POST['zip'], "Enter your zip code", "zip");
				$department = $_POST['department'];
				$intrests = $_POST['intrest'];
				$comments = $_POST['extra'];

				senmdMail();
			}

			function check_input($data, $problem='', $dataType)
			{
				$data = trim($data);
    			$data = stripslashes($data);
   				$data = htmlspecialchars($data);
   				if($data == NULL){
   					if($dataType == "firstName"){
   						//$first = red;
   					}
   				}else{
   					return $data;
   				}
			}


			/*if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
    			$error("E-mail address not valid");
			}*/

/*
		$firstName = "";
		$error_css = "";

		if (isset($_POST['submit'])) {
   			if(isset($_POST['firstName']))
        		$firstName = $_POST['firstName'];
    		else
        		$error_css='background-color:red';
		}

/*?>

<label for="username">Username:</label>
<input id="username" type="text" value="<?php echo $username; ?>" name="username" title='Username' style="<?php echo $error_css; ?>"/>*/

			/*function check_input($data, $problem='')
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

			if (count($error) > 0) {
        		show_error($data);
    		}*/

    		/*function senmdMail()
    		{
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
			}
			/*function died($error) {
   				session_start();
    			$_SESSION['error'] = $error;
    			header('Location: index.php');
   				die();
			}*/

			/*session_start();
			if (isset($_SESSION['error']['email'])) {
    			echo '<input  type="text" class="contact_input error" name="email" maxlength="80" size="30" value="' . $_SESSION['error']['email'] . '">';
			} else {
   			// empty input
			}
			session_destroy();*/

			/*function show_error($myError)
			{
				$Global['firstNameError'] = true;
			?>
    			<html>
    				<body>

   					 <b>Please correct the following error:</b><br />
   					 <?php echo $myError; ?>

    				</body>
    			</html>
			<?php
			exit();
			}	*/	
		?>-->
