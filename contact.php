<?php

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
			$zip = check_input($_POST['zip'], "Enter your zip code");
			$department = $_POST['department'];
			$intrest = $_POST['intrest'];
			$comments = $_POST['extra'];


			function check_input($data, $problem=''){
				$data = trim($data);
    			$data = stripslashes($data);
   				$data = htmlspecialchars($data);
   				if($data == NULL){
   					$Global['error'] = true;
   				}else{
   					return $data;
   				}
			}

	
			$formFields = array(
				array(
					'fieldLabel' => "First Name",
					'fieldName' => 'fieldName',
					'fieldValue' => $firstName,
				),
				array(
					'fieldLabel' => "Middle Initial",
					'fieldName' => 'fieldName',
					'fieldValue' => $middleInitial,
				),
				array(
					'fieldLabel' => "Last Name",
					'fieldName' => 'fieldName',
					'fieldValue' => $lastName,
				),
				array(
					'fieldLabel' => "Phone Number",
					'fieldName' => 'fieldName',
					'fieldValue' => $number,
				),
				array(
					'fieldLabel' => "Email",
					'fieldName' => 'fieldName',
					'fieldValue' => $email,
				),
				array(
					'fieldLabel' => "Street",
					'fieldName' => 'fieldName',
					'fieldValue' => $street,
				),
				array(
					'fieldLabel' => "City",
					'fieldName' => 'fieldName',
					'fieldValue' => $city,
				),
				array(
					'fieldLabel' => "State",
					'fieldName' => 'fieldName',
					'fieldValue' => $state,
				),
				array(
					'fieldLabel' => "Zip code",
					'fieldName' => 'fieldName',
					'fieldValue' => $zip,
				),
			);



			$message = "Hello!

						Your contact form has been submitted by:

						First name: $firstName
						Middle initial: $middleInitial
						Last name: $lastName
						E-mail: $email
						Phone Number: $number
						Street: $street
						City: $city
						State: $state
						Zip code: $zip
						Department: $department
						Intrests: ". implode(', ', $intrest)."
						Other comments: $comments

						End of message
						";
			
			if(!empty($firstName)&&!empty($middleInitial)&&!empty($lastName)&&!empty($email)&&!empty($number)&&!empty($street)&&!empty($city)&&!empty($state)&&!empty($zip)){
				//return false;
				mail($myemail, "data", $message);
				mail($ryanEmail, "data", $message);
				echo "Thank you for filling out the form!";
			}

			
		?>

