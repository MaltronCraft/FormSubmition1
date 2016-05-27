<!DOCTYPE HTML>

	<head>
		<title>Submition Form</title>
	</head>

	<body>

		<header>
			Please Fill Out Form
		</header>

		<div>
			<form action="contact.php" method="post">

			<header>Name</header>
			<p>
				<b>First Name:</b> <input type="text" name="firstName" /><br />
				<b>Middle Initial:</b> <input type="text" name="middleInitial" /><br />
				<b>Last Name:</b> <input type="text" name="lastName" /><br />
				<b>Email:</b> <input type="text" name="email" /><br />
				<b>Phone Number:</b> <input type="text" name="number" /><br />
			</p>

			<header>Address</header>
			<p>
				<b>Street:</b> <input type="text" name="street" /><br />
				<b>City:</b> <input type="text" name="city" /><br />
				<b>State:</b> 
					<select name="state">
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
				<b>Zip Code:</b> <input type="text" name="zip" /><br />
			</p>	

			<header>Department</header>
			<p>
				<input type="radio" name="department" value="Development" checked> Development<br>
				<input type="radio" name="department" value="Sales" checked> Sales<br>
				<input type="radio" name="department" value="Management" checked> Project Management<br>
				<input type="radio" name="department" value="Design" checked> Design<br>
				<input type="radio" name="department" value="Marketing" checked> Marketing<br>
				<input type="radio" name="department" value="SalesBuddy" checked> SalesBuddy<br>
			</p>

			<header>Areas of Intrest</header>
			<p>	
				<input type="checkbox" name="intrest[]" value="reading">I like to read.<br>
				<input type="checkbox" name="intrest[]" value="drawing">I like to draw.<br>
				<input type="checkbox" name="intrest[]" value="videoGames">I like to play video games.<br>
				<input type="checkbox" name="intrest[]" value="computers">I like computers.<br>
				<input type="checkbox" name="intrest[]" value="sports">I like sports.<br>
				<input type="checkbox" name="intrest[]" value="cars">I like cars.<br>
				<input type="checkbox" name="intrest[]" value="politics">I like politics.<br>
			</p>


			<p>Additional Information: <input type="text" name="extra" /><br /></p>

			<input type="submit" value="Submit">

			</form>

		</div>






	</body>

</HTML>