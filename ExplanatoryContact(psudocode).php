Contact.php

Contact Page Loads

if( formSubmitted() ){
	
	1. Parse the input.
	2. Validate the input.

	if( noValidationErrors() ){

		Render Thank You Message or Render Some Message and not the form.
	} else {

		Render Form fields, fields with error get rendered differently
	}
} else {
	
	Render form with fields
}