<!DOCTYPE HTML>

	<head>
		<title>Submition Form</title>
	</head>

	<body>

		<header id = "main">
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
			<div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;">
				<div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
					<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=1103+Rocky+Drive,+Reading&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
				</div>
				<a class="embedded-map-html" rel="nofollow" href="https://www.hostingreviews.website/compare/network-solutions-vs-ipage" id="enable-map-data">rate ipage with network solutions</a>
					<style>#my-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style>
			</div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=90bcf724-febf-2885-7c6a-d987af684644&c=embedded-map-html&u=1464704127" defer="defer" async="async"></script>
		</div>


		<div id = "instructionsDiv">
			<header id="requiredInstructions">Required feilds are <b>bold</b>.</header>
			<form action= "contact.php"  method="post">
			
			<?php foreach ($formFields as $field) {
				if(empty($field['fieldValue'])){
					echo 'Please fill in the following feilds for: ' . $field['fieldLabel']."<br>";
				}
			}?>
		</div>

		<div>	

			<header id = left>Name</header>
			<p id = left>
				<b>First Name:</b> <input id = "<?php if (empty($firstName)){echo "red";} ?>" type="text" name="firstName" value="<?php print $firstName; ?>"/><br />
				<b>Middle Initial:</b> <input  id = "<?php if (empty($middleInitial))echo "red"; ?> type="text" name="middleInitial" VALUE="<?php print $middleInitial; ?>"/><br />
				<b>Last Name:</b> <input id = "<?php if (empty($lastName))echo "red"; ?> type="text" name="lastName" value="<?php print $lastName; ?>"/><br />
				<b>Email:</b> <input  id = "<?php if (empty($email))echo "red"; ?>" type="text" name="email" value="<?php print $email; ?>"/><br />
				<b>Phone Number:</b> <input id = "<?php if (empty($number))echo "red"; ?>" type="text" name="number" value="<?php print $number; ?>"/><br />
			</p>
		</div>

		<div>
			<header id = right>Address</header>
			<p id = right>
				<b>Street:</b> <input id = "<?php if (empty($street))echo "red"; ?> type="text" name="street" value="<?php print $street; ?>"/><br />
				<b>City:</b> <input id = "<?php if (empty($city))echo "red"; ?> type="text" name="city" value="<?php print $city; ?>"/><br />
				<b>State:</b> 
					<select name="state"  id = <?php if (empty($_POST['state']))echo "red"; ?>>
					<option value="">--Select a state--</option>
 					<option value="Alabama" <?php if($state == 'Alabama') { ?> selected <?php } ?>>Alabama</option>
  					<option value="Alaska" <?php if($state == 'Alaska') { ?> selected <?php } ?>>Alaska</option>
  					<option value="Arizona" <?php if($state == 'Arizona') { ?> selected <?php } ?>>Arizona</option>
  					<option value="Arkansas" <?php if($state == 'Arkansas') { ?> selected <?php } ?>>Arkansas</option>
  					<option value="California" <?php if($state == 'California') { ?> selected <?php } ?>>California</option>
  					<option value="Colorado" <?php if($state == 'Colorado') { ?> selected <?php } ?>>Colorado</option>
  					<option value="Connecticut" <?php if($state == 'Connecticut') { ?> selected <?php } ?>>Connecticut</option>
  					<option value="Delaware" <?php if($state == 'Delaware') { ?> selected <?php } ?>>Delaware</option>
  					<option value="Florida" <?php if($state == 'Florida') { ?> selected <?php } ?>>Florida</option>
  					<option value="Georgia" <?php if($state == 'Georgia') { ?> selected <?php } ?>>Georgia</option>
  					<option value="Hawaii" <?php if($state == 'Hawaii') { ?> selected <?php } ?>>Hawaii</option>
  					<option value="Idaho" <?php if($state == 'Idaho') { ?> selected <?php } ?>>Idaho</option>
  					<option value="Illinois" <?php if($state == 'Illinois') { ?> selected <?php } ?>>Illinois</option>
  					<option value="Iniana" <?php if($state == 'Iniana') { ?> selected <?php } ?>>Indiana</option>
  					<option value="Iowa"<?php if($state == 'Iowa') { ?> selected <?php } ?>>Iowa</option>
  					<option value="Kansas" <?php if($state == 'Kansas') { ?> selected <?php } ?>>Kansas</option>
  					<option value="Kentucky" <?php if($state == 'Kentucky') { ?> selected <?php } ?>>Kentucky</option>
  					<option value="Louisiana" <?php if($state == 'Louisiana') { ?> selected <?php } ?>>Louisiana</option>
  					<option value="Maine" <?php if($state == 'Maine') { ?> selected <?php } ?>>Maine</option>
  					<option value="Maryland" <?php if($state == 'Maryland') { ?> selected <?php } ?>>Maryland</option>
  					<option value="Massachusets" <?php if($state == 'Massachusets') { ?> selected <?php } ?>>Massachusets</option>
  					<option value="Michigan" <?php if($state == 'Michigan') { ?> selected <?php } ?>>Michigan</option>
  					<option value="Minnesota" <?php if($state == 'Minnesota') { ?> selected <?php } ?>>Minnesota</option>
  					<option value="Mississippi" <?php if($state == 'Mississippi') { ?> selected <?php } ?>>Mississippi</option>
  					<option value="Missouri" <?php if($state == 'Missouri') { ?> selected <?php } ?>>Missouri</option>
  					<option value="Montana" <?php if($state == 'Montana') { ?> selected <?php } ?>>Montana</option>
  					<option value="Nebraska" <?php if($state == 'Nebraska') { ?> selected <?php } ?>>Nebraska</option>
  					<option value="Nevada" <?php if($state == 'Nevada') { ?> selected <?php } ?>>Nevada</option>
  					<option value="New Hamshire" <?php if($state == 'New Hamshire') { ?> selected <?php } ?>>New Hamshire</option>
  					<option value="New Jersey" <?php if($state == 'New Jersey') { ?> selected <?php } ?>>New Jersey</option>
  					<option value="New Mexico" <?php if($state == 'New Mexico') { ?> selected <?php } ?>>New Mexico</option>
  					<option value="New York" <?php if($state == 'New York') { ?> selected <?php } ?>>New York</option>
  					<option value="North Carolina" <?php if($state == 'North Carolina') { ?> selected <?php } ?>>North Carolina</option>
  					<option value="North Dakota" <?php if($state == 'North Dakota') { ?> selected <?php } ?>>North Dakota</option>
  					<option value="Ohio" <?php if($state == 'Ohio') { ?> selected <?php } ?>>Ohio</option>
  					<option value="Oklahoma" <?php if($state == 'Oklahoma') { ?> selected <?php } ?>>Oklahoma</option>
  					<option value="Oregon" <?php if($state == 'Alabama') { ?> selected <?php } ?>>Oregon</option>
  					<option value="Pennsylvania" <?php if($state == 'Pennsylvania') { ?> selected <?php } ?>>Pennsylvania</option>
  					<option value="Rhode Island" <?php if($state == 'Rhode Island') { ?> selected <?php } ?>>Rhode Island</option>
  					<option value="South Carolina" <?php if($state == 'South Carolina') { ?> selected <?php } ?>>South Carolina</option>
  					<option value="South Dakota" <?php if($state == 'South Dakota') { ?> selected <?php } ?> >South Dakota</option>
  					<option value="Tennessee" <?php if($state == 'Tennessee') { ?> selected <?php } ?>>Tennessee</option>
  					<option value="Texas" <?php if($state == 'Texas') { ?> selected <?php } ?>>Texas</option>
  					<option value="Utah" <?php if($state == 'Utah') { ?> selected <?php } ?>>Utah</option>
  					<option value="Vermont" <?php if($state == 'Vermont') { ?> selected <?php } ?>>Vermont</option>
  					<option value="Virginia" <?php if($state == 'Virginia') { ?> selected <?php } ?>>Virginia</option>
  					<option value="Washington" <?php if($state == 'Washington') { ?> selected <?php } ?>>Washington</option>
  					<option value="West Virginia" <?php if($state == 'West Virginia') { ?> selected <?php } ?>>West Virginia</option>
  					<option value="Wisconsin" <?php if($state == 'Wisconsin') { ?> selected <?php } ?>>Wisconsin</option>
  					<option value="Wyoming" <?php if($state == 'Wyoming') { ?> selected <?php } ?>>Wyoming</option>
					</select><br />
				<b>Zip Code:</b> <input id = "<?php if (empty($zip))echo "red"; ?> type="text" name="zip" VALUE="<?php print $zip; ?>"/><br />
			</p>	
		</div>

		<div>
			<header id = "left">Department</header>
			<p id = "left">
				<input type="radio" name="department" value="Development" <?php if (isset($department) && $department=="Development") echo "checked";?>> Development<br>
				<input type="radio" name="department" value="Sales" <?php if (isset($department) && $department=="Sales") echo "checked";?>> Sales<br>
				<input type="radio" name="department" value="Management" <?php if (isset($department) && $department=="Management") echo "checked";?>> Project Management<br>
				<input type="radio" name="department" value="Design" <?php if (isset($department) && $department=="Design") echo "checked";?>> Design<br>
				<input type="radio" name="department" value="Marketing" <?php if (isset($department) && $department=="Marketing") echo "checked";?>> Marketing<br>
				<input type="radio" name="department" value="SalesBuddy" <?php if (isset($department) && $department=="SalesBuddy") echo "checked";?>> SalesBuddy<br>
			</p>
		</div>

		<div>
			<header id = "right">Areas of Intrest</header>
			<p id = "right">	
				<input type="checkbox" name="intrest[]" value="reading" <?= (in_array('reading', $intrest)) ? 'checked' : ''; ?>>I like to read.<br>
				<input type="checkbox" name="intrest[]" value="drawing" <?= (in_array('drawing', $intrest)) ? 'checked' : ''; ?>>I like to draw.<br>
				<input type="checkbox" name="intrest[]" value="videoGames" <?= (in_array('videoGames', $intrest)) ? 'checked' : ''; ?>>I like to play video games.<br>
				<input type="checkbox" name="intrest[]" value="computers" <?= (in_array('computers', $intrest)) ? 'checked' : ''; ?>>I like computers.<br>
				<input type="checkbox" name="intrest[]" value="sports" <?= (in_array('sports', $intrest)) ? 'checked' : ''; ?>>I like sports.<br>
				<input type="checkbox" name="intrest[]" value="cars" <?= (in_array('cars', $intrest)) ? 'checked' : ''; ?>>I like cars.<br>
				<input type="checkbox" name="intrest[]" value="politics" <?= (in_array('politics', $intrest)) ? 'checked' : ''; ?>>I like politics.<br>
			</p>
		</div>

		<div>
			<p id = "left">Additional Information: <input type="text" name="extra" value="<?php print $comments; ?>"/><br /></p>
		</div>

		<div id="submit">
			<input id="form-submitted" type="hidden" name="formSubmitted" value="true" />
			<input id="submit" type="submit" value="Submit">
		</div>	



		</form>

	</body>
</html>